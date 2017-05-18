<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * PersistentVolumeSpec is the specification of a persistent volume.
 */
class V1PersistentVolumeSpec implements JsonSerializable
{
    /**
     * AccessModes contains all ways the volume can be mounted. More info: http://kubernetes.io/docs/user-guide/persistent-volumes#access-modes
     * @var array|null $accessModes public property
     */
    public $accessModes;

    /**
     * AWSElasticBlockStore represents an AWS Disk resource that is attached to a kubelet's host machine and then exposed to the pod. More info: http://kubernetes.io/docs/user-guide/volumes#awselasticblockstore
     * @var V1AWSElasticBlockStoreVolumeSource|null $awsElasticBlockStore public property
     */
    public $awsElasticBlockStore;

    /**
     * AzureDisk represents an Azure Data Disk mount on the host and bind mount to the pod.
     * @var V1AzureDiskVolumeSource|null $azureDisk public property
     */
    public $azureDisk;

    /**
     * AzureFile represents an Azure File Service mount on the host and bind mount to the pod.
     * @var V1AzureFileVolumeSource|null $azureFile public property
     */
    public $azureFile;

    /**
     * A description of the persistent volume's resources and capacity. More info: http://kubernetes.io/docs/user-guide/persistent-volumes#capacity
     * @var array|null $capacity public property
     */
    public $capacity;

    /**
     * CephFS represents a Ceph FS mount on the host that shares a pod's lifetime
     * @var V1CephFSVolumeSource|null $cephfs public property
     */
    public $cephfs;

    /**
     * Cinder represents a cinder volume attached and mounted on kubelets host machine More info: http://releases.k8s.io/HEAD/examples/mysql-cinder-pd/README.md
     * @var V1CinderVolumeSource|null $cinder public property
     */
    public $cinder;

    /**
     * ClaimRef is part of a bi-directional binding between PersistentVolume and PersistentVolumeClaim. Expected to be non-nil when bound. claim.VolumeName is the authoritative bind between PV and PVC. More info: http://kubernetes.io/docs/user-guide/persistent-volumes#binding
     * @var V1ObjectReference|null $claimRef public property
     */
    public $claimRef;

    /**
     * FC represents a Fibre Channel resource that is attached to a kubelet's host machine and then exposed to the pod.
     * @var V1FCVolumeSource|null $fc public property
     */
    public $fc;

    /**
     * FlexVolume represents a generic volume resource that is provisioned/attached using an exec based plugin. This is an alpha feature and may change in future.
     * @var V1FlexVolumeSource|null $flexVolume public property
     */
    public $flexVolume;

    /**
     * Flocker represents a Flocker volume attached to a kubelet's host machine and exposed to the pod for its usage. This depends on the Flocker control service being running
     * @var V1FlockerVolumeSource|null $flocker public property
     */
    public $flocker;

    /**
     * GCEPersistentDisk represents a GCE Disk resource that is attached to a kubelet's host machine and then exposed to the pod. Provisioned by an admin. More info: http://kubernetes.io/docs/user-guide/volumes#gcepersistentdisk
     * @var V1GCEPersistentDiskVolumeSource|null $gcePersistentDisk public property
     */
    public $gcePersistentDisk;

    /**
     * Glusterfs represents a Glusterfs volume that is attached to a host and exposed to the pod. Provisioned by an admin. More info: http://releases.k8s.io/HEAD/examples/volumes/glusterfs/README.md
     * @var V1GlusterfsVolumeSource|null $glusterfs public property
     */
    public $glusterfs;

    /**
     * HostPath represents a directory on the host. Provisioned by a developer or tester. This is useful for single-node development and testing only! On-host storage is not supported in any way and WILL NOT WORK in a multi-node cluster. More info: http://kubernetes.io/docs/user-guide/volumes#hostpath
     * @var V1HostPathVolumeSource|null $hostPath public property
     */
    public $hostPath;

    /**
     * ISCSI represents an ISCSI Disk resource that is attached to a kubelet's host machine and then exposed to the pod. Provisioned by an admin.
     * @var V1ISCSIVolumeSource|null $iscsi public property
     */
    public $iscsi;

    /**
     * NFS represents an NFS mount on the host. Provisioned by an admin. More info: http://kubernetes.io/docs/user-guide/volumes#nfs
     * @var V1NFSVolumeSource|null $nfs public property
     */
    public $nfs;

    /**
     * What happens to a persistent volume when released from its claim. Valid options are Retain (default) and Recycle. Recycling must be supported by the volume plugin underlying this persistent volume. More info: http://kubernetes.io/docs/user-guide/persistent-volumes#recycling-policy
     * @var string|null $persistentVolumeReclaimPolicy public property
     */
    public $persistentVolumeReclaimPolicy;

    /**
     * PhotonPersistentDisk represents a PhotonController persistent disk attached and mounted on kubelets host machine
     * @var V1PhotonPersistentDiskVolumeSource|null $photonPersistentDisk public property
     */
    public $photonPersistentDisk;

    /**
     * PortworxVolume represents a portworx volume attached and mounted on kubelets host machine
     * @var V1CinderVolumeSource|null $portworxVolume public property
     */
    public $portworxVolume;

    /**
     * Quobyte represents a Quobyte mount on the host that shares a pod's lifetime
     * @var V1QuobyteVolumeSource|null $quobyte public property
     */
    public $quobyte;

    /**
     * RBD represents a Rados Block Device mount on the host that shares a pod's lifetime. More info: http://releases.k8s.io/HEAD/examples/volumes/rbd/README.md
     * @var V1RBDVolumeSource|null $rbd public property
     */
    public $rbd;

    /**
     * ScaleIO represents a ScaleIO persistent volume attached and mounted on Kubernetes nodes.
     * @var V1ScaleIOVolumeSource|null $scaleIO public property
     */
    public $scaleIO;

    /**
     * Name of StorageClass to which this persistent volume belongs. Empty value means that this volume does not belong to any StorageClass.
     * @var string|null $storageClassName public property
     */
    public $storageClassName;

    /**
     * VsphereVolume represents a vSphere volume attached and mounted on kubelets host machine
     * @var V1VsphereVirtualDiskVolumeSource|null $vsphereVolume public property
     */
    public $vsphereVolume;

    /**
     * Constructor to set initial or default values of member properties
     * @param array                              $accessModes                   Initialization value for $this-
     *                                                                            >accessModes
     * @param V1AWSElasticBlockStoreVolumeSource $awsElasticBlockStore          Initialization value for $this-
     *                                                                            >awsElasticBlockStore
     * @param V1AzureDiskVolumeSource            $azureDisk                     Initialization value for $this-
     *                                                                            >azureDisk
     * @param V1AzureFileVolumeSource            $azureFile                     Initialization value for $this-
     *                                                                            >azureFile
     * @param array                              $capacity                      Initialization value for $this-
     *                                                                            >capacity
     * @param V1CephFSVolumeSource               $cephfs                        Initialization value for $this-
     *                                                                            >cephfs
     * @param V1CinderVolumeSource               $cinder                        Initialization value for $this-
     *                                                                            >cinder
     * @param V1ObjectReference                  $claimRef                      Initialization value for $this-
     *                                                                            >claimRef
     * @param V1FCVolumeSource                   $fc                            Initialization value for $this->fc
     * @param V1FlexVolumeSource                 $flexVolume                    Initialization value for $this-
     *                                                                            >flexVolume
     * @param V1FlockerVolumeSource              $flocker                       Initialization value for $this-
     *                                                                            >flocker
     * @param V1GCEPersistentDiskVolumeSource    $gcePersistentDisk             Initialization value for $this-
     *                                                                            >gcePersistentDisk
     * @param V1GlusterfsVolumeSource            $glusterfs                     Initialization value for $this-
     *                                                                            >glusterfs
     * @param V1HostPathVolumeSource             $hostPath                      Initialization value for $this-
     *                                                                            >hostPath
     * @param V1ISCSIVolumeSource                $iscsi                         Initialization value for $this->iscsi
     * @param V1NFSVolumeSource                  $nfs                           Initialization value for $this->nfs
     * @param string                             $persistentVolumeReclaimPolicy Initialization value for $this-
     *                                                                            >persistentVolumeReclaimPolicy
     * @param V1PhotonPersistentDiskVolumeSource $photonPersistentDisk          Initialization value for $this-
     *                                                                            >photonPersistentDisk
     * @param V1CinderVolumeSource               $portworxVolume                Initialization value for $this-
     *                                                                            >portworxVolume
     * @param V1QuobyteVolumeSource              $quobyte                       Initialization value for $this-
     *                                                                            >quobyte
     * @param V1RBDVolumeSource                  $rbd                           Initialization value for $this->rbd
     * @param V1ScaleIOVolumeSource              $scaleIO                       Initialization value for $this-
     *                                                                            >scaleIO
     * @param string                             $storageClassName              Initialization value for $this-
     *                                                                            >storageClassName
     * @param V1VsphereVirtualDiskVolumeSource   $vsphereVolume                 Initialization value for $this-
     *                                                                            >vsphereVolume
     */
    public function __construct()
    {
        if (24 == func_num_args()) {
            $this->accessModes                   = func_get_arg(0);
            $this->awsElasticBlockStore          = func_get_arg(1);
            $this->azureDisk                     = func_get_arg(2);
            $this->azureFile                     = func_get_arg(3);
            $this->capacity                      = func_get_arg(4);
            $this->cephfs                        = func_get_arg(5);
            $this->cinder                        = func_get_arg(6);
            $this->claimRef                      = func_get_arg(7);
            $this->fc                            = func_get_arg(8);
            $this->flexVolume                    = func_get_arg(9);
            $this->flocker                       = func_get_arg(10);
            $this->gcePersistentDisk             = func_get_arg(11);
            $this->glusterfs                     = func_get_arg(12);
            $this->hostPath                      = func_get_arg(13);
            $this->iscsi                         = func_get_arg(14);
            $this->nfs                           = func_get_arg(15);
            $this->persistentVolumeReclaimPolicy = func_get_arg(16);
            $this->photonPersistentDisk          = func_get_arg(17);
            $this->portworxVolume                = func_get_arg(18);
            $this->quobyte                       = func_get_arg(19);
            $this->rbd                           = func_get_arg(20);
            $this->scaleIO                       = func_get_arg(21);
            $this->storageClassName              = func_get_arg(22);
            $this->vsphereVolume                 = func_get_arg(23);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['accessModes']                   = $this->accessModes;
        $json['awsElasticBlockStore']          = $this->awsElasticBlockStore;
        $json['azureDisk']                     = $this->azureDisk;
        $json['azureFile']                     = $this->azureFile;
        $json['capacity']                      = $this->capacity;
        $json['cephfs']                        = $this->cephfs;
        $json['cinder']                        = $this->cinder;
        $json['claimRef']                      = $this->claimRef;
        $json['fc']                            = $this->fc;
        $json['flexVolume']                    = $this->flexVolume;
        $json['flocker']                       = $this->flocker;
        $json['gcePersistentDisk']             = $this->gcePersistentDisk;
        $json['glusterfs']                     = $this->glusterfs;
        $json['hostPath']                      = $this->hostPath;
        $json['iscsi']                         = $this->iscsi;
        $json['nfs']                           = $this->nfs;
        $json['persistentVolumeReclaimPolicy'] = $this->persistentVolumeReclaimPolicy;
        $json['photonPersistentDisk']          = $this->photonPersistentDisk;
        $json['portworxVolume']                = $this->portworxVolume;
        $json['quobyte']                       = $this->quobyte;
        $json['rbd']                           = $this->rbd;
        $json['scaleIO']                       = $this->scaleIO;
        $json['storageClassName']              = $this->storageClassName;
        $json['vsphereVolume']                 = $this->vsphereVolume;

        return $json;
    }
}