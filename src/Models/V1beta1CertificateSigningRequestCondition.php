<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class V1beta1CertificateSigningRequestCondition implements JsonSerializable
{
    /**
     * request approval state, currently Approved or Denied.
     * @required
     * @var string $type public property
     */
    public $type;

    /**
     * timestamp for the last update to this condition
     * @var string|null $lastUpdateTime public property
     */
    public $lastUpdateTime;

    /**
     * human readable message with details about the request state
     * @var string|null $message public property
     */
    public $message;

    /**
     * brief reason for the request state
     * @var string|null $reason public property
     */
    public $reason;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $type           Initialization value for $this->type
     * @param string $lastUpdateTime Initialization value for $this->lastUpdateTime
     * @param string $message        Initialization value for $this->message
     * @param string $reason         Initialization value for $this->reason
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->type           = func_get_arg(0);
            $this->lastUpdateTime = func_get_arg(1);
            $this->message        = func_get_arg(2);
            $this->reason         = func_get_arg(3);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['type']           = $this->type;
        $json['lastUpdateTime'] = $this->lastUpdateTime;
        $json['message']        = $this->message;
        $json['reason']         = $this->reason;

        return $json;
    }
}
