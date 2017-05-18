<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * SELinux  Strategy Options defines the strategy type and any options used to create the strategy.
 */
class V1beta1SELinuxStrategyOptions implements JsonSerializable
{
    /**
     * type is the strategy that will dictate the allowable labels that may be set.
     * @required
     * @var string $rule public property
     */
    public $rule;

    /**
     * seLinuxOptions required to run as; required for MustRunAs More info: http://releases.k8s.io/HEAD/docs/design/security_context.md#security-context
     * @var V1SELinuxOptions|null $seLinuxOptions public property
     */
    public $seLinuxOptions;

    /**
     * Constructor to set initial or default values of member properties
     * @param string           $rule           Initialization value for $this->rule
     * @param V1SELinuxOptions $seLinuxOptions Initialization value for $this->seLinuxOptions
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->rule           = func_get_arg(0);
            $this->seLinuxOptions = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['rule']           = $this->rule;
        $json['seLinuxOptions'] = $this->seLinuxOptions;

        return $json;
    }
}
