<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Practo\MDS\RPC {

  class SpecializationClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
      parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Practo\MDS\RPC\AddSpecializationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function add(\Practo\MDS\RPC\AddSpecializationRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MDS.RPC.Specialization/add',
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
      return $this->_simpleRequest('/Practo.MDS.RPC.Specialization/fetch',
      $argument,
      ['\Practo\MDS\RPC\FetchSpecializationResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MDS\RPC\FetchAllRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fetchAll(\Practo\MDS\RPC\FetchAllRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MDS.RPC.Specialization/fetchAll',
      $argument,
      ['\Practo\MDS\RPC\FetchAllSpecializationResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MDS\RPC\FetchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fetchExtended(\Practo\MDS\RPC\FetchRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MDS.RPC.Specialization/fetchExtended',
      $argument,
      ['\Practo\MDS\RPC\FetchSpecializationExtendedResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MDS\RPC\FetchAllRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fetchAllExtended(\Practo\MDS\RPC\FetchAllRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MDS.RPC.Specialization/fetchAllExtended',
      $argument,
      ['\Practo\MDS\RPC\FetchAllSpecializationExtendedResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MDS\RPC\SpecializationSearchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function search(\Practo\MDS\RPC\SpecializationSearchRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MDS.RPC.Specialization/search',
      $argument,
      ['\Practo\MDS\RPC\FetchAllSpecializationResponse', 'decode'],
      $metadata, $options);
    }

  }

}
