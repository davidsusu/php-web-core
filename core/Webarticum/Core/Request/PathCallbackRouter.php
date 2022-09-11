<?php

namespace Webarticum\Core\Request;


/**
 * Common router implementation based on request path pattern and closure
 */
class PathCallbackRouter implements Router {
    
    const PATTERN_DELIMITER = '#';
    
    const DEFAULT_PATTERN = '[^/]+';
    
    protected $method;
    
    protected $pathPattern;
    
    protected $callback;
    
    protected $passRequest;
    
    private $fullRegexPattern = null;
    
    public function __construct($method, $pathPattern, callable $callback, $passRequest = false) {
        $this->method = strtolower($method);
        $this->pathPattern = $pathPattern;
        $this->callback = $callback;
        $this->passRequest = $passRequest;
    }
    
    /**
     * Tries to handle the given request
     *
     * @param \Webarticum\Core\Request\Request
     * @return\Webarticum\Core\Request\Response
     */
    public function handleRequest(Request $oRequest) {
        if (
            strtolower($oRequest->getMethod()) == $this->method &&
            preg_match($this->getFullRegexPattern(), $oRequest->getPath(), $match)
        ) {
            $parameters = $match;
            if ($this->passRequest) {
                $parameters[0] = $oRequest;
            } else {
                array_shift($parameters);
            }
            return call_user_func_array($this->callback, $parameters);
        } else {
            return (new ResponseBuilder())->setHttpStatus(404)->setApplicableStatus(Response::APPLICABLE_CONTINUE)->build();
        }
    }
    
    private function getFullRegexPattern() {
        if (is_null($this->fullRegexPattern)) {
            $this->fullRegexPattern = self::PATTERN_DELIMITER . '^';
            preg_match_all("@\\{(\\w+|(\\w+\\s*)?(#([^#]*)#)?)\\}@", $this->pathPattern, $matches, PREG_OFFSET_CAPTURE); // FIXME: escape #
            $position = 0;
            foreach ($matches[0] as $i => $match) {
                $token = $match[0];
                $offset = $match[1];
                $subPattern = self::DEFAULT_PATTERN;
                if (!empty($matches[4][$i][0])) {
                    $subPattern = $matches[4][$i][0];
                    $subPattern = preg_replace('#((^|[^\\\\])(\\\\\\\\)*)\\(#', '$2(?:', $subPattern);
                }
                $before = substr($this->pathPattern, $position, $offset - $position);
                $this->fullRegexPattern .= preg_quote($before, self::PATTERN_DELIMITER) . "(" . $subPattern . ")";
                $position = $offset + strlen($token);
            }
            $after = substr($this->pathPattern, $position);
            $this->fullRegexPattern .= preg_quote($after, self::PATTERN_DELIMITER) . '$' . self::PATTERN_DELIMITER;
        }
        return $this->fullRegexPattern;
    }
    
}
