<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * NodeSystemInfo is a set of ids/uuids to uniquely identify the node.
 */
class V1NodeSystemInfo implements JsonSerializable
{
    /**
     * The Architecture reported by the node
     * @required
     * @var string $architecture public property
     */
    public $architecture;

    /**
     * Boot ID reported by the node.
     * @required
     * @var string $bootID public property
     */
    public $bootID;

    /**
     * ContainerRuntime Version reported by the node through runtime remote API (e.g. docker://1.5.0).
     * @required
     * @var string $containerRuntimeVersion public property
     */
    public $containerRuntimeVersion;

    /**
     * Kernel Version reported by the node from 'uname -r' (e.g. 3.16.0-0.bpo.4-amd64).
     * @required
     * @var string $kernelVersion public property
     */
    public $kernelVersion;

    /**
     * KubeProxy Version reported by the node.
     * @required
     * @var string $kubeProxyVersion public property
     */
    public $kubeProxyVersion;

    /**
     * Kubelet Version reported by the node.
     * @required
     * @var string $kubeletVersion public property
     */
    public $kubeletVersion;

    /**
     * MachineID reported by the node. For unique machine identification in the cluster this field is prefered. Learn more from man(5) machine-id: http://man7.org/linux/man-pages/man5/machine-id.5.html
     * @required
     * @var string $machineID public property
     */
    public $machineID;

    /**
     * The Operating System reported by the node
     * @required
     * @var string $operatingSystem public property
     */
    public $operatingSystem;

    /**
     * OS Image reported by the node from /etc/os-release (e.g. Debian GNU/Linux 7 (wheezy)).
     * @required
     * @var string $osImage public property
     */
    public $osImage;

    /**
     * SystemUUID reported by the node. For unique machine identification MachineID is prefered. This field is specific to Red Hat hosts https://access.redhat.com/documentation/en-US/Red_Hat_Subscription_Management/1/html/RHSM/getting-system-uuid.html
     * @required
     * @var string $systemUUID public property
     */
    public $systemUUID;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $architecture            Initialization value for $this->architecture
     * @param string $bootID                  Initialization value for $this->bootID
     * @param string $containerRuntimeVersion Initialization value for $this->containerRuntimeVersion
     * @param string $kernelVersion           Initialization value for $this->kernelVersion
     * @param string $kubeProxyVersion        Initialization value for $this->kubeProxyVersion
     * @param string $kubeletVersion          Initialization value for $this->kubeletVersion
     * @param string $machineID               Initialization value for $this->machineID
     * @param string $operatingSystem         Initialization value for $this->operatingSystem
     * @param string $osImage                 Initialization value for $this->osImage
     * @param string $systemUUID              Initialization value for $this->systemUUID
     */
    public function __construct()
    {
        if (10 == func_num_args()) {
            $this->architecture            = func_get_arg(0);
            $this->bootID                  = func_get_arg(1);
            $this->containerRuntimeVersion = func_get_arg(2);
            $this->kernelVersion           = func_get_arg(3);
            $this->kubeProxyVersion        = func_get_arg(4);
            $this->kubeletVersion          = func_get_arg(5);
            $this->machineID               = func_get_arg(6);
            $this->operatingSystem         = func_get_arg(7);
            $this->osImage                 = func_get_arg(8);
            $this->systemUUID              = func_get_arg(9);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['architecture']            = $this->architecture;
        $json['bootID']                  = $this->bootID;
        $json['containerRuntimeVersion'] = $this->containerRuntimeVersion;
        $json['kernelVersion']           = $this->kernelVersion;
        $json['kubeProxyVersion']        = $this->kubeProxyVersion;
        $json['kubeletVersion']          = $this->kubeletVersion;
        $json['machineID']               = $this->machineID;
        $json['operatingSystem']         = $this->operatingSystem;
        $json['osImage']                 = $this->osImage;
        $json['systemUUID']              = $this->systemUUID;

        return $json;
    }
}