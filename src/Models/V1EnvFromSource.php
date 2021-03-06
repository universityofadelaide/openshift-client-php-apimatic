<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * EnvFromSource represents the source of a set of ConfigMaps
 */
class V1EnvFromSource implements JsonSerializable
{
    /**
     * The ConfigMap to select from
     * @var V1ConfigMapEnvSource|null $configMapRef public property
     */
    public $configMapRef;

    /**
     * An optional identifer to prepend to each key in the ConfigMap. Must be a C_IDENTIFIER.
     * @var string|null $prefix public property
     */
    public $prefix;

    /**
     * The Secret to select from
     * @var V1ConfigMapEnvSource|null $secretRef public property
     */
    public $secretRef;

    /**
     * Constructor to set initial or default values of member properties
     * @param V1ConfigMapEnvSource $configMapRef Initialization value for $this->configMapRef
     * @param string               $prefix       Initialization value for $this->prefix
     * @param V1ConfigMapEnvSource $secretRef    Initialization value for $this->secretRef
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->configMapRef = func_get_arg(0);
            $this->prefix       = func_get_arg(1);
            $this->secretRef    = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['configMapRef'] = $this->configMapRef;
        $json['prefix']       = $this->prefix;
        $json['secretRef']    = $this->secretRef;

        return $json;
    }
}
