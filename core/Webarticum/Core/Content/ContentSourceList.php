<?php

namespace Webarticum\Core\Content;

// FIXME/TODO: prepend/append, method chaining (?)

/**
 * Composite from content sources
 */
class ContentSourceList implements Source {
    
    use SourceTrait;
    
    protected $contentSources;
    
    protected $separator;
    
    /**
     * @param \Webarticum\Core\Content\Source[]|string[] $contentSources
     * @param string $separator
     */
    public function __construct($sources = [], $separator = "") {
        $this->contentSources = [];
        $this->separator = $separator;
        
        foreach ($sources as $source) {
            $this->add($source);
        }
    }
    
    /**
     * Adds a new content source to the list
     *
     * @param \Webarticum\Core\Content\Source|string $oContentSource
     */
    public function add($source) {
        $this->contentSources[] = ($source instanceof Source) ? $source : new StaticSource("$source");
    }
    
    /**
     * Gets the composite content
     *
     * @return string
     */
    public function get() {
        return implode($this->separator, array_map(function(Source $oContentSource){
            return $oContentSource->get();
        }, $this->contentSources));
    }
    
    /**
     * Prints the composite content
     */
    public function flush() {
        $first = true;
        foreach ($this->contentSources as $oContentSource) {
            if (!$first) {
                echo $this->separator;
            } else {
                $first = false;
            }
            $oContentSource->flush();
        }
    }
    
}
