<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * DeploymentTriggerPolicy describes a policy for a single trigger that results in a new deployment.
 */
class V1DeploymentTriggerPolicy implements JsonSerializable
{
    /**
     * ImageChangeParams represents the parameters for the ImageChange trigger.
     * @var V1DeploymentTriggerImageChangeParams|null $imageChangeParams public property
     */
    public $imageChangeParams;

    /**
     * Type of the trigger
     * @var string|null $type public property
     */
    public $type;

    /**
     * Constructor to set initial or default values of member properties
     * @param V1DeploymentTriggerImageChangeParams $imageChangeParams Initialization value for $this-
     *                                                                  >imageChangeParams
     * @param string                               $type              Initialization value for $this->type
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->imageChangeParams = func_get_arg(0);
            $this->type              = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['imageChangeParams'] = $this->imageChangeParams;
        $json['type']              = $this->type;

        return $json;
    }
}
