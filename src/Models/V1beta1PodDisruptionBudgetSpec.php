<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * PodDisruptionBudgetSpec is a description of a PodDisruptionBudget.
 */
class V1beta1PodDisruptionBudgetSpec implements JsonSerializable
{
    /**
     * An eviction is allowed if at least "minAvailable" pods selected by "selector" will still be available after the eviction, i.e. even in the absence of the evicted pod.  So for example you can prevent all voluntary evictions by specifying "100%".
     * @var string|null $minAvailable public property
     */
    public $minAvailable;

    /**
     * Label query over pods whose evictions are managed by the disruption budget.
     * @var V1LabelSelector|null $selector public property
     */
    public $selector;

    /**
     * Constructor to set initial or default values of member properties
     * @param string          $minAvailable Initialization value for $this->minAvailable
     * @param V1LabelSelector $selector     Initialization value for $this->selector
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->minAvailable = func_get_arg(0);
            $this->selector     = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['minAvailable'] = $this->minAvailable;
        $json['selector']     = $this->selector;

        return $json;
    }
}
