<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * BuildConfigSpec describes when and how builds are created
 */
class V1BuildConfigSpec implements JsonSerializable
{
    /**
     * nodeSelector is a selector which must be true for the build pod to fit on a node If nil, it can be overridden by default build nodeselector values for the cluster. If set to an empty map or a map with any values, default build nodeselector values are ignored.
     * @required
     * @var array $nodeSelector public property
     */
    public $nodeSelector;

    /**
     * strategy defines how to perform a build.
     * @required
     * @var V1BuildStrategy $strategy public property
     */
    public $strategy;

    /**
     * triggers determine how new Builds can be launched from a BuildConfig. If no triggers are defined, a new build can only occur as a result of an explicit client build creation.
     * @required
     * @var V1BuildTriggerPolicy[] $triggers public property
     */
    public $triggers;

    /**
     * completionDeadlineSeconds is an optional duration in seconds, counted from the time when a build pod gets scheduled in the system, that the build may be active on a node before the system actively tries to terminate the build; value must be positive integer
     * @var integer|null $completionDeadlineSeconds public property
     */
    public $completionDeadlineSeconds;

    /**
     * output describes the Docker image the Strategy should produce.
     * @var V1BuildOutput|null $output public property
     */
    public $output;

    /**
     * postCommit is a build hook executed after the build output image is committed, before it is pushed to a registry.
     * @var V1BuildPostCommitSpec|null $postCommit public property
     */
    public $postCommit;

    /**
     * resources computes resource requirements to execute the build.
     * @var V1ResourceRequirements|null $resources public property
     */
    public $resources;

    /**
     * revision is the information from the source for a specific repo snapshot. This is optional.
     * @var V1SourceRevision|null $revision public property
     */
    public $revision;

    /**
     * RunPolicy describes how the new build created from this build configuration will be scheduled for execution. This is optional, if not specified we default to "Serial".
     * @var string|null $runPolicy public property
     */
    public $runPolicy;

    /**
     * serviceAccount is the name of the ServiceAccount to use to run the pod created by this build. The pod will be allowed to use secrets referenced by the ServiceAccount
     * @var string|null $serviceAccount public property
     */
    public $serviceAccount;

    /**
     * source describes the SCM in use.
     * @var V1BuildSource|null $source public property
     */
    public $source;

    /**
     * Constructor to set initial or default values of member properties
     * @param array                  $nodeSelector              Initialization value for $this->nodeSelector
     * @param V1BuildStrategy        $strategy                  Initialization value for $this->strategy
     * @param array                  $triggers                  Initialization value for $this->triggers
     * @param integer                $completionDeadlineSeconds Initialization value for $this-
     *                                                            >completionDeadlineSeconds
     * @param V1BuildOutput          $output                    Initialization value for $this->output
     * @param V1BuildPostCommitSpec  $postCommit                Initialization value for $this->postCommit
     * @param V1ResourceRequirements $resources                 Initialization value for $this->resources
     * @param V1SourceRevision       $revision                  Initialization value for $this->revision
     * @param string                 $runPolicy                 Initialization value for $this->runPolicy
     * @param string                 $serviceAccount            Initialization value for $this->serviceAccount
     * @param V1BuildSource          $source                    Initialization value for $this->source
     */
    public function __construct()
    {
        if (11 == func_num_args()) {
            $this->nodeSelector              = func_get_arg(0);
            $this->strategy                  = func_get_arg(1);
            $this->triggers                  = func_get_arg(2);
            $this->completionDeadlineSeconds = func_get_arg(3);
            $this->output                    = func_get_arg(4);
            $this->postCommit                = func_get_arg(5);
            $this->resources                 = func_get_arg(6);
            $this->revision                  = func_get_arg(7);
            $this->runPolicy                 = func_get_arg(8);
            $this->serviceAccount            = func_get_arg(9);
            $this->source                    = func_get_arg(10);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['nodeSelector']              = $this->nodeSelector;
        $json['strategy']                  = $this->strategy;
        $json['triggers']                  = $this->triggers;
        $json['completionDeadlineSeconds'] = $this->completionDeadlineSeconds;
        $json['output']                    = $this->output;
        $json['postCommit']                = $this->postCommit;
        $json['resources']                 = $this->resources;
        $json['revision']                  = $this->revision;
        $json['runPolicy']                 = $this->runPolicy;
        $json['serviceAccount']            = $this->serviceAccount;
        $json['source']                    = $this->source;

        return $json;
    }
}
