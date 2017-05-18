<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * SignatureCondition describes an image signature condition of particular kind at particular probe
 * time.
 */
class V1SignatureCondition implements JsonSerializable
{
    /**
     * Status of the condition, one of True, False, Unknown.
     * @required
     * @var string $status public property
     */
    public $status;

    /**
     * Type of signature condition, Complete or Failed.
     * @required
     * @var string $type public property
     */
    public $type;

    /**
     * Last time the condition was checked.
     * @var string|null $lastProbeTime public property
     */
    public $lastProbeTime;

    /**
     * Last time the condition transit from one status to another.
     * @var string|null $lastTransitionTime public property
     */
    public $lastTransitionTime;

    /**
     * Human readable message indicating details about last transition.
     * @var string|null $message public property
     */
    public $message;

    /**
     * (brief) reason for the condition's last transition.
     * @var string|null $reason public property
     */
    public $reason;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $status             Initialization value for $this->status
     * @param string $type               Initialization value for $this->type
     * @param string $lastProbeTime      Initialization value for $this->lastProbeTime
     * @param string $lastTransitionTime Initialization value for $this->lastTransitionTime
     * @param string $message            Initialization value for $this->message
     * @param string $reason             Initialization value for $this->reason
     */
    public function __construct()
    {
        if (6 == func_num_args()) {
            $this->status             = func_get_arg(0);
            $this->type               = func_get_arg(1);
            $this->lastProbeTime      = func_get_arg(2);
            $this->lastTransitionTime = func_get_arg(3);
            $this->message            = func_get_arg(4);
            $this->reason             = func_get_arg(5);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['status']             = $this->status;
        $json['type']               = $this->type;
        $json['lastProbeTime']      = $this->lastProbeTime;
        $json['lastTransitionTime'] = $this->lastTransitionTime;
        $json['message']            = $this->message;
        $json['reason']             = $this->reason;

        return $json;
    }
}