<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * NodeDaemonEndpoints lists ports opened by daemons running on the Node.
 */
class V1NodeDaemonEndpoints implements JsonSerializable
{
    /**
     * Endpoint on which Kubelet is listening.
     * @var V1DaemonEndpoint|null $kubeletEndpoint public property
     */
    public $kubeletEndpoint;

    /**
     * Constructor to set initial or default values of member properties
     * @param V1DaemonEndpoint $kubeletEndpoint Initialization value for $this->kubeletEndpoint
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->kubeletEndpoint = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['kubeletEndpoint'] = $this->kubeletEndpoint;

        return $json;
    }
}
