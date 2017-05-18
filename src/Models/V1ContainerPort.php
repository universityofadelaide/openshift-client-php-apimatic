<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * ContainerPort represents a network port in a single container.
 */
class V1ContainerPort implements JsonSerializable
{
    /**
     * Number of port to expose on the pod's IP address. This must be a valid port number, 0 < x < 65536.
     * @required
     * @var integer $containerPort public property
     */
    public $containerPort;

    /**
     * What host IP to bind the external port to.
     * @var string|null $hostIP public property
     */
    public $hostIP;

    /**
     * Number of port to expose on the host. If specified, this must be a valid port number, 0 < x < 65536. If HostNetwork is specified, this must match ContainerPort. Most containers do not need this.
     * @var integer|null $hostPort public property
     */
    public $hostPort;

    /**
     * If specified, this must be an IANA_SVC_NAME and unique within the pod. Each named port in a pod must have a unique name. Name for the port that can be referred to by services.
     * @var string|null $name public property
     */
    public $name;

    /**
     * Protocol for port. Must be UDP or TCP. Defaults to "TCP".
     * @var string|null $protocol public property
     */
    public $protocol;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $containerPort Initialization value for $this->containerPort
     * @param string  $hostIP        Initialization value for $this->hostIP
     * @param integer $hostPort      Initialization value for $this->hostPort
     * @param string  $name          Initialization value for $this->name
     * @param string  $protocol      Initialization value for $this->protocol
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->containerPort = func_get_arg(0);
            $this->hostIP        = func_get_arg(1);
            $this->hostPort      = func_get_arg(2);
            $this->name          = func_get_arg(3);
            $this->protocol      = func_get_arg(4);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['containerPort'] = $this->containerPort;
        $json['hostIP']        = $this->hostIP;
        $json['hostPort']      = $this->hostPort;
        $json['name']          = $this->name;
        $json['protocol']      = $this->protocol;

        return $json;
    }
}
