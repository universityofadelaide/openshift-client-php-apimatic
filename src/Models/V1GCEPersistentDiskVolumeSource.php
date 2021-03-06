<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * Represents a Persistent Disk resource in Google Compute Engine.
 *
 * A GCE PD must exist before mounting to a container. The disk must also be in the same GCE project
 * and zone as the kubelet. A GCE PD can only be mounted as read/write once or read-only many times.
 * GCE PDs support ownership management and SELinux relabeling.
 */
class V1GCEPersistentDiskVolumeSource implements JsonSerializable
{
    /**
     * Unique name of the PD resource in GCE. Used to identify the disk in GCE. More info: http://kubernetes.io/docs/user-guide/volumes#gcepersistentdisk
     * @required
     * @var string $pdName public property
     */
    public $pdName;

    /**
     * Filesystem type of the volume that you want to mount. Tip: Ensure that the filesystem type is supported by the host operating system. Examples: "ext4", "xfs", "ntfs". Implicitly inferred to be "ext4" if unspecified. More info: http://kubernetes.io/docs/user-guide/volumes#gcepersistentdisk
     * @var string|null $fsType public property
     */
    public $fsType;

    /**
     * The partition in the volume that you want to mount. If omitted, the default is to mount by volume name. Examples: For volume /dev/sda1, you specify the partition as "1". Similarly, the volume partition for /dev/sda is "0" (or you can leave the property empty). More info: http://kubernetes.io/docs/user-guide/volumes#gcepersistentdisk
     * @var integer|null $partition public property
     */
    public $partition;

    /**
     * ReadOnly here will force the ReadOnly setting in VolumeMounts. Defaults to false. More info: http://kubernetes.io/docs/user-guide/volumes#gcepersistentdisk
     * @var bool|null $readOnly public property
     */
    public $readOnly;

    /**
     * Constructor to set initial or default values of member properties
     * @param string  $pdName    Initialization value for $this->pdName
     * @param string  $fsType    Initialization value for $this->fsType
     * @param integer $partition Initialization value for $this->partition
     * @param bool    $readOnly  Initialization value for $this->readOnly
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->pdName    = func_get_arg(0);
            $this->fsType    = func_get_arg(1);
            $this->partition = func_get_arg(2);
            $this->readOnly  = func_get_arg(3);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['pdName']    = $this->pdName;
        $json['fsType']    = $this->fsType;
        $json['partition'] = $this->partition;
        $json['readOnly']  = $this->readOnly;

        return $json;
    }
}
