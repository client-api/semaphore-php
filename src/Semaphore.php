<?php

namespace ClientAPI\Semaphore;

use ClientAPI\Semaphore\Api\AuthenticationApi;
use ClientAPI\Semaphore\Api\DefaultApi;
use ClientAPI\Semaphore\Api\IntegrationApi;
use ClientAPI\Semaphore\Api\ProjectApi;
use ClientAPI\Semaphore\Api\ProjectsApi;
use ClientAPI\Semaphore\Api\ScheduleApi;
use ClientAPI\Semaphore\Api\UserApi;


class Semaphore
{
    protected ?AuthenticationApi $authentication = null;
    protected ?DefaultApi $default = null;
    protected ?IntegrationApi $integration = null;
    protected ?ProjectApi $project = null;
    protected ?ProjectsApi $projects = null;
    protected ?ScheduleApi $schedule = null;
    protected ?UserApi $user = null;

    public function __construct(string $host, string $apiKey, bool $debug = false)
    {
        $this->config()->setHost($host);
        $this->config()->setApiKey('Authorization', \sprintf('Bearer %s', $apiKey));
        $this->config()->setDebug($debug);
    }

    public function config(): Configuration
    {
        return Configuration::getDefaultConfiguration();
    }

    public function authentication(): AuthenticationApi
    {
        if (is_null($this->authentication)) {
            $this->authentication = new AuthenticationApi(
                config: $this->config()
            );
        }

        return $this->authentication;
    }

    public function default(): DefaultApi
    {
        if (is_null($this->default)) {
            $this->default = new DefaultApi(
                config: $this->config()
            );
        }

        return $this->default;
    }

    public function integration(): IntegrationApi
    {
        if (is_null($this->integration)) {
            $this->integration = new IntegrationApi(
                config: $this->config()
            );
        }

        return $this->integration;
    }

    public function project(): ProjectApi
    {
        if (is_null($this->project)) {
            $this->project = new ProjectApi(
                config: $this->config()
            );
        }

        return $this->project;
    }

    public function projects(): ProjectsApi
    {
        if (is_null($this->projects)) {
            $this->projects = new ProjectsApi(
                config: $this->config()
            );
        }

        return $this->projects;
    }

    public function schedule(): ScheduleApi
    {
        if (is_null($this->schedule)) {
            $this->schedule = new ScheduleApi(
                config: $this->config()
            );
        }

        return $this->schedule;
    }

    public function user(): UserApi
    {
        if (is_null($this->user)) {
            $this->user = new UserApi(
                config: $this->config()
            );
        }

        return $this->user;
    }
    
}