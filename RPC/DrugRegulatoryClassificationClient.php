<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Practo\MDS\RPC {

  class DrugRegulatoryClassificationClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
      parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Practo\MDS\RPC\AddDrugRegulatoryClassificationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function add(\Practo\MDS\RPC\AddDrugRegulatoryClassificationRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MDS.RPC.DrugRegulatoryClassification/add',
      $argument,
      ['\Practo\MDS\RPC\AddResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MDS\RPC\FetchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fetch(\Practo\MDS\RPC\FetchRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MDS.RPC.DrugRegulatoryClassification/fetch',
      $argument,
      ['\Practo\MDS\RPC\FetchDrugRegulatoryClassificationResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MDS\RPC\FetchAllRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fetchAll(\Practo\MDS\RPC\FetchAllRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MDS.RPC.DrugRegulatoryClassification/fetchAll',
      $argument,
      ['\Practo\MDS\RPC\FetchAllDrugRegulatoryClassificationResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MDS\RPC\FetchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fetchExtended(\Practo\MDS\RPC\FetchRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MDS.RPC.DrugRegulatoryClassification/fetchExtended',
      $argument,
      ['\Practo\MDS\RPC\FetchDrugRegulatoryClassificationExtendedResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MDS\RPC\FetchAllRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fetchAllExtended(\Practo\MDS\RPC\FetchAllRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MDS.RPC.DrugRegulatoryClassification/fetchAllExtended',
      $argument,
      ['\Practo\MDS\RPC\FetchAllDrugRegulatoryClassificationExtendedResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MDS\RPC\DrugRegulatoryClassificationSearchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function search(\Practo\MDS\RPC\DrugRegulatoryClassificationSearchRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MDS.RPC.DrugRegulatoryClassification/search',
      $argument,
      ['\Practo\MDS\RPC\FetchAllDrugRegulatoryClassificationResponse', 'decode'],
      $metadata, $options);
    }

  }

}
