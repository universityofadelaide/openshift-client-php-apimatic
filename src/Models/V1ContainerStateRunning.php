<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * ContainerStateRunning is a running state of a container.
 */
class V1ContainerStateRunning implements JsonSerializable
{
    /**
     * Time at which the container was last (re-)started
     * @var string|null $startedAt public property
     */
    public $startedAt;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $startedAt Initialization value for $this->startedAt
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->startedAt = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['startedAt'] = $this->startedAt;

        return $json;
    }
}