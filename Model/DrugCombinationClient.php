<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Practo\MDS\Model {

  class DrugCombinationClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
      parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Practo\MDS\Model\AddDrugCombinationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function add(\Practo\MDS\Model\AddDrugCombinationRequest $argument,
      $metadata = [], $options = []) {
      $request = $argument->encode();
      $callFunc = function($entry) {
        return sprintf("%02X",$entry);
      };
      $hexPayLoad = implode("", array_map($callFunc, unpack("C*", $request)));
      $metadata["_auth_payload"] = "Practo.MDS.Model.DrugCombination/add" . $hexPayLoad;
      return $this->_simpleRequest('/Practo.MDS.Model.DrugCombination/add',
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
      $metadata["_auth_payload"] = "Practo.MDS.Model.DrugCombination/fetch" . $hexPayLoad;
      return $this->_simpleRequest('/Practo.MDS.Model.DrugCombination/fetch',
      $argument,
      ['\Practo\MDS\Model\FetchDrugCombinationResponse', 'decode'],
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
      $metadata["_auth_payload"] = "Practo.MDS.Model.DrugCombination/fetchAll" . $hexPayLoad;
      return $this->_simpleRequest('/Practo.MDS.Model.DrugCombination/fetchAll',
      $argument,
      ['\Practo\MDS\Model\FetchAllDrugCombinationResponse', 'decode'],
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
      $metadata["_auth_payload"] = "Practo.MDS.Model.DrugCombination/fetchExtended" . $hexPayLoad;
      return $this->_simpleRequest('/Practo.MDS.Model.DrugCombination/fetchExtended',
      $argument,
      ['\Practo\MDS\Model\FetchDrugCombinationExtendedResponse', 'decode'],
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
      $metadata["_auth_payload"] = "Practo.MDS.Model.DrugCombination/fetchAllExtended" . $hexPayLoad;
      return $this->_simpleRequest('/Practo.MDS.Model.DrugCombination/fetchAllExtended',
      $argument,
      ['\Practo\MDS\Model\FetchAllDrugCombinationExtendedResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MDS\Model\DrugCombinationSearchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function search(\Practo\MDS\Model\DrugCombinationSearchRequest $argument,
      $metadata = [], $options = []) {
      $request = $argument->encode();
      $callFunc = function($entry) {
        return sprintf("%02X",$entry);
      };
      $hexPayLoad = implode("", array_map($callFunc, unpack("C*", $request)));
      $metadata["_auth_payload"] = "Practo.MDS.Model.DrugCombination/search" . $hexPayLoad;
      return $this->_simpleRequest('/Practo.MDS.Model.DrugCombination/search',
      $argument,
      ['\Practo\MDS\Model\FetchAllDrugCombinationResponse', 'decode'],
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
      $metadata["_auth_payload"] = "Practo.MDS.Model.DrugCombination/fetchByIds" . $hexPayLoad;
      return $this->_simpleRequest('/Practo.MDS.Model.DrugCombination/fetchByIds',
      $argument,
      ['\Practo\MDS\Model\FetchAllDrugCombinationResponse', 'decode'],
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
      $metadata["_auth_payload"] = "Practo.MDS.Model.DrugCombination/visiblityChange" . $hexPayLoad;
      return $this->_simpleRequest('/Practo.MDS.Model.DrugCombination/visiblityChange',
      $argument,
      ['\Practo\MDS\Model\VisibilityChangeResponse', 'decode'],
      $metadata, $options);
    }

  }

}
