<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * ComponentStatus (and ComponentStatusList) holds the cluster validation info.
 */
class V1ComponentStatus implements JsonSerializable
{
    /**
     * APIVersion defines the versioned schema of this representation of an object. Servers should convert recognized schemas to the latest internal value, and may reject unrecognized values. More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#resources
     * @var string|null $apiVersion public property
     */
    public $apiVersion;

    /**
     * List of component conditions observed
     * @var V1ComponentCondition[]|null $conditions public property
     */
    public $conditions;

    /**
     * Kind is a string value representing the REST resource this object represents. Servers may infer this from the endpoint the client submits requests to. Cannot be updated. In CamelCase. More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#types-kinds
     * @var string|null $kind public property
     */
    public $kind;

    /**
     * Standard object's metadata. More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#metadata
     * @var V1ObjectMeta|null $metadata public property
     */
    public $metadata;

    /**
     * Constructor to set initial or default values of member properties
     * @param string       $apiVersion Initialization value for $this->apiVersion
     * @param array        $conditions Initialization value for $this->conditions
     * @param string       $kind       Initialization value for $this->kind
     * @param V1ObjectMeta $metadata   Initialization value for $this->metadata
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->apiVersion = func_get_arg(0);
            $this->conditions = func_get_arg(1);
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
        $json['apiVersion'] = $this->apiVersion;
        $json['conditions'] = $this->conditions;
        $json['kind']       = $this->kind;
        $json['metadata']   = $this->metadata;

        return $json;
    }
}
