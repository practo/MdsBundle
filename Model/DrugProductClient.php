<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Practo\MDS\Model {

  class DrugProductClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
      parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Practo\MDS\Model\AddDrugProductRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function add(\Practo\MDS\Model\AddDrugProductRequest $argument,
      $metadata = [], $options = []) {
      $request = $argument->encode();
      $callFunc = function($entry) {
        return sprintf("%02X",$entry);
      };
      $hexPayLoad = implode("", array_map($callFunc, unpack("C*", $request)));
      $metadata["_auth_payload"] = "Practo.MDS.Model.DrugProduct/add" . $hexPayLoad;
      return $this->_simpleRequest('/Practo.MDS.Model.DrugProduct/add',
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
      $metadata["_auth_payload"] = "Practo.MDS.Model.DrugProduct/fetch" . $hexPayLoad;
      return $this->_simpleRequest('/Practo.MDS.Model.DrugProduct/fetch',
      $argument,
      ['\Practo\MDS\Model\FetchDrugProductResponse', 'decode'],
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
      $metadata["_auth_payload"] = "Practo.MDS.Model.DrugProduct/fetchAll" . $hexPayLoad;
      return $this->_simpleRequest('/Practo.MDS.Model.DrugProduct/fetchAll',
      $argument,
      ['\Practo\MDS\Model\FetchAllDrugProductResponse', 'decode'],
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
      $metadata["_auth_payload"] = "Practo.MDS.Model.DrugProduct/fetchExtended" . $hexPayLoad;
      return $this->_simpleRequest('/Practo.MDS.Model.DrugProduct/fetchExtended',
      $argument,
      ['\Practo\MDS\Model\FetchDrugProductExtendedResponse', 'decode'],
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
      $metadata["_auth_payload"] = "Practo.MDS.Model.DrugProduct/fetchAllExtended" . $hexPayLoad;
      return $this->_simpleRequest('/Practo.MDS.Model.DrugProduct/fetchAllExtended',
      $argument,
      ['\Practo\MDS\Model\FetchAllDrugProductExtendedResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MDS\Model\DrugProductSearchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function search(\Practo\MDS\Model\DrugProductSearchRequest $argument,
      $metadata = [], $options = []) {
      $request = $argument->encode();
      $callFunc = function($entry) {
        return sprintf("%02X",$entry);
      };
      $hexPayLoad = implode("", array_map($callFunc, unpack("C*", $request)));
      $metadata["_auth_payload"] = "Practo.MDS.Model.DrugProduct/search" . $hexPayLoad;
      return $this->_simpleRequest('/Practo.MDS.Model.DrugProduct/search',
      $argument,
      ['\Practo\MDS\Model\FetchAllDrugProductResponse', 'decode'],
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
      $metadata["_auth_payload"] = "Practo.MDS.Model.DrugProduct/fetchByIds" . $hexPayLoad;
      return $this->_simpleRequest('/Practo.MDS.Model.DrugProduct/fetchByIds',
      $argument,
      ['\Practo\MDS\Model\FetchAllDrugProductResponse', 'decode'],
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
      $metadata["_auth_payload"] = "Practo.MDS.Model.DrugProduct/visiblityChange" . $hexPayLoad;
      return $this->_simpleRequest('/Practo.MDS.Model.DrugProduct/visiblityChange',
      $argument,
      ['\Practo\MDS\Model\VisibilityChangeResponse', 'decode'],
      $metadata, $options);
    }

  }

}
