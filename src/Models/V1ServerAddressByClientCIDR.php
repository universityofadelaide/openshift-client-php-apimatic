<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * ServerAddressByClientCIDR helps the client to determine the server address that they should use,
 * depending on the clientCIDR that they match.
 */
class V1ServerAddressByClientCIDR implements JsonSerializable
{
    /**
     * The CIDR with which clients can match their IP to figure out the server address that they should use.
     * @required
     * @var string $clientCIDR public property
     */
    public $clientCIDR;

    /**
     * Address of this server, suitable for a client that matches the above CIDR. This can be a hostname, hostname:port, IP or IP:port.
     * @required
     * @var string $serverAddress public property
     */
    public $serverAddress;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $clientCIDR    Initialization value for $this->clientCIDR
     * @param string $serverAddress Initialization value for $this->serverAddress
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->clientCIDR    = func_get_arg(0);
            $this->serverAddress = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['clientCIDR']    = $this->clientCIDR;
        $json['serverAddress'] = $this->serverAddress;

        return $json;
    }
}
