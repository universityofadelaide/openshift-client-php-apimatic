<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * ReplicaSetSpec is the specification of a ReplicaSet.
 */
class V1beta1ReplicaSetSpec implements JsonSerializable
{
    /**
     * Minimum number of seconds for which a newly created pod should be ready without any of its container crashing, for it to be considered available. Defaults to 0 (pod will be considered available as soon as it is ready)
     * @var integer|null $minReadySeconds public property
     */
    public $minReadySeconds;

    /**
     * Replicas is the number of desired replicas. This is a pointer to distinguish between explicit zero and unspecified. Defaults to 1. More info: http://kubernetes.io/docs/user-guide/replication-controller#what-is-a-replication-controller
     * @var integer|null $replicas public property
     */
    public $replicas;

    /**
     * Selector is a label query over pods that should match the replica count. If the selector is empty, it is defaulted to the labels present on the pod template. Label keys and values that must match in order to be controlled by this replica set. More info: http://kubernetes.io/docs/user-guide/labels#label-selectors
     * @var V1LabelSelector|null $selector public property
     */
    public $selector;

    /**
     * Template is the object that describes the pod that will be created if insufficient replicas are detected. More info: http://kubernetes.io/docs/user-guide/replication-controller#pod-template
     * @var V1PodTemplateSpec|null $template public property
     */
    public $template;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer           $minReadySeconds Initialization value for $this->minReadySeconds
     * @param integer           $replicas        Initialization value for $this->replicas
     * @param V1LabelSelector   $selector        Initialization value for $this->selector
     * @param V1PodTemplateSpec $template        Initialization value for $this->template
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->minReadySeconds = func_get_arg(0);
            $this->replicas        = func_get_arg(1);
            $this->selector        = func_get_arg(2);
            $this->template        = func_get_arg(3);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['minReadySeconds'] = $this->minReadySeconds;
        $json['replicas']        = $this->replicas;
        $json['selector']        = $this->selector;
        $json['template']        = $this->template;

        return $json;
    }
}
