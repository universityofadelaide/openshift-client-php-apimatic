<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * PodSecurityPolicySubjectReviewSpec defines specification for PodSecurityPolicySubjectReview
 */
class V1PodSecurityPolicySubjectReviewSpec implements JsonSerializable
{
    /**
     * template is the PodTemplateSpec to check. If template.spec.serviceAccountName is empty it will not be defaulted. If its non-empty, it will be checked.
     * @required
     * @var V1PodTemplateSpec $template public property
     */
    public $template;

    /**
     * groups is the groups you're testing for.
     * @var array|null $groups public property
     */
    public $groups;

    /**
     * user is the user you're testing for. If you specify "user" but not "group", then is it interpreted as "What if user were not a member of any groups. If user and groups are empty, then the check is performed using *only* the serviceAccountName in the template.
     * @var string|null $user public property
     */
    public $user;

    /**
     * Constructor to set initial or default values of member properties
     * @param V1PodTemplateSpec $template Initialization value for $this->template
     * @param array             $groups   Initialization value for $this->groups
     * @param string            $user     Initialization value for $this->user
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->template = func_get_arg(0);
            $this->groups   = func_get_arg(1);
            $this->user     = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['template'] = $this->template;
        $json['groups']   = $this->groups;
        $json['user']     = $this->user;

        return $json;
    }
}
