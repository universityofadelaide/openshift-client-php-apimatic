<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * LoadBalancerIngress represents the status of a load-balancer ingress point: traffic intended for the
 * service should be sent to an ingress point.
 */
class V1LoadBalancerIngress implements JsonSerializable
{
    /**
     * Hostname is set for load-balancer ingress points that are DNS based (typically AWS load-balancers)
     * @var string|null $hostname public property
     */
    public $hostname;

    /**
     * IP is set for load-balancer ingress points that are IP based (typically GCE or OpenStack load-balancers)
     * @var string|null $ip public property
     */
    public $ip;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $hostname Initialization value for $this->hostname
     * @param string $ip       Initialization value for $this->ip
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->hostname = func_get_arg(0);
            $this->ip       = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['hostname'] = $this->hostname;
        $json['ip']       = $this->ip;

        return $json;
    }
}
