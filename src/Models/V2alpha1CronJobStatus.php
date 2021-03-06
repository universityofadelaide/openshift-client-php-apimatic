<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * CronJobStatus represents the current state of a cron job.
 */
class V2alpha1CronJobStatus implements JsonSerializable
{
    /**
     * Active holds pointers to currently running jobs.
     * @var V1ObjectReference[]|null $active public property
     */
    public $active;

    /**
     * LastScheduleTime keeps information of when was the last time the job was successfully scheduled.
     * @var string|null $lastScheduleTime public property
     */
    public $lastScheduleTime;

    /**
     * Constructor to set initial or default values of member properties
     * @param array  $active           Initialization value for $this->active
     * @param string $lastScheduleTime Initialization value for $this->lastScheduleTime
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->active           = func_get_arg(0);
            $this->lastScheduleTime = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['active']           = $this->active;
        $json['lastScheduleTime'] = $this->lastScheduleTime;

        return $json;
    }
}
