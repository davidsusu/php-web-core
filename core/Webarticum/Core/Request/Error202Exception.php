<?php

namespace Webarticum\Core\Request;


class Error202Exception extends HttpException {
    public function __construct($message="") {
        parent::__construct(202, $message);
    }
}
