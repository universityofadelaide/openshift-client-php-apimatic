<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * SubresourceReference contains enough information to let you inspect or modify the referred
 * subresource.
 */
class V1beta1SubresourceReference implements JsonSerializable
{
    /**
     * API version of the referent
     * @var string|null $apiVersion public property
     */
    public $apiVersion;

    /**
     * Kind of the referent; More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#types-kinds
     * @var string|null $kind public property
     */
    public $kind;

    /**
     * Name of the referent; More info: http://kubernetes.io/docs/user-guide/identifiers#names
     * @var string|null $name public property
     */
    public $name;

    /**
     * Subresource name of the referent
     * @var string|null $subresource public property
     */
    public $subresource;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $apiVersion  Initialization value for $this->apiVersion
     * @param string $kind        Initialization value for $this->kind
     * @param string $name        Initialization value for $this->name
     * @param string $subresource Initialization value for $this->subresource
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->apiVersion  = func_get_arg(0);
            $this->kind        = func_get_arg(1);
            $this->name        = func_get_arg(2);
            $this->subresource = func_get_arg(3);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['apiVersion']  = $this->apiVersion;
        $json['kind']        = $this->kind;
        $json['name']        = $this->name;
        $json['subresource'] = $this->subresource;

        return $json;
    }
}
