<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * FlexVolume represents a generic volume resource that is provisioned/attached using an exec based
 * plugin. This is an alpha feature and may change in future.
 */
class V1FlexVolumeSource implements JsonSerializable
{
    /**
     * Driver is the name of the driver to use for this volume.
     * @required
     * @var string $driver public property
     */
    public $driver;

    /**
     * Filesystem type to mount. Must be a filesystem type supported by the host operating system. Ex. "ext4", "xfs", "ntfs". The default filesystem depends on FlexVolume script.
     * @var string|null $fsType public property
     */
    public $fsType;

    /**
     * Optional: Extra command options if any.
     * @var array|null $options public property
     */
    public $options;

    /**
     * Optional: Defaults to false (read/write). ReadOnly here will force the ReadOnly setting in VolumeMounts.
     * @var bool|null $readOnly public property
     */
    public $readOnly;

    /**
     * Optional: SecretRef is reference to the secret object containing sensitive information to pass to the plugin scripts. This may be empty if no secret object is specified. If the secret object contains more than one secret, all secrets are passed to the plugin scripts.
     * @var V1LocalObjectReference|null $secretRef public property
     */
    public $secretRef;

    /**
     * Constructor to set initial or default values of member properties
     * @param string                 $driver    Initialization value for $this->driver
     * @param string                 $fsType    Initialization value for $this->fsType
     * @param array                  $options   Initialization value for $this->options
     * @param bool                   $readOnly  Initialization value for $this->readOnly
     * @param V1LocalObjectReference $secretRef Initialization value for $this->secretRef
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->driver    = func_get_arg(0);
            $this->fsType    = func_get_arg(1);
            $this->options   = func_get_arg(2);
            $this->readOnly  = func_get_arg(3);
            $this->secretRef = func_get_arg(4);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['driver']    = $this->driver;
        $json['fsType']    = $this->fsType;
        $json['options']   = $this->options;
        $json['readOnly']  = $this->readOnly;
        $json['secretRef'] = $this->secretRef;

        return $json;
    }
}