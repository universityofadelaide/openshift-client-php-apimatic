<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * PodDisruptionBudgetStatus represents information about the status of a PodDisruptionBudget. Status
 * may trail the actual state of a system.
 */
class V1beta1PodDisruptionBudgetStatus implements JsonSerializable
{
    /**
     * current number of healthy pods
     * @required
     * @var integer $currentHealthy public property
     */
    public $currentHealthy;

    /**
     * minimum desired number of healthy pods
     * @required
     * @var integer $desiredHealthy public property
     */
    public $desiredHealthy;

    /**
     * DisruptedPods contains information about pods whose eviction was processed by the API server eviction subresource handler but has not yet been observed by the PodDisruptionBudget controller. A pod will be in this map from the time when the API server processed the eviction request to the time when the pod is seen by PDB controller as having been marked for deletion (or after a timeout). The key in the map is the name of the pod and the value is the time when the API server processed the eviction request. If the deletion didn't occur and a pod is still there it will be removed from the list automatically by PodDisruptionBudget controller after some time. If everything goes smooth this map should be empty for the most of the time. Large number of entries in the map may indicate problems with pod deletions.
     * @required
     * @var array $disruptedPods public property
     */
    public $disruptedPods;

    /**
     * Number of pod disruptions that are currently allowed.
     * @required
     * @var integer $disruptionsAllowed public property
     */
    public $disruptionsAllowed;

    /**
     * total number of pods counted by this disruption budget
     * @required
     * @var integer $expectedPods public property
     */
    public $expectedPods;

    /**
     * Most recent generation observed when updating this PDB status. PodDisruptionsAllowed and other status informatio is valid only if observedGeneration equals to PDB's object generation.
     * @var integer|null $observedGeneration public property
     */
    public $observedGeneration;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $currentHealthy     Initialization value for $this->currentHealthy
     * @param integer $desiredHealthy     Initialization value for $this->desiredHealthy
     * @param array   $disruptedPods      Initialization value for $this->disruptedPods
     * @param integer $disruptionsAllowed Initialization value for $this->disruptionsAllowed
     * @param integer $expectedPods       Initialization value for $this->expectedPods
     * @param integer $observedGeneration Initialization value for $this->observedGeneration
     */
    public function __construct()
    {
        if (6 == func_num_args()) {
            $this->currentHealthy     = func_get_arg(0);
            $this->desiredHealthy     = func_get_arg(1);
            $this->disruptedPods      = func_get_arg(2);
            $this->disruptionsAllowed = func_get_arg(3);
            $this->expectedPods       = func_get_arg(4);
            $this->observedGeneration = func_get_arg(5);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['currentHealthy']     = $this->currentHealthy;
        $json['desiredHealthy']     = $this->desiredHealthy;
        $json['disruptedPods']      = $this->disruptedPods;
        $json['disruptionsAllowed'] = $this->disruptionsAllowed;
        $json['expectedPods']       = $this->expectedPods;
        $json['observedGeneration'] = $this->observedGeneration;

        return $json;
    }
}
