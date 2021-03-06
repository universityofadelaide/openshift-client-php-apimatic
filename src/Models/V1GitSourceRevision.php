<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * GitSourceRevision is the commit information from a git source for a build
 */
class V1GitSourceRevision implements JsonSerializable
{
    /**
     * author is the author of a specific commit
     * @var V1SourceControlUser|null $author public property
     */
    public $author;

    /**
     * commit is the commit hash identifying a specific commit
     * @var string|null $commit public property
     */
    public $commit;

    /**
     * committer is the committer of a specific commit
     * @var V1SourceControlUser|null $committer public property
     */
    public $committer;

    /**
     * message is the description of a specific commit
     * @var string|null $message public property
     */
    public $message;

    /**
     * Constructor to set initial or default values of member properties
     * @param V1SourceControlUser $author    Initialization value for $this->author
     * @param string              $commit    Initialization value for $this->commit
     * @param V1SourceControlUser $committer Initialization value for $this->committer
     * @param string              $message   Initialization value for $this->message
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->author    = func_get_arg(0);
            $this->commit    = func_get_arg(1);
            $this->committer = func_get_arg(2);
            $this->message   = func_get_arg(3);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['author']    = $this->author;
        $json['commit']    = $this->commit;
        $json['committer'] = $this->committer;
        $json['message']   = $this->message;

        return $json;
    }
}
