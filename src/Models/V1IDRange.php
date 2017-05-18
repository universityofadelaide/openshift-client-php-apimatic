<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * IDRange provides a min/max of an allowed range of IDs.
 */
class V1IDRange implements JsonSerializable
{
    /**
     * Max is the end of the range, inclusive.
     * @var integer|null $max public property
     */
    public $max;

    /**
     * Min is the start of the range, inclusive.
     * @var integer|null $min public property
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
