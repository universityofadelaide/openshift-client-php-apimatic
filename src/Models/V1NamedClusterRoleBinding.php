<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * NamedClusterRoleBinding relates a name with a cluster role binding
 */
class V1NamedClusterRoleBinding implements JsonSerializable
{
    /**
     * Name is the name of the cluster role binding
     * @required
     * @var string $name public property
     */
    public $name;

    /**
     * RoleBinding is the cluster role binding being named
     * @required
     * @var V1ClusterRoleBinding $roleBinding public property
     */
    public $roleBinding;

    /**
     * Constructor to set initial or default values of member properties
     * @param string               $name        Initialization value for $this->name
     * @param V1ClusterRoleBinding $roleBinding Initialization value for $this->roleBinding
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->name        = func_get_arg(0);
            $this->roleBinding = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['name']        = $this->name;
        $json['roleBinding'] = $this->roleBinding;

        return $json;
    }
}
