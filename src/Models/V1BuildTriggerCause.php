<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * BuildTriggerCause holds information about a triggered build. It is used for displaying build trigger
 * data for each build and build configuration in oc describe. It is also used to describe which
 * triggers led to the most recent update in the build configuration.
 */
class V1BuildTriggerCause implements JsonSerializable
{
    /**
     * BitbucketWebHook represents data for a Bitbucket webhook that fired a specific build.
     * @var V1BitbucketWebHookCause|null $bitbucketWebHook public property
     */
    public $bitbucketWebHook;

    /**
     * genericWebHook holds data about a builds generic webhook trigger.
     * @var V1BitbucketWebHookCause|null $genericWebHook public property
     */
    public $genericWebHook;

    /**
     * gitHubWebHook represents data for a GitHub webhook that fired a specific build.
     * @var V1BitbucketWebHookCause|null $githubWebHook public property
     */
    public $githubWebHook;

    /**
     * GitLabWebHook represents data for a GitLab webhook that fired a specific build.
     * @var V1BitbucketWebHookCause|null $gitlabWebHook public property
     */
    public $gitlabWebHook;

    /**
     * imageChangeBuild stores information about an imagechange event that triggered a new build.
     * @var V1ImageChangeCause|null $imageChangeBuild public property
     */
    public $imageChangeBuild;

    /**
     * message is used to store a human readable message for why the build was triggered. E.g.: "Manually triggered by user", "Configuration change",etc.
     * @var string|null $message public property
     */
    public $message;

    /**
     * Constructor to set initial or default values of member properties
     * @param V1BitbucketWebHookCause $bitbucketWebHook Initialization value for $this->bitbucketWebHook
     * @param V1BitbucketWebHookCause $genericWebHook   Initialization value for $this->genericWebHook
     * @param V1BitbucketWebHookCause $githubWebHook    Initialization value for $this->githubWebHook
     * @param V1BitbucketWebHookCause $gitlabWebHook    Initialization value for $this->gitlabWebHook
     * @param V1ImageChangeCause      $imageChangeBuild Initialization value for $this->imageChangeBuild
     * @param string                  $message          Initialization value for $this->message
     */
    public function __construct()
    {
        if (6 == func_num_args()) {
            $this->bitbucketWebHook = func_get_arg(0);
            $this->genericWebHook   = func_get_arg(1);
            $this->githubWebHook    = func_get_arg(2);
            $this->gitlabWebHook    = func_get_arg(3);
            $this->imageChangeBuild = func_get_arg(4);
            $this->message          = func_get_arg(5);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['bitbucketWebHook'] = $this->bitbucketWebHook;
        $json['genericWebHook']   = $this->genericWebHook;
        $json['githubWebHook']    = $this->githubWebHook;
        $json['gitlabWebHook']    = $this->gitlabWebHook;
        $json['imageChangeBuild'] = $this->imageChangeBuild;
        $json['message']          = $this->message;

        return $json;
    }
}
