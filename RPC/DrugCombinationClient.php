<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Practo\MDS\RPC {

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
     * @param \Practo\MDS\RPC\AddDrugCombinationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function add(\Practo\MDS\RPC\AddDrugCombinationRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MDS.RPC.DrugCombination/add',
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
      return $this->_simpleRequest('/Practo.MDS.RPC.DrugCombination/fetch',
      $argument,
      ['\Practo\MDS\RPC\FetchDrugCombinationResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MDS\RPC\FetchAllRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fetchAll(\Practo\MDS\RPC\FetchAllRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MDS.RPC.DrugCombination/fetchAll',
      $argument,
      ['\Practo\MDS\RPC\FetchAllDrugCombinationResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MDS\RPC\FetchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fetchExtended(\Practo\MDS\RPC\FetchRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MDS.RPC.DrugCombination/fetchExtended',
      $argument,
      ['\Practo\MDS\RPC\FetchDrugCombinationExtendedResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MDS\RPC\FetchAllRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fetchAllExtended(\Practo\MDS\RPC\FetchAllRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MDS.RPC.DrugCombination/fetchAllExtended',
      $argument,
      ['\Practo\MDS\RPC\FetchAllDrugCombinationExtendedResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MDS\RPC\DrugCombinationSearchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function search(\Practo\MDS\RPC\DrugCombinationSearchRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MDS.RPC.DrugCombination/search',
      $argument,
      ['\Practo\MDS\RPC\FetchAllDrugCombinationResponse', 'decode'],
      $metadata, $options);
    }

  }

}
