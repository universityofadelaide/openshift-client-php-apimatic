<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * RepositoryImportSpec describes a request to import images from a Docker image repository.
 */
class V1RepositoryImportSpec implements JsonSerializable
{
    /**
     * From is the source for the image repository to import; only kind DockerImage and a name of a Docker image repository is allowed
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
     * Constructor to set initial or default values of member properties
     * @param V1ObjectReference    $from            Initialization value for $this->from
     * @param V1TagImportPolicy    $importPolicy    Initialization value for $this->importPolicy
     * @param bool                 $includeManifest Initialization value for $this->includeManifest
     * @param V1TagReferencePolicy $referencePolicy Initialization value for $this->referencePolicy
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->from            = func_get_arg(0);
            $this->importPolicy    = func_get_arg(1);
            $this->includeManifest = func_get_arg(2);
            $this->referencePolicy = func_get_arg(3);
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

        return $json;
    }
}
