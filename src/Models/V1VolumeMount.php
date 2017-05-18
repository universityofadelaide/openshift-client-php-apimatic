<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * VolumeMount describes a mounting of a Volume within a container.
 */
class V1VolumeMount implements JsonSerializable
{
    /**
     * Path within the container at which the volume should be mounted.  Must not contain ':'.
     * @required
     * @var string $mountPath public property
     */
    public $mountPath;

    /**
     * This must match the Name of a Volume.
     * @required
     * @var string $name public property
     */
    public $name;

    /**
     * Mounted read-only if true, read-write otherwise (false or unspecified). Defaults to false.
     * @var bool|null $readOnly public property
     */
    public $readOnly;

    /**
     * Path within the volume from which the container's volume should be mounted. Defaults to "" (volume's root).
     * @var string|null $subPath public property
     */
    public $subPath;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $mountPath Initialization value for $this->mountPath
     * @param string $name      Initialization value for $this->name
     * @param bool   $readOnly  Initialization value for $this->readOnly
     * @param string $subPath   Initialization value for $this->subPath
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->mountPath = func_get_arg(0);
            $this->name      = func_get_arg(1);
            $this->readOnly  = func_get_arg(2);
            $this->subPath   = func_get_arg(3);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['mountPath'] = $this->mountPath;
        $json['name']      = $this->name;
        $json['readOnly']  = $this->readOnly;
        $json['subPath']   = $this->subPath;

        return $json;
    }
}