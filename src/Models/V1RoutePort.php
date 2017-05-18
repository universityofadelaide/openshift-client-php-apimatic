<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * RoutePort defines a port mapping from a router to an endpoint in the service endpoints.
 */
class V1RoutePort implements JsonSerializable
{
    /**
     * The target port on pods selected by the service this route points to. If this is a string, it will be looked up as a named port in the target endpoints port list. Required
     * @required
     * @var string $targetPort public property
     */
    public $targetPort;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $targetPort Initialization value for $this->targetPort
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->targetPort = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['targetPort'] = $this->targetPort;

        return $json;
    }
}