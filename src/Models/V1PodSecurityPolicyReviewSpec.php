<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * PodSecurityPolicyReviewSpec defines specification for PodSecurityPolicyReview
 */
class V1PodSecurityPolicyReviewSpec implements JsonSerializable
{
    /**
     * template is the PodTemplateSpec to check. The template.spec.serviceAccountName field is used if serviceAccountNames is empty, unless the template.spec.serviceAccountName is empty, in which case "default" is used. If serviceAccountNames is specified, template.spec.serviceAccountName is ignored.
     * @required
     * @var V1PodTemplateSpec $template public property
     */
    public $template;

    /**
     * serviceAccountNames is an optional set of ServiceAccounts to run the check with. If serviceAccountNames is empty, the template.spec.serviceAccountName is used, unless it's empty, in which case "default" is used instead. If serviceAccountNames is specified, template.spec.serviceAccountName is ignored.
     * @var array|null $serviceAccountNames public property
     */
    public $serviceAccountNames;

    /**
     * Constructor to set initial or default values of member properties
     * @param V1PodTemplateSpec $template            Initialization value for $this->template
     * @param array             $serviceAccountNames Initialization value for $this->serviceAccountNames
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->template            = func_get_arg(0);
            $this->serviceAccountNames = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['template']            = $this->template;
        $json['serviceAccountNames'] = $this->serviceAccountNames;

        return $json;
    }
}
