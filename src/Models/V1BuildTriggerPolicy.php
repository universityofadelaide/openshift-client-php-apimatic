<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * BuildTriggerPolicy describes a policy for a single trigger that results in a new Build.
 */
class V1BuildTriggerPolicy implements JsonSerializable
{
    /**
     * type is the type of build trigger
     * @required
     * @var string $type public property
     */
    public $type;

    /**
     * BitbucketWebHook contains the parameters for a Bitbucket webhook type of trigger
     * @var V1WebHookTrigger|null $bitbucket public property
     */
    public $bitbucket;

    /**
     * generic contains the parameters for a Generic webhook type of trigger
     * @var V1WebHookTrigger|null $generic public property
     */
    public $generic;

    /**
     * github contains the parameters for a GitHub webhook type of trigger
     * @var V1WebHookTrigger|null $github public property
     */
    public $github;

    /**
     * GitLabWebHook contains the parameters for a GitLab webhook type of trigger
     * @var V1WebHookTrigger|null $gitlab public property
     */
    public $gitlab;

    /**
     * imageChange contains parameters for an ImageChange type of trigger
     * @var V1ImageChangeTrigger|null $imageChange public property
     */
    public $imageChange;

    /**
     * Constructor to set initial or default values of member properties
     * @param string               $type        Initialization value for $this->type
     * @param V1WebHookTrigger     $bitbucket   Initialization value for $this->bitbucket
     * @param V1WebHookTrigger     $generic     Initialization value for $this->generic
     * @param V1WebHookTrigger     $github      Initialization value for $this->github
     * @param V1WebHookTrigger     $gitlab      Initialization value for $this->gitlab
     * @param V1ImageChangeTrigger $imageChange Initialization value for $this->imageChange
     */
    public function __construct()
    {
        if (6 == func_num_args()) {
            $this->type        = func_get_arg(0);
            $this->bitbucket   = func_get_arg(1);
            $this->generic     = func_get_arg(2);
            $this->github      = func_get_arg(3);
            $this->gitlab      = func_get_arg(4);
            $this->imageChange = func_get_arg(5);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['type']        = $this->type;
        $json['bitbucket']   = $this->bitbucket;
        $json['generic']     = $this->generic;
        $json['github']      = $this->github;
        $json['gitlab']      = $this->gitlab;
        $json['imageChange'] = $this->imageChange;

        return $json;
    }
}
