<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * current status of a horizontal pod autoscaler
 */
class V1HorizontalPodAutoscalerStatus implements JsonSerializable
{
    /**
     * current number of replicas of pods managed by this autoscaler.
     * @required
     * @var integer $currentReplicas public property
     */
    public $currentReplicas;

    /**
     * desired number of replicas of pods managed by this autoscaler.
     * @required
     * @var integer $desiredReplicas public property
     */
    public $desiredReplicas;

    /**
     * current average CPU utilization over all pods, represented as a percentage of requested CPU, e.g. 70 means that an average pod is using now 70% of its requested CPU.
     * @var integer|null $currentCPUUtilizationPercentage public property
     */
    public $currentCPUUtilizationPercentage;

    /**
     * last time the HorizontalPodAutoscaler scaled the number of pods; used by the autoscaler to control how often the number of pods is changed.
     * @var string|null $lastScaleTime public property
     */
    public $lastScaleTime;

    /**
     * most recent generation observed by this autoscaler.
     * @var integer|null $observedGeneration public property
     */
    public $observedGeneration;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $currentReplicas                 Initialization value for $this->currentReplicas
     * @param integer $desiredReplicas                 Initialization value for $this->desiredReplicas
     * @param integer $currentCPUUtilizationPercentage Initialization value for $this-
     *                                                   >currentCPUUtilizationPercentage
     * @param string  $lastScaleTime                   Initialization value for $this->lastScaleTime
     * @param integer $observedGeneration              Initialization value for $this->observedGeneration
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->currentReplicas                 = func_get_arg(0);
            $this->desiredReplicas                 = func_get_arg(1);
            $this->currentCPUUtilizationPercentage = func_get_arg(2);
            $this->lastScaleTime                   = func_get_arg(3);
            $this->observedGeneration              = func_get_arg(4);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['currentReplicas']                 = $this->currentReplicas;
        $json['desiredReplicas']                 = $this->desiredReplicas;
        $json['currentCPUUtilizationPercentage'] = $this->currentCPUUtilizationPercentage;
        $json['lastScaleTime']                   = $this->lastScaleTime;
        $json['observedGeneration']              = $this->observedGeneration;

        return $json;
    }
}
