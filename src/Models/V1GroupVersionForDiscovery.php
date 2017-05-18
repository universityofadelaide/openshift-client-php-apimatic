<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * GroupVersion contains the "group/version" and "version" string of a version. It is made a struct to
 * keep extensibility.
 */
class V1GroupVersionForDiscovery implements JsonSerializable
{
    /**
     * groupVersion specifies the API group and version in the form "group/version"
     * @required
     * @var string $groupVersion public property
     */
    public $groupVersion;

    /**
     * version specifies the version in the form of "version". This is to save the clients the trouble of splitting the GroupVersion.
     * @required
     * @var string $version public property
     */
    public $version;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $groupVersion Initialization value for $this->groupVersion
     * @param string $version      Initialization value for $this->version
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->groupVersion = func_get_arg(0);
            $this->version      = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['groupVersion'] = $this->groupVersion;
        $json['version']      = $this->version;

        return $json;
    }
}
