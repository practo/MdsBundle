<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Practo\MdsBundle\RPC {

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
     * @param \Practo\MdsBundle\RPC\AddRouteOfAdministrationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function add(\Practo\MdsBundle\RPC\AddRouteOfAdministrationRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MdsBundle.RPC.RouteOfAdministration/add',
      $argument,
      ['\Practo\MdsBundle\RPC\AddResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MdsBundle\RPC\FetchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fetch(\Practo\MdsBundle\RPC\FetchRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MdsBundle.RPC.RouteOfAdministration/fetch',
      $argument,
      ['\Practo\MdsBundle\RPC\RouteOfAdministrationModel', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MdsBundle\RPC\FetchAllRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fetchAll(\Practo\MdsBundle\RPC\FetchAllRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MdsBundle.RPC.RouteOfAdministration/fetchAll',
      $argument,
      ['\Practo\MdsBundle\RPC\FetchAllRouteOfAdministrationResponse', 'decode'],
      $metadata, $options);
    }

  }

}
