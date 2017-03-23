<?php

namespace Practo\MDS\Config;

use Practo\MDS\Utility\AuthUtility

class Constant {

	public function __construct($source, $secret) {
		
		AuthUtility::$source = $source;

		AuthUtility::$secret = $secret;
    }
}