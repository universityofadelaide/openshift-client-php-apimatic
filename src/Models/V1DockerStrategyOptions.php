<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * DockerStrategyOptions contains extra strategy options for Docker builds
 */
class V1DockerStrategyOptions implements JsonSerializable
{
    /**
     * Args contains any build arguments that are to be passed to Docker.  See https://docs.docker.com/engine/reference/builder/#/arg for more details
     * @var V1EnvVar[]|null $buildArgs public property
     */
    public $buildArgs;

    /**
     * Constructor to set initial or default values of member properties
     * @param array $buildArgs Initialization value for $this->buildArgs
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->buildArgs = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['buildArgs'] = $this->buildArgs;

        return $json;
    }
}
