<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Practo\MDS\Model {

  class SystemOfMedicineClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
      parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Practo\MDS\Model\AddSystemOfMedicineRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function add(\Practo\MDS\Model\AddSystemOfMedicineRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MDS.Model.SystemOfMedicine/add',
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
      return $this->_simpleRequest('/Practo.MDS.Model.SystemOfMedicine/fetch',
      $argument,
      ['\Practo\MDS\Model\FetchSystemOfMedicineResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MDS\Model\FetchAllRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fetchAll(\Practo\MDS\Model\FetchAllRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MDS.Model.SystemOfMedicine/fetchAll',
      $argument,
      ['\Practo\MDS\Model\FetchAllSystemOfMedicineResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MDS\Model\FetchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fetchExtended(\Practo\MDS\Model\FetchRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MDS.Model.SystemOfMedicine/fetchExtended',
      $argument,
      ['\Practo\MDS\Model\FetchSystemOfMedicineExtendedResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MDS\Model\FetchAllRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fetchAllExtended(\Practo\MDS\Model\FetchAllRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MDS.Model.SystemOfMedicine/fetchAllExtended',
      $argument,
      ['\Practo\MDS\Model\FetchAllSystemOfMedicineExtendedResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MDS\Model\SystemOfMedicineSearchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function search(\Practo\MDS\Model\SystemOfMedicineSearchRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MDS.Model.SystemOfMedicine/search',
      $argument,
      ['\Practo\MDS\Model\FetchAllSystemOfMedicineResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MDS\Model\FetchByIdsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fetchByIds(\Practo\MDS\Model\FetchByIdsRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MDS.Model.SystemOfMedicine/fetchByIds',
      $argument,
      ['\Practo\MDS\Model\FetchAllSystemOfMedicineResponse', 'decode'],
      $metadata, $options);
    }

  }

}
