<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * GroupList is a collection of Groups
 */
class V1GroupList implements JsonSerializable
{
    /**
     * Items is the list of groups
     * @required
     * @var V1Group[] $items public property
     */
    public $items;

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
     * Standard object's metadata.
     * @var V1ListMeta|null $metadata public property
     */
    public $metadata;

    /**
     * Constructor to set initial or default values of member properties
     * @param array      $items      Initialization value for $this->items
     * @param string     $apiVersion Initialization value for $this->apiVersion
     * @param string     $kind       Initialization value for $this->kind
     * @param V1ListMeta $metadata   Initialization value for $this->metadata
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->items      = func_get_arg(0);
            $this->apiVersion = func_get_arg(1);
            $this->kind       = func_get_arg(2);
            $this->metadata   = func_get_arg(3);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['items']      = $this->items;
        $json['apiVersion'] = $this->apiVersion;
        $json['kind']       = $this->kind;
        $json['metadata']   = $this->metadata;

        return $json;
    }
}
