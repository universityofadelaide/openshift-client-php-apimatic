<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * Represents a Glusterfs mount that lasts the lifetime of a pod. Glusterfs volumes do not support
 * ownership management or SELinux relabeling.
 */
class V1GlusterfsVolumeSource implements JsonSerializable
{
    /**
     * EndpointsName is the endpoint name that details Glusterfs topology. More info: http://releases.k8s.io/HEAD/examples/volumes/glusterfs/README.md#create-a-pod
     * @required
     * @var string $endpoints public property
     */
    public $endpoints;

    /**
     * Path is the Glusterfs volume path. More info: http://releases.k8s.io/HEAD/examples/volumes/glusterfs/README.md#create-a-pod
     * @required
     * @var string $path public property
     */
    public $path;

    /**
     * ReadOnly here will force the Glusterfs volume to be mounted with read-only permissions. Defaults to false. More info: http://releases.k8s.io/HEAD/examples/volumes/glusterfs/README.md#create-a-pod
     * @var bool|null $readOnly public property
     */
    public $readOnly;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $endpoints Initialization value for $this->endpoints
     * @param string $path      Initialization value for $this->path
     * @param bool   $readOnly  Initialization value for $this->readOnly
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->endpoints = func_get_arg(0);
            $this->path      = func_get_arg(1);
            $this->readOnly  = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['endpoints'] = $this->endpoints;
        $json['path']      = $this->path;
        $json['readOnly']  = $this->readOnly;

        return $json;
    }
}
