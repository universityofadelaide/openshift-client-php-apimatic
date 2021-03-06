<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * UserRestriction matches a user either by a string match on the user name, a string match on the name
 * of a group to which the user belongs, or a label selector applied to the user labels.
 */
class V1UserRestriction implements JsonSerializable
{
    /**
     * Groups specifies a list of literal group names.
     * @required
     * @var array $groups public property
     */
    public $groups;

    /**
     * Selectors specifies a list of label selectors over user labels.
     * @required
     * @var V1LabelSelector[] $labels public property
     */
    public $labels;

    /**
     * Users specifies a list of literal user names.
     * @required
     * @var array $users public property
     */
    public $users;

    /**
     * Constructor to set initial or default values of member properties
     * @param array $groups Initialization value for $this->groups
     * @param array $labels Initialization value for $this->labels
     * @param array $users  Initialization value for $this->users
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->groups = func_get_arg(0);
            $this->labels = func_get_arg(1);
            $this->users  = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['groups'] = $this->groups;
        $json['labels'] = $this->labels;
        $json['users']  = $this->users;

        return $json;
    }
}
