<?php

namespace Webarticum\Core\Path;

class Path {
    
    private $path;
    
    
    public function __construct($path) {
        $this->path = $path;
    }
    
    
    public function getPath() {
        return $this->path;
    }
    
    public function __toString() {
        return $this->getPath();
    }
    
    public function sub($subPath) {
        return new Path($this->path . \DIRECTORY_SEPARATOR . $subPath);
    }
    
    public function exists() {
        return file_exists($this->path);
    }
    
    public function isFile() {
        return is_file($this->path);
    }
    
    public function isDirectory() {
        return is_dir($this->path);
    }
    
    public function unlink() {
        return unlink($this->path);
    }
    
    public function rmdir() {
        return rmdir($this->path);
    }
    
    public function rmTree() {
        return $this->deleteTree($this->path);
    }
    
    public function deleteTree($path) {
        if (is_dir($path)) {
            foreach (scandir($path) as $entry) {
                if ($entry != '.' && $entry != '..') {
                    $subPath = $path . \DIRECTORY_SEPARATOR . $entry;
                    if (!$this->deleteTree($subPath)) {
                        return false;
                    }
                }
            }
            return rmdir($path);
        } else {
            return unlink($path);
        }
    }
    
}