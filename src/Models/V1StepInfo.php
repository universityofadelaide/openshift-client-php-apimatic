<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * StepInfo contains details about a build step.
 */
class V1StepInfo implements JsonSerializable
{
    /**
     * durationMilliseconds identifies how long the step took to complete in milliseconds.
     * @var integer|null $durationMilliseconds public property
     */
    public $durationMilliseconds;

    /**
     * name is a unique identifier for each build step.
     * @var string|null $name public property
     */
    public $name;

    /**
     * startTime is a timestamp representing the server time when this Step started. it is represented in RFC3339 form and is in UTC.
     * @var string|null $startTime public property
     */
    public $startTime;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $durationMilliseconds Initialization value for $this->durationMilliseconds
     * @param string  $name                 Initialization value for $this->name
     * @param string  $startTime            Initialization value for $this->startTime
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->durationMilliseconds = func_get_arg(0);
            $this->name                 = func_get_arg(1);
            $this->startTime            = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['durationMilliseconds'] = $this->durationMilliseconds;
        $json['name']                 = $this->name;
        $json['startTime']            = $this->startTime;

        return $json;
    }
}
