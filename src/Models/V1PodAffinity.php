<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * Pod affinity is a group of inter pod affinity scheduling rules.
 */
class V1PodAffinity implements JsonSerializable
{
    /**
     * The scheduler will prefer to schedule pods to nodes that satisfy the affinity expressions specified by this field, but it may choose a node that violates one or more of the expressions. The node that is most preferred is the one with the greatest sum of weights, i.e. for each node that meets all of the scheduling requirements (resource request, requiredDuringScheduling affinity expressions, etc.), compute a sum by iterating through the elements of this field and adding "weight" to the sum if the node has pods which matches the corresponding podAffinityTerm; the node(s) with the highest sum are the most preferred.
     * @var V1WeightedPodAffinityTerm[]|null $preferredDuringSchedulingIgnoredDuringExecution public property
     */
    public $preferredDuringSchedulingIgnoredDuringExecution;

    /**
     * NOT YET IMPLEMENTED. TODO: Uncomment field once it is implemented. If the affinity requirements specified by this field are not met at scheduling time, the pod will not be scheduled onto the node. If the affinity requirements specified by this field cease to be met at some point during pod execution (e.g. due to a pod label update), the system will try to eventually evict the pod from its node. When there are multiple elements, the lists of nodes corresponding to each podAffinityTerm are intersected, i.e. all terms must be satisfied. RequiredDuringSchedulingRequiredDuringExecution []PodAffinityTerm  `json:"requiredDuringSchedulingRequiredDuringExecution,omitempty"` If the affinity requirements specified by this field are not met at scheduling time, the pod will not be scheduled onto the node. If the affinity requirements specified by this field cease to be met at some point during pod execution (e.g. due to a pod label update), the system may or may not try to eventually evict the pod from its node. When there are multiple elements, the lists of nodes corresponding to each podAffinityTerm are intersected, i.e. all terms must be satisfied.
     * @var V1PodAffinityTerm[]|null $requiredDuringSchedulingIgnoredDuringExecution public property
     */
    public $requiredDuringSchedulingIgnoredDuringExecution;

    /**
     * Constructor to set initial or default values of member properties
     * @param array $preferredDuringSchedulingIgnoredDuringExecution Initialization value for $this-
     *                                                                 >preferredDuringSchedulingIgnoredDuringExecution
     * @param array $requiredDuringSchedulingIgnoredDuringExecution  Initialization value for $this-
     *                                                                 >requiredDuringSchedulingIgnoredDuringExecution
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->preferredDuringSchedulingIgnoredDuringExecution = func_get_arg(0);
            $this->requiredDuringSchedulingIgnoredDuringExecution  = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['preferredDuringSchedulingIgnoredDuringExecution'] = $this->preferredDuringSchedulingIgnoredDuringExecution;
        $json['requiredDuringSchedulingIgnoredDuringExecution']  = $this->requiredDuringSchedulingIgnoredDuringExecution;

        return $json;
    }
}
