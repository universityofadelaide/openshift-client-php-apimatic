<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * ContainerStateTerminated is a terminated state of a container.
 */
class V1ContainerStateTerminated implements JsonSerializable
{
    /**
     * Exit status from the last termination of the container
     * @required
     * @var integer $exitCode public property
     */
    public $exitCode;

    /**
     * Container's ID in the format 'docker://<container_id>'
     * @var string|null $containerID public property
     */
    public $containerID;

    /**
     * Time at which the container last terminated
     * @var string|null $finishedAt public property
     */
    public $finishedAt;

    /**
     * Message regarding the last termination of the container
     * @var string|null $message public property
     */
    public $message;

    /**
     * (brief) reason from the last termination of the container
     * @var string|null $reason public property
     */
    public $reason;

    /**
     * Signal from the last termination of the container
     * @var integer|null $signal public property
     */
    public $signal;

    /**
     * Time at which previous execution of the container started
     * @var string|null $startedAt public property
     */
    public $startedAt;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $exitCode    Initialization value for $this->exitCode
     * @param string  $containerID Initialization value for $this->containerID
     * @param string  $finishedAt  Initialization value for $this->finishedAt
     * @param string  $message     Initialization value for $this->message
     * @param string  $reason      Initialization value for $this->reason
     * @param integer $signal      Initialization value for $this->signal
     * @param string  $startedAt   Initialization value for $this->startedAt
     */
    public function __construct()
    {
        if (7 == func_num_args()) {
            $this->exitCode    = func_get_arg(0);
            $this->containerID = func_get_arg(1);
            $this->finishedAt  = func_get_arg(2);
            $this->message     = func_get_arg(3);
            $this->reason      = func_get_arg(4);
            $this->signal      = func_get_arg(5);
            $this->startedAt   = func_get_arg(6);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['exitCode']    = $this->exitCode;
        $json['containerID'] = $this->containerID;
        $json['finishedAt']  = $this->finishedAt;
        $json['message']     = $this->message;
        $json['reason']      = $this->reason;
        $json['signal']      = $this->signal;
        $json['startedAt']   = $this->startedAt;

        return $json;
    }
}