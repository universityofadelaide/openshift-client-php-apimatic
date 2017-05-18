<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * SubjectRulesReviewSpec adds information about how to conduct the check
 */
class V1SubjectRulesReviewSpec implements JsonSerializable
{
    /**
     * Groups is optional.  Groups is the list of groups to which the User belongs.  At least one of User and Groups must be specified.
     * @required
     * @var array $groups public property
     */
    public $groups;

    /**
     * Scopes to use for the evaluation.  Empty means "use the unscoped (full) permissions of the user/groups".
     * @required
     * @var array $scopes public property
     */
    public $scopes;

    /**
     * User is optional.  At least one of User and Groups must be specified.
     * @required
     * @var string $user public property
     */
    public $user;

    /**
     * Constructor to set initial or default values of member properties
     * @param array  $groups Initialization value for $this->groups
     * @param array  $scopes Initialization value for $this->scopes
     * @param string $user   Initialization value for $this->user
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->groups = func_get_arg(0);
            $this->scopes = func_get_arg(1);
            $this->user   = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['groups'] = $this->groups;
        $json['scopes'] = $this->scopes;
        $json['user']   = $this->user;

        return $json;
    }
}