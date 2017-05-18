<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * The pod this Toleration is attached to tolerates any taint that matches the triple <key,value,
 * effect> using the matching operator <operator>.
 */
class V1Toleration implements JsonSerializable
{
    /**
     * Effect indicates the taint effect to match. Empty means match all taint effects. When specified, allowed values are NoSchedule, PreferNoSchedule and NoExecute.
     * @var string|null $effect public property
     */
    public $effect;

    /**
     * Key is the taint key that the toleration applies to. Empty means match all taint keys. If the key is empty, operator must be Exists; this combination means to match all values and all keys.
     * @var string|null $key public property
     */
    public $key;

    /**
     * Operator represents a key's relationship to the value. Valid operators are Exists and Equal. Defaults to Equal. Exists is equivalent to wildcard for value, so that a pod can tolerate all taints of a particular category.
     * @var string|null $operator public property
     */
    public $operator;

    /**
     * TolerationSeconds represents the period of time the toleration (which must be of effect NoExecute, otherwise this field is ignored) tolerates the taint. By default, it is not set, which means tolerate the taint forever (do not evict). Zero and negative values will be treated as 0 (evict immediately) by the system.
     * @var integer|null $tolerationSeconds public property
     */
    public $tolerationSeconds;

    /**
     * Value is the taint value the toleration matches to. If the operator is Exists, the value should be empty, otherwise just a regular string.
     * @var string|null $value public property
     */
    public $value;

    /**
     * Constructor to set initial or default values of member properties
     * @param string  $effect            Initialization value for $this->effect
     * @param string  $key               Initialization value for $this->key
     * @param string  $operator          Initialization value for $this->operator
     * @param integer $tolerationSeconds Initialization value for $this->tolerationSeconds
     * @param string  $value             Initialization value for $this->value
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->effect            = func_get_arg(0);
            $this->key               = func_get_arg(1);
            $this->operator          = func_get_arg(2);
            $this->tolerationSeconds = func_get_arg(3);
            $this->value             = func_get_arg(4);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['effect']            = $this->effect;
        $json['key']               = $this->key;
        $json['operator']          = $this->operator;
        $json['tolerationSeconds'] = $this->tolerationSeconds;
        $json['value']             = $this->value;

        return $json;
    }
}
