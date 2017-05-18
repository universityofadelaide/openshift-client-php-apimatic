<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * ConfigMapEnvSource selects a ConfigMap to populate the environment variables with.
 *
 * The contents of the target ConfigMap's Data field will represent the key-value pairs as environment
 * variables.
 */
class V1ConfigMapEnvSource implements JsonSerializable
{
    /**
     * Name of the referent. More info: http://kubernetes.io/docs/user-guide/identifiers#names
     * @var string|null $name public property
     */
    public $name;

    /**
     * Specify whether the ConfigMap must be defined
     * @var bool|null $optional public property
     */
    public $optional;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $name     Initialization value for $this->name
     * @param bool   $optional Initialization value for $this->optional
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->name     = func_get_arg(0);
            $this->optional = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['name']     = $this->name;
        $json['optional'] = $this->optional;

        return $json;
    }
}
