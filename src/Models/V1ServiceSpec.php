<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * ServiceSpec describes the attributes that a user creates on a service.
 */
class V1ServiceSpec implements JsonSerializable
{
    /**
     * clusterIP is the IP address of the service and is usually assigned randomly by the master. If an address is specified manually and is not in use by others, it will be allocated to the service; otherwise, creation of the service will fail. This field can not be changed through updates. Valid values are "None", empty string (""), or a valid IP address. "None" can be specified for headless services when proxying is not required. Only applies to types ClusterIP, NodePort, and LoadBalancer. Ignored if type is ExternalName. More info: http://kubernetes.io/docs/user-guide/services#virtual-ips-and-service-proxies
     * @var string|null $clusterIP public property
     */
    public $clusterIP;

    /**
     * deprecatedPublicIPs is deprecated and replaced by the externalIPs field with almost the exact same semantics.  This field is retained in the v1 API for compatibility until at least 8/20/2016.  It will be removed from any new API revisions.  If both deprecatedPublicIPs *and* externalIPs are set, deprecatedPublicIPs is used.
     * @var array|null $deprecatedPublicIPs public property
     */
    public $deprecatedPublicIPs;

    /**
     * externalIPs is a list of IP addresses for which nodes in the cluster will also accept traffic for this service.  These IPs are not managed by Kubernetes.  The user is responsible for ensuring that traffic arrives at a node with this IP.  A common example is external load-balancers that are not part of the Kubernetes system.  A previous form of this functionality exists as the deprecatedPublicIPs field.  When using this field, callers should also clear the deprecatedPublicIPs field.
     * @var array|null $externalIPs public property
     */
    public $externalIPs;

    /**
     * externalName is the external reference that kubedns or equivalent will return as a CNAME record for this service. No proxying will be involved. Must be a valid DNS name and requires Type to be ExternalName.
     * @var string|null $externalName public property
     */
    public $externalName;

    /**
     * Only applies to Service Type: LoadBalancer LoadBalancer will get created with the IP specified in this field. This feature depends on whether the underlying cloud-provider supports specifying the loadBalancerIP when a load balancer is created. This field will be ignored if the cloud-provider does not support the feature.
     * @var string|null $loadBalancerIP public property
     */
    public $loadBalancerIP;

    /**
     * If specified and supported by the platform, this will restrict traffic through the cloud-provider load-balancer will be restricted to the specified client IPs. This field will be ignored if the cloud-provider does not support the feature." More info: http://kubernetes.io/docs/user-guide/services-firewalls
     * @var array|null $loadBalancerSourceRanges public property
     */
    public $loadBalancerSourceRanges;

    /**
     * The list of ports that are exposed by this service. More info: http://kubernetes.io/docs/user-guide/services#virtual-ips-and-service-proxies
     * @var V1ServicePort[]|null $ports public property
     */
    public $ports;

    /**
     * Route service traffic to pods with label keys and values matching this selector. If empty or not present, the service is assumed to have an external process managing its endpoints, which Kubernetes will not modify. Only applies to types ClusterIP, NodePort, and LoadBalancer. Ignored if type is ExternalName. More info: http://kubernetes.io/docs/user-guide/services#overview
     * @var array|null $selector public property
     */
    public $selector;

    /**
     * Supports "ClientIP" and "None". Used to maintain session affinity. Enable client IP based session affinity. Must be ClientIP or None. Defaults to None. More info: http://kubernetes.io/docs/user-guide/services#virtual-ips-and-service-proxies
     * @var string|null $sessionAffinity public property
     */
    public $sessionAffinity;

    /**
     * type determines how the Service is exposed. Defaults to ClusterIP. Valid options are ExternalName, ClusterIP, NodePort, and LoadBalancer. "ExternalName" maps to the specified externalName. "ClusterIP" allocates a cluster-internal IP address for load-balancing to endpoints. Endpoints are determined by the selector or if that is not specified, by manual construction of an Endpoints object. If clusterIP is "None", no virtual IP is allocated and the endpoints are published as a set of endpoints rather than a stable IP. "NodePort" builds on ClusterIP and allocates a port on every node which routes to the clusterIP. "LoadBalancer" builds on NodePort and creates an external load-balancer (if supported in the current cloud) which routes to the clusterIP. More info: http://kubernetes.io/docs/user-guide/services#overview
     * @var string|null $type public property
     */
    public $type;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $clusterIP                Initialization value for $this->clusterIP
     * @param array  $deprecatedPublicIPs      Initialization value for $this->deprecatedPublicIPs
     * @param array  $externalIPs              Initialization value for $this->externalIPs
     * @param string $externalName             Initialization value for $this->externalName
     * @param string $loadBalancerIP           Initialization value for $this->loadBalancerIP
     * @param array  $loadBalancerSourceRanges Initialization value for $this->loadBalancerSourceRanges
     * @param array  $ports                    Initialization value for $this->ports
     * @param array  $selector                 Initialization value for $this->selector
     * @param string $sessionAffinity          Initialization value for $this->sessionAffinity
     * @param string $type                     Initialization value for $this->type
     */
    public function __construct()
    {
        if (10 == func_num_args()) {
            $this->clusterIP                = func_get_arg(0);
            $this->deprecatedPublicIPs      = func_get_arg(1);
            $this->externalIPs              = func_get_arg(2);
            $this->externalName             = func_get_arg(3);
            $this->loadBalancerIP           = func_get_arg(4);
            $this->loadBalancerSourceRanges = func_get_arg(5);
            $this->ports                    = func_get_arg(6);
            $this->selector                 = func_get_arg(7);
            $this->sessionAffinity          = func_get_arg(8);
            $this->type                     = func_get_arg(9);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['clusterIP']                = $this->clusterIP;
        $json['deprecatedPublicIPs']      = $this->deprecatedPublicIPs;
        $json['externalIPs']              = $this->externalIPs;
        $json['externalName']             = $this->externalName;
        $json['loadBalancerIP']           = $this->loadBalancerIP;
        $json['loadBalancerSourceRanges'] = $this->loadBalancerSourceRanges;
        $json['ports']                    = $this->ports;
        $json['selector']                 = $this->selector;
        $json['sessionAffinity']          = $this->sessionAffinity;
        $json['type']                     = $this->type;

        return $json;
    }
}