<?php

use Webarticum\Core\Autoload\Registrator;
use Webarticum\Core\Autoload\PathAutoloader;

require_once(__DIR__ . '/Webarticum/Core/Autoload/Autoloader.php');
require_once(__DIR__ . '/Webarticum/Core/Autoload/FileAutoloader.php');
require_once(__DIR__ . '/Webarticum/Core/Autoload/AutoloaderTrait.php');
require_once(__DIR__ . '/Webarticum/Core/Autoload/FileAutoloaderTrait.php');
require_once(__DIR__ . '/Webarticum/Core/Autoload/PathAutoloader.php');
require_once(__DIR__ . '/Webarticum/Core/Autoload/RegexPathAutoloader.php'); // XXX
require_once(__DIR__ . '/Webarticum/Core/Autoload/Registrator.php');

Registrator::register(new PathAutoloader('Webarticum\\Core', __DIR__ . '/Webarticum/Core'));

