<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * PodPresetSpec is a description of a pod injection policy.
 */
class V1alpha1PodPresetSpec implements JsonSerializable
{
    /**
     * Env defines the collection of EnvVar to inject into containers.
     * @var V1EnvVar[]|null $env public property
     */
    public $env;

    /**
     * EnvFrom defines the collection of EnvFromSource to inject into containers.
     * @var V1EnvFromSource[]|null $envFrom public property
     */
    public $envFrom;

    /**
     * Selector is a label query over a set of resources, in this case pods. Required.
     * @var V1LabelSelector|null $selector public property
     */
    public $selector;

    /**
     * VolumeMounts defines the collection of VolumeMount to inject into containers.
     * @var V1VolumeMount[]|null $volumeMounts public property
     */
    public $volumeMounts;

    /**
     * Volumes defines the collection of Volume to inject into the pod.
     * @var V1Volume[]|null $volumes public property
     */
    public $volumes;

    /**
     * Constructor to set initial or default values of member properties
     * @param array           $env          Initialization value for $this->env
     * @param array           $envFrom      Initialization value for $this->envFrom
     * @param V1LabelSelector $selector     Initialization value for $this->selector
     * @param array           $volumeMounts Initialization value for $this->volumeMounts
     * @param array           $volumes      Initialization value for $this->volumes
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->env          = func_get_arg(0);
            $this->envFrom      = func_get_arg(1);
            $this->selector     = func_get_arg(2);
            $this->volumeMounts = func_get_arg(3);
            $this->volumes      = func_get_arg(4);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['env']          = $this->env;
        $json['envFrom']      = $this->envFrom;
        $json['selector']     = $this->selector;
        $json['volumeMounts'] = $this->volumeMounts;
        $json['volumes']      = $this->volumes;

        return $json;
    }
}