<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Practo\MDS\Model {

  class RouteOfAdministrationClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
      parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Practo\MDS\Model\AddRouteOfAdministrationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function add(\Practo\MDS\Model\AddRouteOfAdministrationRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MDS.Model.RouteOfAdministration/add',
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
      return $this->_simpleRequest('/Practo.MDS.Model.RouteOfAdministration/fetch',
      $argument,
      ['\Practo\MDS\Model\FetchRouteOfAdministrationResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MDS\Model\FetchAllRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fetchAll(\Practo\MDS\Model\FetchAllRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MDS.Model.RouteOfAdministration/fetchAll',
      $argument,
      ['\Practo\MDS\Model\FetchAllRouteOfAdministrationResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MDS\Model\RouteOfAdministrationSearchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function search(\Practo\MDS\Model\RouteOfAdministrationSearchRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MDS.Model.RouteOfAdministration/search',
      $argument,
      ['\Practo\MDS\Model\FetchAllRouteOfAdministrationResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MDS\Model\FetchByIdsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fetchByIds(\Practo\MDS\Model\FetchByIdsRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MDS.Model.RouteOfAdministration/fetchByIds',
      $argument,
      ['\Practo\MDS\Model\FetchAllRouteOfAdministrationResponse', 'decode'],
      $metadata, $options);
    }

  }

}
