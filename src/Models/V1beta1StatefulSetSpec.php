<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * A StatefulSetSpec is the specification of a StatefulSet.
 */
class V1beta1StatefulSetSpec implements JsonSerializable
{
    /**
     * ServiceName is the name of the service that governs this StatefulSet. This service must exist before the StatefulSet, and is responsible for the network identity of the set. Pods get DNS/hostnames that follow the pattern: pod-specific-string.serviceName.default.svc.cluster.local where "pod-specific-string" is managed by the StatefulSet controller.
     * @required
     * @var string $serviceName public property
     */
    public $serviceName;

    /**
     * Template is the object that describes the pod that will be created if insufficient replicas are detected. Each pod stamped out by the StatefulSet will fulfill this Template, but have a unique identity from the rest of the StatefulSet.
     * @required
     * @var V1PodTemplateSpec $template public property
     */
    public $template;

    /**
     * Replicas is the desired number of replicas of the given Template. These are replicas in the sense that they are instantiations of the same Template, but individual replicas also have a consistent identity. If unspecified, defaults to 1.
     * @var integer|null $replicas public property
     */
    public $replicas;

    /**
     * Selector is a label query over pods that should match the replica count. If empty, defaulted to labels on the pod template. More info: http://kubernetes.io/docs/user-guide/labels#label-selectors
     * @var V1LabelSelector|null $selector public property
     */
    public $selector;

    /**
     * VolumeClaimTemplates is a list of claims that pods are allowed to reference. The StatefulSet controller is responsible for mapping network identities to claims in a way that maintains the identity of a pod. Every claim in this list must have at least one matching (by name) volumeMount in one container in the template. A claim in this list takes precedence over any volumes in the template, with the same name.
     * @var V1PersistentVolumeClaim[]|null $volumeClaimTemplates public property
     */
    public $volumeClaimTemplates;

    /**
     * Constructor to set initial or default values of member properties
     * @param string            $serviceName          Initialization value for $this->serviceName
     * @param V1PodTemplateSpec $template             Initialization value for $this->template
     * @param integer           $replicas             Initialization value for $this->replicas
     * @param V1LabelSelector   $selector             Initialization value for $this->selector
     * @param array             $volumeClaimTemplates Initialization value for $this->volumeClaimTemplates
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->serviceName          = func_get_arg(0);
            $this->template             = func_get_arg(1);
            $this->replicas             = func_get_arg(2);
            $this->selector             = func_get_arg(3);
            $this->volumeClaimTemplates = func_get_arg(4);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['serviceName']          = $this->serviceName;
        $json['template']             = $this->template;
        $json['replicas']             = $this->replicas;
        $json['selector']             = $this->selector;
        $json['volumeClaimTemplates'] = $this->volumeClaimTemplates;

        return $json;
    }
}
