<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Practo\MDS\Model {

  class UnitOfMeasureClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
      parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Practo\MDS\Model\AddUnitOfMeasureRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function add(\Practo\MDS\Model\AddUnitOfMeasureRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MDS.Model.UnitOfMeasure/add',
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
      return $this->_simpleRequest('/Practo.MDS.Model.UnitOfMeasure/fetch',
      $argument,
      ['\Practo\MDS\Model\FetchUnitOfMeasureResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MDS\Model\FetchAllRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fetchAll(\Practo\MDS\Model\FetchAllRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MDS.Model.UnitOfMeasure/fetchAll',
      $argument,
      ['\Practo\MDS\Model\FetchAllUnitOfMeasureResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MDS\Model\UnitOfMeasureSearchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function search(\Practo\MDS\Model\UnitOfMeasureSearchRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MDS.Model.UnitOfMeasure/search',
      $argument,
      ['\Practo\MDS\Model\FetchAllUnitOfMeasureResponse', 'decode'],
      $metadata, $options);
    }

  }

}
