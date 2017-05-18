<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * A single application container that you want to run within a pod.
 */
class V1Container implements JsonSerializable
{
    /**
     * Name of the container specified as a DNS_LABEL. Each container in a pod must have a unique name (DNS_LABEL). Cannot be updated.
     * @required
     * @var string $name public property
     */
    public $name;

    /**
     * Arguments to the entrypoint. The docker image's CMD is used if this is not provided. Variable references $(VAR_NAME) are expanded using the container's environment. If a variable cannot be resolved, the reference in the input string will be unchanged. The $(VAR_NAME) syntax can be escaped with a double $$, ie: $$(VAR_NAME). Escaped references will never be expanded, regardless of whether the variable exists or not. Cannot be updated. More info: http://kubernetes.io/docs/user-guide/containers#containers-and-commands
     * @var array|null $args public property
     */
    public $args;

    /**
     * Entrypoint array. Not executed within a shell. The docker image's ENTRYPOINT is used if this is not provided. Variable references $(VAR_NAME) are expanded using the container's environment. If a variable cannot be resolved, the reference in the input string will be unchanged. The $(VAR_NAME) syntax can be escaped with a double $$, ie: $$(VAR_NAME). Escaped references will never be expanded, regardless of whether the variable exists or not. Cannot be updated. More info: http://kubernetes.io/docs/user-guide/containers#containers-and-commands
     * @var array|null $command public property
     */
    public $command;

    /**
     * List of environment variables to set in the container. Cannot be updated.
     * @var V1EnvVar[]|null $env public property
     */
    public $env;

    /**
     * List of sources to populate environment variables in the container. The keys defined within a source must be a C_IDENTIFIER. All invalid keys will be reported as an event when the container is starting. When a key exists in multiple sources, the value associated with the last source will take precedence. Values defined by an Env with a duplicate key will take precedence. Cannot be updated.
     * @var V1EnvFromSource[]|null $envFrom public property
     */
    public $envFrom;

    /**
     * Docker image name. More info: http://kubernetes.io/docs/user-guide/images
     * @var string|null $image public property
     */
    public $image;

    /**
     * Image pull policy. One of Always, Never, IfNotPresent. Defaults to Always if :latest tag is specified, or IfNotPresent otherwise. Cannot be updated. More info: http://kubernetes.io/docs/user-guide/images#updating-images
     * @var string|null $imagePullPolicy public property
     */
    public $imagePullPolicy;

    /**
     * Actions that the management system should take in response to container lifecycle events. Cannot be updated.
     * @var V1Lifecycle|null $lifecycle public property
     */
    public $lifecycle;

    /**
     * Periodic probe of container liveness. Container will be restarted if the probe fails. Cannot be updated. More info: http://kubernetes.io/docs/user-guide/pod-states#container-probes
     * @var V1Probe|null $livenessProbe public property
     */
    public $livenessProbe;

    /**
     * List of ports to expose from the container. Exposing a port here gives the system additional information about the network connections a container uses, but is primarily informational. Not specifying a port here DOES NOT prevent that port from being exposed. Any port which is listening on the default "0.0.0.0" address inside a container will be accessible from the network. Cannot be updated.
     * @var V1ContainerPort[]|null $ports public property
     */
    public $ports;

    /**
     * Periodic probe of container service readiness. Container will be removed from service endpoints if the probe fails. Cannot be updated. More info: http://kubernetes.io/docs/user-guide/pod-states#container-probes
     * @var V1Probe|null $readinessProbe public property
     */
    public $readinessProbe;

    /**
     * Compute Resources required by this container. Cannot be updated. More info: http://kubernetes.io/docs/user-guide/persistent-volumes#resources
     * @var V1ResourceRequirements|null $resources public property
     */
    public $resources;

    /**
     * Security options the pod should run with. More info: http://releases.k8s.io/HEAD/docs/design/security_context.md
     * @var V1SecurityContext|null $securityContext public property
     */
    public $securityContext;

    /**
     * Whether this container should allocate a buffer for stdin in the container runtime. If this is not set, reads from stdin in the container will always result in EOF. Default is false.
     * @var bool|null $stdin public property
     */
    public $stdin;

    /**
     * Whether the container runtime should close the stdin channel after it has been opened by a single attach. When stdin is true the stdin stream will remain open across multiple attach sessions. If stdinOnce is set to true, stdin is opened on container start, is empty until the first client attaches to stdin, and then remains open and accepts data until the client disconnects, at which time stdin is closed and remains closed until the container is restarted. If this flag is false, a container processes that reads from stdin will never receive an EOF. Default is false
     * @var bool|null $stdinOnce public property
     */
    public $stdinOnce;

    /**
     * Optional: Path at which the file to which the container's termination message will be written is mounted into the container's filesystem. Message written is intended to be brief final status, such as an assertion failure message. Will be truncated by the node if greater than 4096 bytes. The total message length across all containers will be limited to 12kb. Defaults to /dev/termination-log. Cannot be updated.
     * @var string|null $terminationMessagePath public property
     */
    public $terminationMessagePath;

    /**
     * Indicate how the termination message should be populated. File will use the contents of terminationMessagePath to populate the container status message on both success and failure. FallbackToLogsOnError will use the last chunk of container log output if the termination message file is empty and the container exited with an error. The log output is limited to 2048 bytes or 80 lines, whichever is smaller. Defaults to File. Cannot be updated.
     * @var string|null $terminationMessagePolicy public property
     */
    public $terminationMessagePolicy;

    /**
     * Whether this container should allocate a TTY for itself, also requires 'stdin' to be true. Default is false.
     * @var bool|null $tty public property
     */
    public $tty;

    /**
     * Pod volumes to mount into the container's filesystem. Cannot be updated.
     * @var V1VolumeMount[]|null $volumeMounts public property
     */
    public $volumeMounts;

    /**
     * Container's working directory. If not specified, the container runtime's default will be used, which might be configured in the container image. Cannot be updated.
     * @var string|null $workingDir public property
     */
    public $workingDir;

    /**
     * Constructor to set initial or default values of member properties
     * @param string                 $name                     Initialization value for $this->name
     * @param array                  $args                     Initialization value for $this->args
     * @param array                  $command                  Initialization value for $this->command
     * @param array                  $env                      Initialization value for $this->env
     * @param array                  $envFrom                  Initialization value for $this->envFrom
     * @param string                 $image                    Initialization value for $this->image
     * @param string                 $imagePullPolicy          Initialization value for $this->imagePullPolicy
     * @param V1Lifecycle            $lifecycle                Initialization value for $this->lifecycle
     * @param V1Probe                $livenessProbe            Initialization value for $this->livenessProbe
     * @param array                  $ports                    Initialization value for $this->ports
     * @param V1Probe                $readinessProbe           Initialization value for $this->readinessProbe
     * @param V1ResourceRequirements $resources                Initialization value for $this->resources
     * @param V1SecurityContext      $securityContext          Initialization value for $this->securityContext
     * @param bool                   $stdin                    Initialization value for $this->stdin
     * @param bool                   $stdinOnce                Initialization value for $this->stdinOnce
     * @param string                 $terminationMessagePath   Initialization value for $this->terminationMessagePath
     * @param string                 $terminationMessagePolicy Initialization value for $this-
     *                                                           >terminationMessagePolicy
     * @param bool                   $tty                      Initialization value for $this->tty
     * @param array                  $volumeMounts             Initialization value for $this->volumeMounts
     * @param string                 $workingDir               Initialization value for $this->workingDir
     */
    public function __construct()
    {
        if (20 == func_num_args()) {
            $this->name                     = func_get_arg(0);
            $this->args                     = func_get_arg(1);
            $this->command                  = func_get_arg(2);
            $this->env                      = func_get_arg(3);
            $this->envFrom                  = func_get_arg(4);
            $this->image                    = func_get_arg(5);
            $this->imagePullPolicy          = func_get_arg(6);
            $this->lifecycle                = func_get_arg(7);
            $this->livenessProbe            = func_get_arg(8);
            $this->ports                    = func_get_arg(9);
            $this->readinessProbe           = func_get_arg(10);
            $this->resources                = func_get_arg(11);
            $this->securityContext          = func_get_arg(12);
            $this->stdin                    = func_get_arg(13);
            $this->stdinOnce                = func_get_arg(14);
            $this->terminationMessagePath   = func_get_arg(15);
            $this->terminationMessagePolicy = func_get_arg(16);
            $this->tty                      = func_get_arg(17);
            $this->volumeMounts             = func_get_arg(18);
            $this->workingDir               = func_get_arg(19);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['name']                     = $this->name;
        $json['args']                     = $this->args;
        $json['command']                  = $this->command;
        $json['env']                      = $this->env;
        $json['envFrom']                  = $this->envFrom;
        $json['image']                    = $this->image;
        $json['imagePullPolicy']          = $this->imagePullPolicy;
        $json['lifecycle']                = $this->lifecycle;
        $json['livenessProbe']            = $this->livenessProbe;
        $json['ports']                    = $this->ports;
        $json['readinessProbe']           = $this->readinessProbe;
        $json['resources']                = $this->resources;
        $json['securityContext']          = $this->securityContext;
        $json['stdin']                    = $this->stdin;
        $json['stdinOnce']                = $this->stdinOnce;
        $json['terminationMessagePath']   = $this->terminationMessagePath;
        $json['terminationMessagePolicy'] = $this->terminationMessagePolicy;
        $json['tty']                      = $this->tty;
        $json['volumeMounts']             = $this->volumeMounts;
        $json['workingDir']               = $this->workingDir;

        return $json;
    }
}