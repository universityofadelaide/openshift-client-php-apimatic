<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * DaemonEndpoint contains information about a single Daemon endpoint.
 */
class V1DaemonEndpoint implements JsonSerializable
{
    /**
     * Port number of the given endpoint.
     * @required
     * @maps Port
     * @var integer $port public property
     */
    public $port;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $port Initialization value for $this->port
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->port = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['Port'] = $this->port;

        return $json;
    }
}