<?php

namespace Webarticum\Core\Request;

class Headers {
    
    private $headerMap;
    
    public function __construct($headers = null) {
        if (is_array($headers)) {
            foreach ($headers as $key => $value) {
                $this->addHeader($key, $value);
            }
        } elseif ($headers instanceof Headers) {
            $this->headerMap = $headers->headerMap;
        }
    }
    
    public function addHeader($key, $value = null) {
        if (is_string($key)) {
            if (is_null($value) && $colonPos = strpos($key, ':') !== false) {
                $headerKey = substr($key, 0, $colonPos);
                $headerValue = substr($key, $colonPos + 1);
            } elseif (is_array($value)) {
                foreach ($value as $subValue) {
                    $this->addHeader($key, $subValue);
                }
                return;
            } else {
                $headerKey = $key;
                $headerValue = $value;
            }
        } elseif (is_array($value) && count($value) > 1) {
            $headerKey = $value[0];
            $headerValue = $value[1];
        } elseif (is_string($value) && $colonPos = strpos($value, ':') !== false) {
            $headerKey = substr($value, 0, $colonPos);
            $headerValue = substr($value, $colonPos + 1);
        } else {
            $headerKey = "";
            $headerValue = $value;
        }
        
        $headerKey = $this->normalizeKey(trim($headerKey));
        if (is_null($headerValue)) {
            $this->headerMap[$headerKey] = [];
        } else {
            $headerValue = trim($headerValue);
            $this->headerMap[$headerKey][] = $headerValue;
        }
    }
    
    public function get($key) {
        $allValues = $this->getAll($key);
        if (empty($allValues)) {
            return null;
        }
        
        return $allValues;
    }
    
    public function getAll($key) {
        $normalizedKey = $this->normalizeKey($key);
        if (array_key_exists($normalizedKey, $this->headerMap)) {
            return $this->headerMap[$normalizedKey][0];
        } else {
            return [];
        }
    }
    
    private function normalizeKey($key) {
        return strtolower($key);
    }
    
}

