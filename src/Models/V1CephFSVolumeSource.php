<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * Represents a Ceph Filesystem mount that lasts the lifetime of a pod Cephfs volumes do not support
 * ownership management or SELinux relabeling.
 */
class V1CephFSVolumeSource implements JsonSerializable
{
    /**
     * Required: Monitors is a collection of Ceph monitors More info: http://releases.k8s.io/HEAD/examples/volumes/cephfs/README.md#how-to-use-it
     * @required
     * @var array $monitors public property
     */
    public $monitors;

    /**
     * Optional: Used as the mounted root, rather than the full Ceph tree, default is /
     * @var string|null $path public property
     */
    public $path;

    /**
     * Optional: Defaults to false (read/write). ReadOnly here will force the ReadOnly setting in VolumeMounts. More info: http://releases.k8s.io/HEAD/examples/volumes/cephfs/README.md#how-to-use-it
     * @var bool|null $readOnly public property
     */
    public $readOnly;

    /**
     * Optional: SecretFile is the path to key ring for User, default is /etc/ceph/user.secret More info: http://releases.k8s.io/HEAD/examples/volumes/cephfs/README.md#how-to-use-it
     * @var string|null $secretFile public property
     */
    public $secretFile;

    /**
     * Optional: SecretRef is reference to the authentication secret for User, default is empty. More info: http://releases.k8s.io/HEAD/examples/volumes/cephfs/README.md#how-to-use-it
     * @var V1LocalObjectReference|null $secretRef public property
     */
    public $secretRef;

    /**
     * Optional: User is the rados user name, default is admin More info: http://releases.k8s.io/HEAD/examples/volumes/cephfs/README.md#how-to-use-it
     * @var string|null $user public property
     */
    public $user;

    /**
     * Constructor to set initial or default values of member properties
     * @param array                  $monitors   Initialization value for $this->monitors
     * @param string                 $path       Initialization value for $this->path
     * @param bool                   $readOnly   Initialization value for $this->readOnly
     * @param string                 $secretFile Initialization value for $this->secretFile
     * @param V1LocalObjectReference $secretRef  Initialization value for $this->secretRef
     * @param string                 $user       Initialization value for $this->user
     */
    public function __construct()
    {
        if (6 == func_num_args()) {
            $this->monitors   = func_get_arg(0);
            $this->path       = func_get_arg(1);
            $this->readOnly   = func_get_arg(2);
            $this->secretFile = func_get_arg(3);
            $this->secretRef  = func_get_arg(4);
            $this->user       = func_get_arg(5);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['monitors']   = $this->monitors;
        $json['path']       = $this->path;
        $json['readOnly']   = $this->readOnly;
        $json['secretFile'] = $this->secretFile;
        $json['secretRef']  = $this->secretRef;
        $json['user']       = $this->user;

        return $json;
    }
}
