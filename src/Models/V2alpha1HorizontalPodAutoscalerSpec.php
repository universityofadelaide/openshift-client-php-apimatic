<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * HorizontalPodAutoscalerSpec describes the desired functionality of the HorizontalPodAutoscaler.
 */
class V2alpha1HorizontalPodAutoscalerSpec implements JsonSerializable
{
    /**
     * maxReplicas is the upper limit for the number of replicas to which the autoscaler can scale up. It cannot be less that minReplicas.
     * @required
     * @var integer $maxReplicas public property
     */
    public $maxReplicas;

    /**
     * scaleTargetRef points to the target resource to scale, and is used to the pods for which metrics should be collected, as well as to actually change the replica count.
     * @required
     * @var V1CrossVersionObjectReference $scaleTargetRef public property
     */
    public $scaleTargetRef;

    /**
     * metrics contains the specifications for which to use to calculate the desired replica count (the maximum replica count across all metrics will be used).  The desired replica count is calculated multiplying the ratio between the target value and the current value by the current number of pods.  Ergo, metrics used must decrease as the pod count is increased, and vice-versa.  See the individual metric source types for more information about how each type of metric must respond.
     * @var V2alpha1MetricSpec[]|null $metrics public property
     */
    public $metrics;

    /**
     * minReplicas is the lower limit for the number of replicas to which the autoscaler can scale down. It defaults to 1 pod.
     * @var integer|null $minReplicas public property
     */
    public $minReplicas;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer                       $maxReplicas    Initialization value for $this->maxReplicas
     * @param V1CrossVersionObjectReference $scaleTargetRef Initialization value for $this->scaleTargetRef
     * @param array                         $metrics        Initialization value for $this->metrics
     * @param integer                       $minReplicas    Initialization value for $this->minReplicas
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->maxReplicas    = func_get_arg(0);
            $this->scaleTargetRef = func_get_arg(1);
            $this->metrics        = func_get_arg(2);
            $this->minReplicas    = func_get_arg(3);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['maxReplicas']    = $this->maxReplicas;
        $json['scaleTargetRef'] = $this->scaleTargetRef;
        $json['metrics']        = $this->metrics;
        $json['minReplicas']    = $this->minReplicas;

        return $json;
    }
}
