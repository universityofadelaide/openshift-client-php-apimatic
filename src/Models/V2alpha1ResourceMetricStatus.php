<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * ResourceMetricStatus indicates the current value of a resource metric known to Kubernetes, as
 * specified in requests and limits, describing each pod in the current scale target (e.g. CPU or
 * memory).  Such metrics are built in to Kubernetes, and have special scaling options on top of those
 * available to normal per-pod metrics using the "pods" source.
 */
class V2alpha1ResourceMetricStatus implements JsonSerializable
{
    /**
     * currentAverageValue is the the current value of the average of the resource metric across all relevant pods, as a raw value (instead of as a percentage of the request), similar to the "pods" metric source type. It will always be set, regardless of the corresponding metric specification.
     * @required
     * @var string $currentAverageValue public property
     */
    public $currentAverageValue;

    /**
     * name is the name of the resource in question.
     * @required
     * @var string $name public property
     */
    public $name;

    /**
     * currentAverageUtilization is the current value of the average of the resource metric across all relevant pods, represented as a percentage of the requested value of the resource for the pods.  It will only be present if `targetAverageValue` was set in the corresponding metric specification.
     * @var integer|null $currentAverageUtilization public property
     */
    public $currentAverageUtilization;

    /**
     * Constructor to set initial or default values of member properties
     * @param string  $currentAverageValue       Initialization value for $this->currentAverageValue
     * @param string  $name                      Initialization value for $this->name
     * @param integer $currentAverageUtilization Initialization value for $this->currentAverageUtilization
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->currentAverageValue       = func_get_arg(0);
            $this->name                      = func_get_arg(1);
            $this->currentAverageUtilization = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['currentAverageValue']       = $this->currentAverageValue;
        $json['name']                      = $this->name;
        $json['currentAverageUtilization'] = $this->currentAverageUtilization;

        return $json;
    }
}
