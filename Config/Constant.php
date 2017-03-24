<?php

namespace Practo\MDS\Config;

use Practo\MDS\Utility\AuthUtility;

class Constant {

	public function __construct($source, $secret) {

        AuthUtility::setSource($source);

        AuthUtility::setSecret($secret);
    }
}