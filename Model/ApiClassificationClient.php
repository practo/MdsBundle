<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Practo\MDS\Model {

  class ApiClassificationClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
      parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Practo\MDS\Model\AddApiClassificationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function add(\Practo\MDS\Model\AddApiClassificationRequest $argument,
      $metadata = [], $options = []) {
      $request = $argument->encode();
      $callFunc = function($entry) {
        return sprintf("%02X",$entry);
      };
      $hexPayLoad = implode("", array_map($callFunc, unpack("C*", $request)));
      $metadata["_auth_payload"] = "Practo.MDS.Model.ApiClassification/add" . $hexPayLoad;
      return $this->_simpleRequest('/Practo.MDS.Model.ApiClassification/add',
      $argument,
      ['\Practo\MDS\Model\AddResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MDS\Model\FetchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fetch(\Practo\MDS\Model\FetchRequest $argument,
      $metadata = [], $options = []) {
      $request = $argument->encode();
      $callFunc = function($entry) {
        return sprintf("%02X",$entry);
      };
      $hexPayLoad = implode("", array_map($callFunc, unpack("C*", $request)));
      $metadata["_auth_payload"] = "Practo.MDS.Model.ApiClassification/fetch" . $hexPayLoad;
      return $this->_simpleRequest('/Practo.MDS.Model.ApiClassification/fetch',
      $argument,
      ['\Practo\MDS\Model\FetchApiClassificationResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MDS\Model\FetchAllRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fetchAll(\Practo\MDS\Model\FetchAllRequest $argument,
      $metadata = [], $options = []) {
      $request = $argument->encode();
      $callFunc = function($entry) {
        return sprintf("%02X",$entry);
      };
      $hexPayLoad = implode("", array_map($callFunc, unpack("C*", $request)));
      $metadata["_auth_payload"] = "Practo.MDS.Model.ApiClassification/fetchAll" . $hexPayLoad;
      return $this->_simpleRequest('/Practo.MDS.Model.ApiClassification/fetchAll',
      $argument,
      ['\Practo\MDS\Model\FetchAllApiClassificationResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MDS\Model\FetchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fetchExtended(\Practo\MDS\Model\FetchRequest $argument,
      $metadata = [], $options = []) {
      $request = $argument->encode();
      $callFunc = function($entry) {
        return sprintf("%02X",$entry);
      };
      $hexPayLoad = implode("", array_map($callFunc, unpack("C*", $request)));
      $metadata["_auth_payload"] = "Practo.MDS.Model.ApiClassification/fetchExtended" . $hexPayLoad;
      return $this->_simpleRequest('/Practo.MDS.Model.ApiClassification/fetchExtended',
      $argument,
      ['\Practo\MDS\Model\FetchApiClassificationExtendedResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MDS\Model\FetchAllRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fetchAllExtended(\Practo\MDS\Model\FetchAllRequest $argument,
      $metadata = [], $options = []) {
      $request = $argument->encode();
      $callFunc = function($entry) {
        return sprintf("%02X",$entry);
      };
      $hexPayLoad = implode("", array_map($callFunc, unpack("C*", $request)));
      $metadata["_auth_payload"] = "Practo.MDS.Model.ApiClassification/fetchAllExtended" . $hexPayLoad;
      return $this->_simpleRequest('/Practo.MDS.Model.ApiClassification/fetchAllExtended',
      $argument,
      ['\Practo\MDS\Model\FetchAllApiClassificationExtendedResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MDS\Model\ApiClassificationSearchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function search(\Practo\MDS\Model\ApiClassificationSearchRequest $argument,
      $metadata = [], $options = []) {
      $request = $argument->encode();
      $callFunc = function($entry) {
        return sprintf("%02X",$entry);
      };
      $hexPayLoad = implode("", array_map($callFunc, unpack("C*", $request)));
      $metadata["_auth_payload"] = "Practo.MDS.Model.ApiClassification/search" . $hexPayLoad;
      return $this->_simpleRequest('/Practo.MDS.Model.ApiClassification/search',
      $argument,
      ['\Practo\MDS\Model\FetchAllApiClassificationResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MDS\Model\FetchByIdsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fetchByIds(\Practo\MDS\Model\FetchByIdsRequest $argument,
      $metadata = [], $options = []) {
      $request = $argument->encode();
      $callFunc = function($entry) {
        return sprintf("%02X",$entry);
      };
      $hexPayLoad = implode("", array_map($callFunc, unpack("C*", $request)));
      $metadata["_auth_payload"] = "Practo.MDS.Model.ApiClassification/fetchByIds" . $hexPayLoad;
      return $this->_simpleRequest('/Practo.MDS.Model.ApiClassification/fetchByIds',
      $argument,
      ['\Practo\MDS\Model\FetchAllApiClassificationResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MDS\Model\VisibilityChangeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function visiblityChange(\Practo\MDS\Model\VisibilityChangeRequest $argument,
      $metadata = [], $options = []) {
      $request = $argument->encode();
      $callFunc = function($entry) {
        return sprintf("%02X",$entry);
      };
      $hexPayLoad = implode("", array_map($callFunc, unpack("C*", $request)));
      $metadata["_auth_payload"] = "Practo.MDS.Model.ApiClassification/visiblityChange" . $hexPayLoad;
      return $this->_simpleRequest('/Practo.MDS.Model.ApiClassification/visiblityChange',
      $argument,
      ['\Practo\MDS\Model\VisibilityChangeResponse', 'decode'],
      $metadata, $options);
    }

  }

}
