<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * Represents an empty directory for a pod. Empty directory volumes support ownership management and
 * SELinux relabeling.
 */
class V1EmptyDirVolumeSource implements JsonSerializable
{
    /**
     * What type of storage medium should back this directory. The default is "" which means to use the node's default medium. Must be an empty string (default) or Memory. More info: http://kubernetes.io/docs/user-guide/volumes#emptydir
     * @var string|null $medium public property
     */
    public $medium;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $medium Initialization value for $this->medium
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->medium = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['medium'] = $this->medium;

        return $json;
    }
}