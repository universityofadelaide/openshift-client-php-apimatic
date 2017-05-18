<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * ResourceMetricSource indicates how to scale on a resource metric known to Kubernetes, as specified
 * in requests and limits, describing each pod in the current scale target (e.g. CPU or memory).  The
 * values will be averaged together before being compared to the target.  Such metrics are built in to
 * Kubernetes, and have special scaling options on top of those available to normal per-pod metrics
 * using the "pods" source.  Only one "target" type should be set.
 */
class V2alpha1ResourceMetricSource implements JsonSerializable
{
    /**
     * name is the name of the resource in question.
     * @required
     * @var string $name public property
     */
    public $name;

    /**
     * targetAverageUtilization is the target value of the average of the resource metric across all relevant pods, represented as a percentage of the requested value of the resource for the pods.
     * @var integer|null $targetAverageUtilization public property
     */
    public $targetAverageUtilization;

    /**
     * targetAverageValue is the the target value of the average of the resource metric across all relevant pods, as a raw value (instead of as a percentage of the request), similar to the "pods" metric source type.
     * @var string|null $targetAverageValue public property
     */
    public $targetAverageValue;

    /**
     * Constructor to set initial or default values of member properties
     * @param string  $name                     Initialization value for $this->name
     * @param integer $targetAverageUtilization Initialization value for $this->targetAverageUtilization
     * @param string  $targetAverageValue       Initialization value for $this->targetAverageValue
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->name                     = func_get_arg(0);
            $this->targetAverageUtilization = func_get_arg(1);
            $this->targetAverageValue       = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['name']                     = $this->name;
        $json['targetAverageUtilization'] = $this->targetAverageUtilization;
        $json['targetAverageValue']       = $this->targetAverageValue;

        return $json;
    }
}