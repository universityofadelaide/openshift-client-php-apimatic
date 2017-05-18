<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * BuildStrategy contains the details of how to perform a build.
 */
class V1BuildStrategy implements JsonSerializable
{
    /**
     * type is the kind of build strategy.
     * @required
     * @var string $type public property
     */
    public $type;

    /**
     * customStrategy holds the parameters to the Custom build strategy
     * @var V1CustomBuildStrategy|null $customStrategy public property
     */
    public $customStrategy;

    /**
     * dockerStrategy holds the parameters to the Docker build strategy.
     * @var V1DockerBuildStrategy|null $dockerStrategy public property
     */
    public $dockerStrategy;

    /**
     * JenkinsPipelineStrategy holds the parameters to the Jenkins Pipeline build strategy. This strategy is in tech preview.
     * @var V1JenkinsPipelineBuildStrategy|null $jenkinsPipelineStrategy public property
     */
    public $jenkinsPipelineStrategy;

    /**
     * sourceStrategy holds the parameters to the Source build strategy.
     * @var V1SourceBuildStrategy|null $sourceStrategy public property
     */
    public $sourceStrategy;

    /**
     * Constructor to set initial or default values of member properties
     * @param string                         $type                    Initialization value for $this->type
     * @param V1CustomBuildStrategy          $customStrategy          Initialization value for $this->customStrategy
     * @param V1DockerBuildStrategy          $dockerStrategy          Initialization value for $this->dockerStrategy
     * @param V1JenkinsPipelineBuildStrategy $jenkinsPipelineStrategy Initialization value for $this-
     *                                                                  >jenkinsPipelineStrategy
     * @param V1SourceBuildStrategy          $sourceStrategy          Initialization value for $this->sourceStrategy
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->type                    = func_get_arg(0);
            $this->customStrategy          = func_get_arg(1);
            $this->dockerStrategy          = func_get_arg(2);
            $this->jenkinsPipelineStrategy = func_get_arg(3);
            $this->sourceStrategy          = func_get_arg(4);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['type']                    = $this->type;
        $json['customStrategy']          = $this->customStrategy;
        $json['dockerStrategy']          = $this->dockerStrategy;
        $json['jenkinsPipelineStrategy'] = $this->jenkinsPipelineStrategy;
        $json['sourceStrategy']          = $this->sourceStrategy;

        return $json;
    }
}