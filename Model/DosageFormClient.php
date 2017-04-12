<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Practo\MDS\Model {

  class DosageFormClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
      parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Practo\MDS\Model\AddDosageFormRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function add(\Practo\MDS\Model\AddDosageFormRequest $argument,
      $metadata = [], $options = []) {
      $request = $argument->encode();
      $callFunc = function($entry) {
        return sprintf("%02X",$entry);
      };
      $hexPayLoad = implode("", array_map($callFunc, unpack("C*", $request)));
      $metadata["_auth_payload"] = "Practo.MDS.Model.DosageForm/add" . $hexPayLoad;
      return $this->_simpleRequest('/Practo.MDS.Model.DosageForm/add',
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
      $metadata["_auth_payload"] = "Practo.MDS.Model.DosageForm/fetch" . $hexPayLoad;
      return $this->_simpleRequest('/Practo.MDS.Model.DosageForm/fetch',
      $argument,
      ['\Practo\MDS\Model\FetchDosageFormRepsonse', 'decode'],
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
      $metadata["_auth_payload"] = "Practo.MDS.Model.DosageForm/fetchAll" . $hexPayLoad;
      return $this->_simpleRequest('/Practo.MDS.Model.DosageForm/fetchAll',
      $argument,
      ['\Practo\MDS\Model\FetchAllDosageFormResponse', 'decode'],
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
      $metadata["_auth_payload"] = "Practo.MDS.Model.DosageForm/fetchExtended" . $hexPayLoad;
      return $this->_simpleRequest('/Practo.MDS.Model.DosageForm/fetchExtended',
      $argument,
      ['\Practo\MDS\Model\FetchDosageFormExtendedRepsonse', 'decode'],
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
      $metadata["_auth_payload"] = "Practo.MDS.Model.DosageForm/fetchAllExtended" . $hexPayLoad;
      return $this->_simpleRequest('/Practo.MDS.Model.DosageForm/fetchAllExtended',
      $argument,
      ['\Practo\MDS\Model\FetchAllDosageFormExtendedResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MDS\Model\DosageFormSearchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function search(\Practo\MDS\Model\DosageFormSearchRequest $argument,
      $metadata = [], $options = []) {
      $request = $argument->encode();
      $callFunc = function($entry) {
        return sprintf("%02X",$entry);
      };
      $hexPayLoad = implode("", array_map($callFunc, unpack("C*", $request)));
      $metadata["_auth_payload"] = "Practo.MDS.Model.DosageForm/search" . $hexPayLoad;
      return $this->_simpleRequest('/Practo.MDS.Model.DosageForm/search',
      $argument,
      ['\Practo\MDS\Model\FetchAllDosageFormResponse', 'decode'],
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
      $metadata["_auth_payload"] = "Practo.MDS.Model.DosageForm/fetchByIds" . $hexPayLoad;
      return $this->_simpleRequest('/Practo.MDS.Model.DosageForm/fetchByIds',
      $argument,
      ['\Practo\MDS\Model\FetchAllDosageFormResponse', 'decode'],
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
      $metadata["_auth_payload"] = "Practo.MDS.Model.DosageForm/visiblityChange" . $hexPayLoad;
      return $this->_simpleRequest('/Practo.MDS.Model.DosageForm/visiblityChange',
      $argument,
      ['\Practo\MDS\Model\VisibilityChangeResponse', 'decode'],
      $metadata, $options);
    }

  }

}
