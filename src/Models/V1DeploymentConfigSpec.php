<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * DeploymentConfigSpec represents the desired state of the deployment.
 */
class V1DeploymentConfigSpec implements JsonSerializable
{
    /**
     * Replicas is the number of desired replicas.
     * @required
     * @var integer $replicas public property
     */
    public $replicas;

    /**
     * Strategy describes how a deployment is executed.
     * @required
     * @var V1DeploymentStrategy $strategy public property
     */
    public $strategy;

    /**
     * Test ensures that this deployment config will have zero replicas except while a deployment is running. This allows the deployment config to be used as a continuous deployment test - triggering on images, running the deployment, and then succeeding or failing. Post strategy hooks and After actions can be used to integrate successful deployment with an action.
     * @required
     * @var bool $test public property
     */
    public $test;

    /**
     * Triggers determine how updates to a DeploymentConfig result in new deployments. If no triggers are defined, a new deployment can only occur as a result of an explicit client update to the DeploymentConfig with a new LatestVersion. If null, defaults to having a config change trigger.
     * @required
     * @var V1DeploymentTriggerPolicy[] $triggers public property
     */
    public $triggers;

    /**
     * MinReadySeconds is the minimum number of seconds for which a newly created pod should be ready without any of its container crashing, for it to be considered available. Defaults to 0 (pod will be considered available as soon as it is ready)
     * @var integer|null $minReadySeconds public property
     */
    public $minReadySeconds;

    /**
     * Paused indicates that the deployment config is paused resulting in no new deployments on template changes or changes in the template caused by other triggers.
     * @var bool|null $paused public property
     */
    public $paused;

    /**
     * RevisionHistoryLimit is the number of old ReplicationControllers to retain to allow for rollbacks. This field is a pointer to allow for differentiation between an explicit zero and not specified.
     * @var integer|null $revisionHistoryLimit public property
     */
    public $revisionHistoryLimit;

    /**
     * Selector is a label query over pods that should match the Replicas count.
     * @var array|null $selector public property
     */
    public $selector;

    /**
     * Template is the object that describes the pod that will be created if insufficient replicas are detected.
     * @var V1PodTemplateSpec|null $template public property
     */
    public $template;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer              $replicas             Initialization value for $this->replicas
     * @param V1DeploymentStrategy $strategy             Initialization value for $this->strategy
     * @param bool                 $test                 Initialization value for $this->test
     * @param array                $triggers             Initialization value for $this->triggers
     * @param integer              $minReadySeconds      Initialization value for $this->minReadySeconds
     * @param bool                 $paused               Initialization value for $this->paused
     * @param integer              $revisionHistoryLimit Initialization value for $this->revisionHistoryLimit
     * @param array                $selector             Initialization value for $this->selector
     * @param V1PodTemplateSpec    $template             Initialization value for $this->template
     */
    public function __construct()
    {
        if (9 == func_num_args()) {
            $this->replicas             = func_get_arg(0);
            $this->strategy             = func_get_arg(1);
            $this->test                 = func_get_arg(2);
            $this->triggers             = func_get_arg(3);
            $this->minReadySeconds      = func_get_arg(4);
            $this->paused               = func_get_arg(5);
            $this->revisionHistoryLimit = func_get_arg(6);
            $this->selector             = func_get_arg(7);
            $this->template             = func_get_arg(8);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['replicas']             = $this->replicas;
        $json['strategy']             = $this->strategy;
        $json['test']                 = $this->test;
        $json['triggers']             = $this->triggers;
        $json['minReadySeconds']      = $this->minReadySeconds;
        $json['paused']               = $this->paused;
        $json['revisionHistoryLimit'] = $this->revisionHistoryLimit;
        $json['selector']             = $this->selector;
        $json['template']             = $this->template;

        return $json;
    }
}
