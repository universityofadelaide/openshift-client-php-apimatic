<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * CronJobSpec describes how the job execution will look like and when it will actually run.
 */
class V2alpha1CronJobSpec implements JsonSerializable
{
    /**
     * JobTemplate is the object that describes the job that will be created when executing a CronJob.
     * @required
     * @var V2alpha1JobTemplateSpec $jobTemplate public property
     */
    public $jobTemplate;

    /**
     * Schedule contains the schedule in Cron format, see https://en.wikipedia.org/wiki/Cron.
     * @required
     * @var string $schedule public property
     */
    public $schedule;

    /**
     * ConcurrencyPolicy specifies how to treat concurrent executions of a Job.
     * @var string|null $concurrencyPolicy public property
     */
    public $concurrencyPolicy;

    /**
     * The number of failed finished jobs to retain. This is a pointer to distinguish between explicit zero and not specified.
     * @var integer|null $failedJobsHistoryLimit public property
     */
    public $failedJobsHistoryLimit;

    /**
     * Optional deadline in seconds for starting the job if it misses scheduled time for any reason.  Missed jobs executions will be counted as failed ones.
     * @var integer|null $startingDeadlineSeconds public property
     */
    public $startingDeadlineSeconds;

    /**
     * The number of successful finished jobs to retain. This is a pointer to distinguish between explicit zero and not specified.
     * @var integer|null $successfulJobsHistoryLimit public property
     */
    public $successfulJobsHistoryLimit;

    /**
     * Suspend flag tells the controller to suspend subsequent executions, it does not apply to already started executions.  Defaults to false.
     * @var bool|null $suspend public property
     */
    public $suspend;

    /**
     * Constructor to set initial or default values of member properties
     * @param V2alpha1JobTemplateSpec $jobTemplate                Initialization value for $this->jobTemplate
     * @param string                  $schedule                   Initialization value for $this->schedule
     * @param string                  $concurrencyPolicy          Initialization value for $this->concurrencyPolicy
     * @param integer                 $failedJobsHistoryLimit     Initialization value for $this-
     *                                                              >failedJobsHistoryLimit
     * @param integer                 $startingDeadlineSeconds    Initialization value for $this-
     *                                                              >startingDeadlineSeconds
     * @param integer                 $successfulJobsHistoryLimit Initialization value for $this-
     *                                                              >successfulJobsHistoryLimit
     * @param bool                    $suspend                    Initialization value for $this->suspend
     */
    public function __construct()
    {
        if (7 == func_num_args()) {
            $this->jobTemplate                = func_get_arg(0);
            $this->schedule                   = func_get_arg(1);
            $this->concurrencyPolicy          = func_get_arg(2);
            $this->failedJobsHistoryLimit     = func_get_arg(3);
            $this->startingDeadlineSeconds    = func_get_arg(4);
            $this->successfulJobsHistoryLimit = func_get_arg(5);
            $this->suspend                    = func_get_arg(6);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['jobTemplate']                = $this->jobTemplate;
        $json['schedule']                   = $this->schedule;
        $json['concurrencyPolicy']          = $this->concurrencyPolicy;
        $json['failedJobsHistoryLimit']     = $this->failedJobsHistoryLimit;
        $json['startingDeadlineSeconds']    = $this->startingDeadlineSeconds;
        $json['successfulJobsHistoryLimit'] = $this->successfulJobsHistoryLimit;
        $json['suspend']                    = $this->suspend;

        return $json;
    }
}