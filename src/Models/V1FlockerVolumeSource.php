<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * Represents a Flocker volume mounted by the Flocker agent. One and only one of datasetName and
 * datasetUUID should be set. Flocker volumes do not support ownership management or SELinux relabeling.
 */
class V1FlockerVolumeSource implements JsonSerializable
{
    /**
     * Name of the dataset stored as metadata -> name on the dataset for Flocker should be considered as deprecated
     * @var string|null $datasetName public property
     */
    public $datasetName;

    /**
     * UUID of the dataset. This is unique identifier of a Flocker dataset
     * @var string|null $datasetUUID public property
     */
    public $datasetUUID;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $datasetName Initialization value for $this->datasetName
     * @param string $datasetUUID Initialization value for $this->datasetUUID
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->datasetName = func_get_arg(0);
            $this->datasetUUID = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['datasetName'] = $this->datasetName;
        $json['datasetUUID'] = $this->datasetUUID;

        return $json;
    }
}
