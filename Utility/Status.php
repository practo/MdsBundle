<?php
namespace Practo\MDS\Utility;

Class Status
{
	public $code;

	public $details;

	private $validResponseCode = [200, 201];

	public static function successCode($code) {
		return in_array($code, $validResponseCode);
	}
}