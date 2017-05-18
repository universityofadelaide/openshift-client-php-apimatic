<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * SourceBuildStrategy defines input parameters specific to an Source build.
 */
class V1SourceBuildStrategy implements JsonSerializable
{
    /**
     * from is reference to an DockerImage, ImageStreamTag, or ImageStreamImage from which the docker image should be pulled
     * @required
     * @var V1ObjectReference $from public property
     */
    public $from;

    /**
     * env contains additional environment variables you want to pass into a builder container. ValueFrom is not supported.
     * @var V1EnvVar[]|null $env public property
     */
    public $env;

    /**
     * forcePull describes if the builder should pull the images from registry prior to building.
     * @var bool|null $forcePull public property
     */
    public $forcePull;

    /**
     * incremental flag forces the Source build to do incremental builds if true.
     * @var bool|null $incremental public property
     */
    public $incremental;

    /**
     * pullSecret is the name of a Secret that would be used for setting up the authentication for pulling the Docker images from the private Docker registries
     * @var V1LocalObjectReference|null $pullSecret public property
     */
    public $pullSecret;

    /**
     * runtimeArtifacts specifies a list of source/destination pairs that will be copied from the builder to the runtime image. sourcePath can be a file or directory. destinationDir must be a directory. destinationDir can also be empty or equal to ".", in this case it just refers to the root of WORKDIR. Deprecated: This feature will be removed in a future release. Use ImageSource to copy binary artifacts created from one build into a separate runtime image.
     * @var V1ImageSourcePath[]|null $runtimeArtifacts public property
     */
    public $runtimeArtifacts;

    /**
     * runtimeImage is an optional image that is used to run an application without unneeded dependencies installed. The building of the application is still done in the builder image but, post build, you can copy the needed artifacts in the runtime image for use. Deprecated: This feature will be removed in a future release. Use ImageSource to copy binary artifacts created from one build into a separate runtime image.
     * @var V1ObjectReference|null $runtimeImage public property
     */
    public $runtimeImage;

    /**
     * scripts is the location of Source scripts
     * @var string|null $scripts public property
     */
    public $scripts;

    /**
     * Constructor to set initial or default values of member properties
     * @param V1ObjectReference      $from             Initialization value for $this->from
     * @param array                  $env              Initialization value for $this->env
     * @param bool                   $forcePull        Initialization value for $this->forcePull
     * @param bool                   $incremental      Initialization value for $this->incremental
     * @param V1LocalObjectReference $pullSecret       Initialization value for $this->pullSecret
     * @param array                  $runtimeArtifacts Initialization value for $this->runtimeArtifacts
     * @param V1ObjectReference      $runtimeImage     Initialization value for $this->runtimeImage
     * @param string                 $scripts          Initialization value for $this->scripts
     */
    public function __construct()
    {
        if (8 == func_num_args()) {
            $this->from             = func_get_arg(0);
            $this->env              = func_get_arg(1);
            $this->forcePull        = func_get_arg(2);
            $this->incremental      = func_get_arg(3);
            $this->pullSecret       = func_get_arg(4);
            $this->runtimeArtifacts = func_get_arg(5);
            $this->runtimeImage     = func_get_arg(6);
            $this->scripts          = func_get_arg(7);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['from']             = $this->from;
        $json['env']              = $this->env;
        $json['forcePull']        = $this->forcePull;
        $json['incremental']      = $this->incremental;
        $json['pullSecret']       = $this->pullSecret;
        $json['runtimeArtifacts'] = $this->runtimeArtifacts;
        $json['runtimeImage']     = $this->runtimeImage;
        $json['scripts']          = $this->scripts;

        return $json;
    }
}