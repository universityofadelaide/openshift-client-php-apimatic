<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * Represents an ISCSI disk. ISCSI volumes can only be mounted as read/write once. ISCSI volumes
 * support ownership management and SELinux relabeling.
 */
class V1ISCSIVolumeSource implements JsonSerializable
{
    /**
     * Target iSCSI Qualified Name.
     * @required
     * @var string $iqn public property
     */
    public $iqn;

    /**
     * iSCSI target lun number.
     * @required
     * @var integer $lun public property
     */
    public $lun;

    /**
     * iSCSI target portal. The portal is either an IP or ip_addr:port if the port is other than default (typically TCP ports 860 and 3260).
     * @required
     * @var string $targetPortal public property
     */
    public $targetPortal;

    /**
     * whether support iSCSI Discovery CHAP authentication
     * @var bool|null $chapAuthDiscovery public property
     */
    public $chapAuthDiscovery;

    /**
     * whether support iSCSI Session CHAP authentication
     * @var bool|null $chapAuthSession public property
     */
    public $chapAuthSession;

    /**
     * Filesystem type of the volume that you want to mount. Tip: Ensure that the filesystem type is supported by the host operating system. Examples: "ext4", "xfs", "ntfs". Implicitly inferred to be "ext4" if unspecified. More info: http://kubernetes.io/docs/user-guide/volumes#iscsi
     * @var string|null $fsType public property
     */
    public $fsType;

    /**
     * Optional: Defaults to 'default' (tcp). iSCSI interface name that uses an iSCSI transport.
     * @var string|null $iscsiInterface public property
     */
    public $iscsiInterface;

    /**
     * iSCSI target portal List. The portal is either an IP or ip_addr:port if the port is other than default (typically TCP ports 860 and 3260).
     * @var array|null $portals public property
     */
    public $portals;

    /**
     * ReadOnly here will force the ReadOnly setting in VolumeMounts. Defaults to false.
     * @var bool|null $readOnly public property
     */
    public $readOnly;

    /**
     * CHAP secret for iSCSI target and initiator authentication
     * @var V1LocalObjectReference|null $secretRef public property
     */
    public $secretRef;

    /**
     * Constructor to set initial or default values of member properties
     * @param string                 $iqn               Initialization value for $this->iqn
     * @param integer                $lun               Initialization value for $this->lun
     * @param string                 $targetPortal      Initialization value for $this->targetPortal
     * @param bool                   $chapAuthDiscovery Initialization value for $this->chapAuthDiscovery
     * @param bool                   $chapAuthSession   Initialization value for $this->chapAuthSession
     * @param string                 $fsType            Initialization value for $this->fsType
     * @param string                 $iscsiInterface    Initialization value for $this->iscsiInterface
     * @param array                  $portals           Initialization value for $this->portals
     * @param bool                   $readOnly          Initialization value for $this->readOnly
     * @param V1LocalObjectReference $secretRef         Initialization value for $this->secretRef
     */
    public function __construct()
    {
        if (10 == func_num_args()) {
            $this->iqn               = func_get_arg(0);
            $this->lun               = func_get_arg(1);
            $this->targetPortal      = func_get_arg(2);
            $this->chapAuthDiscovery = func_get_arg(3);
            $this->chapAuthSession   = func_get_arg(4);
            $this->fsType            = func_get_arg(5);
            $this->iscsiInterface    = func_get_arg(6);
            $this->portals           = func_get_arg(7);
            $this->readOnly          = func_get_arg(8);
            $this->secretRef         = func_get_arg(9);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['iqn']               = $this->iqn;
        $json['lun']               = $this->lun;
        $json['targetPortal']      = $this->targetPortal;
        $json['chapAuthDiscovery'] = $this->chapAuthDiscovery;
        $json['chapAuthSession']   = $this->chapAuthSession;
        $json['fsType']            = $this->fsType;
        $json['iscsiInterface']    = $this->iscsiInterface;
        $json['portals']           = $this->portals;
        $json['readOnly']          = $this->readOnly;
        $json['secretRef']         = $this->secretRef;

        return $json;
    }
}