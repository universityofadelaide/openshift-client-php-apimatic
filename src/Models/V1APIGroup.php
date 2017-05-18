<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * APIGroup contains the name, the supported versions, and the preferred version of a group.
 */
class V1APIGroup implements JsonSerializable
{
    /**
     * name is the name of the group.
     * @required
     * @var string $name public property
     */
    public $name;

    /**
     * a map of client CIDR to server address that is serving this group. This is to help clients reach servers in the most network-efficient way possible. Clients can use the appropriate server address as per the CIDR that they match. In case of multiple matches, clients should use the longest matching CIDR. The server returns only those CIDRs that it thinks that the client can match. For example: the master will return an internal IP CIDR only, if the client reaches the server using an internal IP. Server looks at X-Forwarded-For header or X-Real-Ip header or request.RemoteAddr (in that order) to get the client IP.
     * @required
     * @var V1ServerAddressByClientCIDR[] $serverAddressByClientCIDRs public property
     */
    public $serverAddressByClientCIDRs;

    /**
     * versions are the versions supported in this group.
     * @required
     * @var V1GroupVersionForDiscovery[] $versions public property
     */
    public $versions;

    /**
     * APIVersion defines the versioned schema of this representation of an object. Servers should convert recognized schemas to the latest internal value, and may reject unrecognized values. More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#resources
     * @var string|null $apiVersion public property
     */
    public $apiVersion;

    /**
     * Kind is a string value representing the REST resource this object represents. Servers may infer this from the endpoint the client submits requests to. Cannot be updated. In CamelCase. More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#types-kinds
     * @var string|null $kind public property
     */
    public $kind;

    /**
     * preferredVersion is the version preferred by the API server, which probably is the storage version.
     * @var V1GroupVersionForDiscovery|null $preferredVersion public property
     */
    public $preferredVersion;

    /**
     * Constructor to set initial or default values of member properties
     * @param string                     $name                       Initialization value for $this->name
     * @param array                      $serverAddressByClientCIDRs Initialization value for $this-
     *                                                                 >serverAddressByClientCIDRs
     * @param array                      $versions                   Initialization value for $this->versions
     * @param string                     $apiVersion                 Initialization value for $this->apiVersion
     * @param string                     $kind                       Initialization value for $this->kind
     * @param V1GroupVersionForDiscovery $preferredVersion           Initialization value for $this->preferredVersion
     */
    public function __construct()
    {
        if (6 == func_num_args()) {
            $this->name                       = func_get_arg(0);
            $this->serverAddressByClientCIDRs = func_get_arg(1);
            $this->versions                   = func_get_arg(2);
            $this->apiVersion                 = func_get_arg(3);
            $this->kind                       = func_get_arg(4);
            $this->preferredVersion           = func_get_arg(5);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['name']                       = $this->name;
        $json['serverAddressByClientCIDRs'] = $this->serverAddressByClientCIDRs;
        $json['versions']                   = $this->versions;
        $json['apiVersion']                 = $this->apiVersion;
        $json['kind']                       = $this->kind;
        $json['preferredVersion']           = $this->preferredVersion;

        return $json;
    }
}
