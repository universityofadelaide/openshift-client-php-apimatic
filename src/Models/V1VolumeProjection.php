<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * Projection that may be projected along with other supported volume types
 */
class V1VolumeProjection implements JsonSerializable
{
    /**
     * information about the configMap data to project
     * @var V1ConfigMapProjection|null $configMap public property
     */
    public $configMap;

    /**
     * information about the downwardAPI data to project
     * @var V1DownwardAPIProjection|null $downwardAPI public property
     */
    public $downwardAPI;

    /**
     * information about the secret data to project
     * @var V1ConfigMapProjection|null $secret public property
     */
    public $secret;

    /**
     * Constructor to set initial or default values of member properties
     * @param V1ConfigMapProjection   $configMap   Initialization value for $this->configMap
     * @param V1DownwardAPIProjection $downwardAPI Initialization value for $this->downwardAPI
     * @param V1ConfigMapProjection   $secret      Initialization value for $this->secret
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->configMap   = func_get_arg(0);
            $this->downwardAPI = func_get_arg(1);
            $this->secret      = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['configMap']   = $this->configMap;
        $json['downwardAPI'] = $this->downwardAPI;
        $json['secret']      = $this->secret;

        return $json;
    }
}
