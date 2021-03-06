<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * RoleRef contains information that points to the role being used
 */
class V1beta1RoleRef implements JsonSerializable
{
    /**
     * APIGroup is the group for the resource being referenced
     * @required
     * @var string $apiGroup public property
     */
    public $apiGroup;

    /**
     * Kind is the type of resource being referenced
     * @required
     * @var string $kind public property
     */
    public $kind;

    /**
     * Name is the name of resource being referenced
     * @required
     * @var string $name public property
     */
    public $name;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $apiGroup Initialization value for $this->apiGroup
     * @param string $kind     Initialization value for $this->kind
     * @param string $name     Initialization value for $this->name
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->apiGroup = func_get_arg(0);
            $this->kind     = func_get_arg(1);
            $this->name     = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['apiGroup'] = $this->apiGroup;
        $json['kind']     = $this->kind;
        $json['name']     = $this->name;

        return $json;
    }
}
