<?php

namespace Webarticum\Core\Request;


class Error404Exception extends HttpException {
    public function __construct($message="") {
        parent::__construct(404, $message);
    }
}
