<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * SELinuxOptions are the labels to be applied to the container
 */
class V1SELinuxOptions implements JsonSerializable
{
    /**
     * Level is SELinux level label that applies to the container.
     * @var string|null $level public property
     */
    public $level;

    /**
     * Role is a SELinux role label that applies to the container.
     * @var string|null $role public property
     */
    public $role;

    /**
     * Type is a SELinux type label that applies to the container.
     * @var string|null $type public property
     */
    public $type;

    /**
     * User is a SELinux user label that applies to the container.
     * @var string|null $user public property
     */
    public $user;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $level Initialization value for $this->level
     * @param string $role  Initialization value for $this->role
     * @param string $type  Initialization value for $this->type
     * @param string $user  Initialization value for $this->user
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->level = func_get_arg(0);
            $this->role  = func_get_arg(1);
            $this->type  = func_get_arg(2);
            $this->user  = func_get_arg(3);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['level'] = $this->level;
        $json['role']  = $this->role;
        $json['type']  = $this->type;
        $json['user']  = $this->user;

        return $json;
    }
}
