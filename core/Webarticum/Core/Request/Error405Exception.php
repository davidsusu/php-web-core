<?php

namespace Webarticum\Core\Request;


class Error405Exception extends HttpException {
    public function __construct($message="") {
        parent::__construct(405, $message);
    }
}
