<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * StatefulSetStatus represents the current state of a StatefulSet.
 */
class V1beta1StatefulSetStatus implements JsonSerializable
{
    /**
     * Replicas is the number of actual replicas.
     * @required
     * @var integer $replicas public property
     */
    public $replicas;

    /**
     * most recent generation observed by this StatefulSet.
     * @var integer|null $observedGeneration public property
     */
    public $observedGeneration;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $replicas           Initialization value for $this->replicas
     * @param integer $observedGeneration Initialization value for $this->observedGeneration
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->replicas           = func_get_arg(0);
            $this->observedGeneration = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['replicas']           = $this->replicas;
        $json['observedGeneration'] = $this->observedGeneration;

        return $json;
    }
}
