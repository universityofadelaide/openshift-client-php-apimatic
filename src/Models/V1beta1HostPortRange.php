<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * Host Port Range defines a range of host ports that will be enabled by a policy for pods to use.  It
 * requires both the start and end to be defined.
 */
class V1beta1HostPortRange implements JsonSerializable
{
    /**
     * max is the end of the range, inclusive.
     * @required
     * @var integer $max public property
     */
    public $max;

    /**
     * min is the start of the range, inclusive.
     * @required
     * @var integer $min public property
     */
    public $min;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $max Initialization value for $this->max
     * @param integer $min Initialization value for $this->min
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->max = func_get_arg(0);
            $this->min = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['max'] = $this->max;
        $json['min'] = $this->min;

        return $json;
    }
}
