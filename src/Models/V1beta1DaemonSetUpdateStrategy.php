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
class V1beta1DaemonSetUpdateStrategy implements JsonSerializable
{
    /**
     * Rolling update config params. Present only if type = "RollingUpdate".
     * @var V1beta1RollingUpdateDaemonSet|null $rollingUpdate public property
     */
    public $rollingUpdate;

    /**
     * Type of daemon set update. Can be "RollingUpdate" or "OnDelete". Default is OnDelete.
     * @var string|null $type public property
     */
    public $type;

    /**
     * Constructor to set initial or default values of member properties
     * @param V1beta1RollingUpdateDaemonSet $rollingUpdate Initialization value for $this->rollingUpdate
     * @param string                        $type          Initialization value for $this->type
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->rollingUpdate = func_get_arg(0);
            $this->type          = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['rollingUpdate'] = $this->rollingUpdate;
        $json['type']          = $this->type;

        return $json;
    }
}