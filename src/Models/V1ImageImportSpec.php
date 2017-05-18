<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * ImageImportSpec describes a request to import a specific image.
 */
class V1ImageImportSpec implements JsonSerializable
{
    /**
     * From is the source of an image to import; only kind DockerImage is allowed
     * @required
     * @var V1ObjectReference $from public property
     */
    public $from;

    /**
     * ImportPolicy is the policy controlling how the image is imported
     * @var V1TagImportPolicy|null $importPolicy public property
     */
    public $importPolicy;

    /**
     * IncludeManifest determines if the manifest for each image is returned in the response
     * @var bool|null $includeManifest public property
     */
    public $includeManifest;

    /**
     * ReferencePolicy defines how other components should consume the image
     * @var V1TagReferencePolicy|null $referencePolicy public property
     */
    public $referencePolicy;

    /**
     * To is a tag in the current image stream to assign the imported image to, if name is not specified the default tag from from.name will be used
     * @var V1LocalObjectReference|null $to public property
     */
    public $to;

    /**
     * Constructor to set initial or default values of member properties
     * @param V1ObjectReference      $from            Initialization value for $this->from
     * @param V1TagImportPolicy      $importPolicy    Initialization value for $this->importPolicy
     * @param bool                   $includeManifest Initialization value for $this->includeManifest
     * @param V1TagReferencePolicy   $referencePolicy Initialization value for $this->referencePolicy
     * @param V1LocalObjectReference $to              Initialization value for $this->to
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->from            = func_get_arg(0);
            $this->importPolicy    = func_get_arg(1);
            $this->includeManifest = func_get_arg(2);
            $this->referencePolicy = func_get_arg(3);
            $this->to              = func_get_arg(4);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['from']            = $this->from;
        $json['importPolicy']    = $this->importPolicy;
        $json['includeManifest'] = $this->includeManifest;
        $json['referencePolicy'] = $this->referencePolicy;
        $json['to']              = $this->to;

        return $json;
    }
}