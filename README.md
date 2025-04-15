# clientapi_semaphore

Semaphore API provides endpoints for managing and interacting with the Semaphore UI.
This documentation outlines the available operations and data models.



## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/client-api/semaphore-php.git"
    }
  ],
  "require": {
    "client-api/semaphore-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/clientapi_semaphore/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new ClientAPI\Semaphore\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->authLoginGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->authLoginGet: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *http://localhost:3000/api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AuthenticationApi* | [**authLoginGet**](docs/Api/AuthenticationApi.md#authloginget) | **GET** /auth/login | Fetches login metadata
*AuthenticationApi* | [**authLoginPost**](docs/Api/AuthenticationApi.md#authloginpost) | **POST** /auth/login | Performs Login
*AuthenticationApi* | [**authLogoutPost**](docs/Api/AuthenticationApi.md#authlogoutpost) | **POST** /auth/logout | Destroys current session
*AuthenticationApi* | [**authOidcProviderIdLoginGet**](docs/Api/AuthenticationApi.md#authoidcprovideridloginget) | **GET** /auth/oidc/{provider_id}/login | Begin OIDC authentication flow and redirect to OIDC provider
*AuthenticationApi* | [**authOidcProviderIdRedirectGet**](docs/Api/AuthenticationApi.md#authoidcprovideridredirectget) | **GET** /auth/oidc/{provider_id}/redirect | Finish OIDC authentication flow, upon succes you will be logged in
*AuthenticationApi* | [**userTokensApiTokenIdDelete**](docs/Api/AuthenticationApi.md#usertokensapitokeniddelete) | **DELETE** /user/tokens/{api_token_id} | Expires API token
*AuthenticationApi* | [**userTokensGet**](docs/Api/AuthenticationApi.md#usertokensget) | **GET** /user/tokens | Fetch API tokens for user
*AuthenticationApi* | [**userTokensPost**](docs/Api/AuthenticationApi.md#usertokenspost) | **POST** /user/tokens | Create an API token
*DefaultApi* | [**eventsGet**](docs/Api/DefaultApi.md#eventsget) | **GET** /events | Get Events related to Semaphore and projects you are part of
*DefaultApi* | [**eventsLastGet**](docs/Api/DefaultApi.md#eventslastget) | **GET** /events/last | Get last 200 Events related to Semaphore and projects you are part of
*DefaultApi* | [**infoGet**](docs/Api/DefaultApi.md#infoget) | **GET** /info | Fetches information about semaphore
*DefaultApi* | [**pingGet**](docs/Api/DefaultApi.md#pingget) | **GET** /ping | PING test
*DefaultApi* | [**wsGet**](docs/Api/DefaultApi.md#wsget) | **GET** /ws | Websocket handler
*IntegrationApi* | [**projectProjectIdIntegrationsIntegrationIdMatchersGet**](docs/Api/IntegrationApi.md#projectprojectidintegrationsintegrationidmatchersget) | **GET** /project/{project_id}/integrations/{integration_id}/matchers | Get Integration Matcher linked to integration extractor
*IntegrationApi* | [**projectProjectIdIntegrationsIntegrationIdMatchersMatcherIdDelete**](docs/Api/IntegrationApi.md#projectprojectidintegrationsintegrationidmatchersmatcheriddelete) | **DELETE** /project/{project_id}/integrations/{integration_id}/matchers/{matcher_id} | Removes integration matcher
*IntegrationApi* | [**projectProjectIdIntegrationsIntegrationIdMatchersMatcherIdPut**](docs/Api/IntegrationApi.md#projectprojectidintegrationsintegrationidmatchersmatcheridput) | **PUT** /project/{project_id}/integrations/{integration_id}/matchers/{matcher_id} | Updates Integration Matcher
*IntegrationApi* | [**projectProjectIdIntegrationsIntegrationIdValuesExtractvalueIdDelete**](docs/Api/IntegrationApi.md#projectprojectidintegrationsintegrationidvaluesextractvalueiddelete) | **DELETE** /project/{project_id}/integrations/{integration_id}/values/{extractvalue_id} | Removes integration extract value
*IntegrationApi* | [**projectProjectIdIntegrationsIntegrationIdValuesExtractvalueIdPut**](docs/Api/IntegrationApi.md#projectprojectidintegrationsintegrationidvaluesextractvalueidput) | **PUT** /project/{project_id}/integrations/{integration_id}/values/{extractvalue_id} | Updates Integration ExtractValue
*IntegrationApi* | [**projectProjectIdIntegrationsIntegrationIdValuesGet**](docs/Api/IntegrationApi.md#projectprojectidintegrationsintegrationidvaluesget) | **GET** /project/{project_id}/integrations/{integration_id}/values | Get Integration Extracted Values linked to integration extractor
*ProjectApi* | [**projectProjectIdBackupGet**](docs/Api/ProjectApi.md#projectprojectidbackupget) | **GET** /project/{project_id}/backup | Backup A Project
*ProjectApi* | [**projectProjectIdDelete**](docs/Api/ProjectApi.md#projectprojectiddelete) | **DELETE** /project/{project_id}/ | Delete project
*ProjectApi* | [**projectProjectIdEnvironmentEnvironmentIdDelete**](docs/Api/ProjectApi.md#projectprojectidenvironmentenvironmentiddelete) | **DELETE** /project/{project_id}/environment/{environment_id} | Removes environment
*ProjectApi* | [**projectProjectIdEnvironmentEnvironmentIdGet**](docs/Api/ProjectApi.md#projectprojectidenvironmentenvironmentidget) | **GET** /project/{project_id}/environment/{environment_id} | Get environment
*ProjectApi* | [**projectProjectIdEnvironmentEnvironmentIdPut**](docs/Api/ProjectApi.md#projectprojectidenvironmentenvironmentidput) | **PUT** /project/{project_id}/environment/{environment_id} | Update environment
*ProjectApi* | [**projectProjectIdEnvironmentGet**](docs/Api/ProjectApi.md#projectprojectidenvironmentget) | **GET** /project/{project_id}/environment | Get environment
*ProjectApi* | [**projectProjectIdEnvironmentPost**](docs/Api/ProjectApi.md#projectprojectidenvironmentpost) | **POST** /project/{project_id}/environment | Add environment
*ProjectApi* | [**projectProjectIdEventsGet**](docs/Api/ProjectApi.md#projectprojectideventsget) | **GET** /project/{project_id}/events | Get Events related to this project
*ProjectApi* | [**projectProjectIdGet**](docs/Api/ProjectApi.md#projectprojectidget) | **GET** /project/{project_id}/ | Fetch project
*ProjectApi* | [**projectProjectIdIntegrationsGet**](docs/Api/ProjectApi.md#projectprojectidintegrationsget) | **GET** /project/{project_id}/integrations | get all integrations
*ProjectApi* | [**projectProjectIdIntegrationsIntegrationIdDelete**](docs/Api/ProjectApi.md#projectprojectidintegrationsintegrationiddelete) | **DELETE** /project/{project_id}/integrations/{integration_id} | Remove integration
*ProjectApi* | [**projectProjectIdIntegrationsIntegrationIdMatchersPost**](docs/Api/ProjectApi.md#projectprojectidintegrationsintegrationidmatcherspost) | **POST** /project/{project_id}/integrations/{integration_id}/matchers | Add Integration Matcher
*ProjectApi* | [**projectProjectIdIntegrationsIntegrationIdPut**](docs/Api/ProjectApi.md#projectprojectidintegrationsintegrationidput) | **PUT** /project/{project_id}/integrations/{integration_id} | Update Integration
*ProjectApi* | [**projectProjectIdIntegrationsIntegrationIdValuesPost**](docs/Api/ProjectApi.md#projectprojectidintegrationsintegrationidvaluespost) | **POST** /project/{project_id}/integrations/{integration_id}/values | Add Integration Extracted Value
*ProjectApi* | [**projectProjectIdIntegrationsPost**](docs/Api/ProjectApi.md#projectprojectidintegrationspost) | **POST** /project/{project_id}/integrations | create a new integration
*ProjectApi* | [**projectProjectIdInventoryGet**](docs/Api/ProjectApi.md#projectprojectidinventoryget) | **GET** /project/{project_id}/inventory | Get inventory
*ProjectApi* | [**projectProjectIdInventoryInventoryIdDelete**](docs/Api/ProjectApi.md#projectprojectidinventoryinventoryiddelete) | **DELETE** /project/{project_id}/inventory/{inventory_id} | Removes inventory
*ProjectApi* | [**projectProjectIdInventoryInventoryIdGet**](docs/Api/ProjectApi.md#projectprojectidinventoryinventoryidget) | **GET** /project/{project_id}/inventory/{inventory_id} | Get inventory
*ProjectApi* | [**projectProjectIdInventoryInventoryIdPut**](docs/Api/ProjectApi.md#projectprojectidinventoryinventoryidput) | **PUT** /project/{project_id}/inventory/{inventory_id} | Updates inventory
*ProjectApi* | [**projectProjectIdInventoryPost**](docs/Api/ProjectApi.md#projectprojectidinventorypost) | **POST** /project/{project_id}/inventory | create inventory
*ProjectApi* | [**projectProjectIdKeysGet**](docs/Api/ProjectApi.md#projectprojectidkeysget) | **GET** /project/{project_id}/keys | Get access keys linked to project
*ProjectApi* | [**projectProjectIdKeysKeyIdDelete**](docs/Api/ProjectApi.md#projectprojectidkeyskeyiddelete) | **DELETE** /project/{project_id}/keys/{key_id} | Removes access key
*ProjectApi* | [**projectProjectIdKeysKeyIdPut**](docs/Api/ProjectApi.md#projectprojectidkeyskeyidput) | **PUT** /project/{project_id}/keys/{key_id} | Updates access key
*ProjectApi* | [**projectProjectIdKeysPost**](docs/Api/ProjectApi.md#projectprojectidkeyspost) | **POST** /project/{project_id}/keys | Add access key
*ProjectApi* | [**projectProjectIdPut**](docs/Api/ProjectApi.md#projectprojectidput) | **PUT** /project/{project_id}/ | Update project
*ProjectApi* | [**projectProjectIdRepositoriesGet**](docs/Api/ProjectApi.md#projectprojectidrepositoriesget) | **GET** /project/{project_id}/repositories | Get repositories
*ProjectApi* | [**projectProjectIdRepositoriesPost**](docs/Api/ProjectApi.md#projectprojectidrepositoriespost) | **POST** /project/{project_id}/repositories | Add repository
*ProjectApi* | [**projectProjectIdRepositoriesRepositoryIdDelete**](docs/Api/ProjectApi.md#projectprojectidrepositoriesrepositoryiddelete) | **DELETE** /project/{project_id}/repositories/{repository_id} | Removes repository
*ProjectApi* | [**projectProjectIdRepositoriesRepositoryIdGet**](docs/Api/ProjectApi.md#projectprojectidrepositoriesrepositoryidget) | **GET** /project/{project_id}/repositories/{repository_id} | Get repository
*ProjectApi* | [**projectProjectIdRepositoriesRepositoryIdPut**](docs/Api/ProjectApi.md#projectprojectidrepositoriesrepositoryidput) | **PUT** /project/{project_id}/repositories/{repository_id} | Updates repository
*ProjectApi* | [**projectProjectIdRoleGet**](docs/Api/ProjectApi.md#projectprojectidroleget) | **GET** /project/{project_id}/role | Fetch permissions of the current user for project
*ProjectApi* | [**projectProjectIdTasksGet**](docs/Api/ProjectApi.md#projectprojectidtasksget) | **GET** /project/{project_id}/tasks | Get Tasks related to current project
*ProjectApi* | [**projectProjectIdTasksLastGet**](docs/Api/ProjectApi.md#projectprojectidtaskslastget) | **GET** /project/{project_id}/tasks/last | Get last 200 Tasks related to current project
*ProjectApi* | [**projectProjectIdTasksPost**](docs/Api/ProjectApi.md#projectprojectidtaskspost) | **POST** /project/{project_id}/tasks | Starts a job
*ProjectApi* | [**projectProjectIdTasksTaskIdDelete**](docs/Api/ProjectApi.md#projectprojectidtaskstaskiddelete) | **DELETE** /project/{project_id}/tasks/{task_id} | Deletes task (including output)
*ProjectApi* | [**projectProjectIdTasksTaskIdGet**](docs/Api/ProjectApi.md#projectprojectidtaskstaskidget) | **GET** /project/{project_id}/tasks/{task_id} | Get a single task
*ProjectApi* | [**projectProjectIdTasksTaskIdOutputGet**](docs/Api/ProjectApi.md#projectprojectidtaskstaskidoutputget) | **GET** /project/{project_id}/tasks/{task_id}/output | Get task output
*ProjectApi* | [**projectProjectIdTasksTaskIdStopPost**](docs/Api/ProjectApi.md#projectprojectidtaskstaskidstoppost) | **POST** /project/{project_id}/tasks/{task_id}/stop | Stop a job
*ProjectApi* | [**projectProjectIdTemplatesGet**](docs/Api/ProjectApi.md#projectprojectidtemplatesget) | **GET** /project/{project_id}/templates | Get template
*ProjectApi* | [**projectProjectIdTemplatesPost**](docs/Api/ProjectApi.md#projectprojectidtemplatespost) | **POST** /project/{project_id}/templates | create template
*ProjectApi* | [**projectProjectIdTemplatesTemplateIdDelete**](docs/Api/ProjectApi.md#projectprojectidtemplatestemplateiddelete) | **DELETE** /project/{project_id}/templates/{template_id} | Removes template
*ProjectApi* | [**projectProjectIdTemplatesTemplateIdGet**](docs/Api/ProjectApi.md#projectprojectidtemplatestemplateidget) | **GET** /project/{project_id}/templates/{template_id} | Get template
*ProjectApi* | [**projectProjectIdTemplatesTemplateIdPut**](docs/Api/ProjectApi.md#projectprojectidtemplatestemplateidput) | **PUT** /project/{project_id}/templates/{template_id} | Updates template
*ProjectApi* | [**projectProjectIdUsersGet**](docs/Api/ProjectApi.md#projectprojectidusersget) | **GET** /project/{project_id}/users | Get users linked to project
*ProjectApi* | [**projectProjectIdUsersPost**](docs/Api/ProjectApi.md#projectprojectiduserspost) | **POST** /project/{project_id}/users | Link user to project
*ProjectApi* | [**projectProjectIdUsersUserIdDelete**](docs/Api/ProjectApi.md#projectprojectidusersuseriddelete) | **DELETE** /project/{project_id}/users/{user_id} | Removes user from project
*ProjectApi* | [**projectProjectIdUsersUserIdPut**](docs/Api/ProjectApi.md#projectprojectidusersuseridput) | **PUT** /project/{project_id}/users/{user_id} | Update user role
*ProjectApi* | [**projectProjectIdViewsGet**](docs/Api/ProjectApi.md#projectprojectidviewsget) | **GET** /project/{project_id}/views | Get view
*ProjectApi* | [**projectProjectIdViewsPost**](docs/Api/ProjectApi.md#projectprojectidviewspost) | **POST** /project/{project_id}/views | create view
*ProjectApi* | [**projectProjectIdViewsViewIdDelete**](docs/Api/ProjectApi.md#projectprojectidviewsviewiddelete) | **DELETE** /project/{project_id}/views/{view_id} | Removes view
*ProjectApi* | [**projectProjectIdViewsViewIdGet**](docs/Api/ProjectApi.md#projectprojectidviewsviewidget) | **GET** /project/{project_id}/views/{view_id} | Get view
*ProjectApi* | [**projectProjectIdViewsViewIdPut**](docs/Api/ProjectApi.md#projectprojectidviewsviewidput) | **PUT** /project/{project_id}/views/{view_id} | Updates view
*ProjectsApi* | [**projectsGet**](docs/Api/ProjectsApi.md#projectsget) | **GET** /projects | Get projects
*ProjectsApi* | [**projectsPost**](docs/Api/ProjectsApi.md#projectspost) | **POST** /projects | Create a new project
*ProjectsApi* | [**projectsRestorePost**](docs/Api/ProjectsApi.md#projectsrestorepost) | **POST** /projects/restore | Restore Project
*ScheduleApi* | [**projectProjectIdSchedulesPost**](docs/Api/ScheduleApi.md#projectprojectidschedulespost) | **POST** /project/{project_id}/schedules | create schedule
*ScheduleApi* | [**projectProjectIdSchedulesScheduleIdDelete**](docs/Api/ScheduleApi.md#projectprojectidschedulesscheduleiddelete) | **DELETE** /project/{project_id}/schedules/{schedule_id} | Deletes schedule
*ScheduleApi* | [**projectProjectIdSchedulesScheduleIdGet**](docs/Api/ScheduleApi.md#projectprojectidschedulesscheduleidget) | **GET** /project/{project_id}/schedules/{schedule_id} | Get schedule
*ScheduleApi* | [**projectProjectIdSchedulesScheduleIdPut**](docs/Api/ScheduleApi.md#projectprojectidschedulesscheduleidput) | **PUT** /project/{project_id}/schedules/{schedule_id} | Updates schedule
*UserApi* | [**userGet**](docs/Api/UserApi.md#userget) | **GET** /user/ | Fetch logged in user
*UserApi* | [**userTokensApiTokenIdDelete**](docs/Api/UserApi.md#usertokensapitokeniddelete) | **DELETE** /user/tokens/{api_token_id} | Expires API token
*UserApi* | [**userTokensGet**](docs/Api/UserApi.md#usertokensget) | **GET** /user/tokens | Fetch API tokens for user
*UserApi* | [**userTokensPost**](docs/Api/UserApi.md#usertokenspost) | **POST** /user/tokens | Create an API token
*UserApi* | [**usersGet**](docs/Api/UserApi.md#usersget) | **GET** /users | Fetches all users
*UserApi* | [**usersPost**](docs/Api/UserApi.md#userspost) | **POST** /users | Creates a user
*UserApi* | [**usersUserIdDelete**](docs/Api/UserApi.md#usersuseriddelete) | **DELETE** /users/{user_id}/ | Deletes user
*UserApi* | [**usersUserIdGet**](docs/Api/UserApi.md#usersuseridget) | **GET** /users/{user_id}/ | Fetches a user profile
*UserApi* | [**usersUserIdPasswordPost**](docs/Api/UserApi.md#usersuseridpasswordpost) | **POST** /users/{user_id}/password | Updates user password
*UserApi* | [**usersUserIdPut**](docs/Api/UserApi.md#usersuseridput) | **PUT** /users/{user_id}/ | Updates user details

## Models

- [APIToken](docs/Model/APIToken.md)
- [AccessKey](docs/Model/AccessKey.md)
- [AccessKeyRequest](docs/Model/AccessKeyRequest.md)
- [AccessKeyRequestLoginPassword](docs/Model/AccessKeyRequestLoginPassword.md)
- [AccessKeyRequestSsh](docs/Model/AccessKeyRequestSsh.md)
- [Environment](docs/Model/Environment.md)
- [EnvironmentRequest](docs/Model/EnvironmentRequest.md)
- [EnvironmentSecret](docs/Model/EnvironmentSecret.md)
- [EnvironmentSecretRequest](docs/Model/EnvironmentSecretRequest.md)
- [Event](docs/Model/Event.md)
- [InfoType](docs/Model/InfoType.md)
- [InfoTypeUpdate](docs/Model/InfoTypeUpdate.md)
- [Integration](docs/Model/Integration.md)
- [IntegrationExtractValue](docs/Model/IntegrationExtractValue.md)
- [IntegrationExtractValueRequest](docs/Model/IntegrationExtractValueRequest.md)
- [IntegrationMatcher](docs/Model/IntegrationMatcher.md)
- [IntegrationMatcherRequest](docs/Model/IntegrationMatcherRequest.md)
- [IntegrationRequest](docs/Model/IntegrationRequest.md)
- [Inventory](docs/Model/Inventory.md)
- [InventoryRequest](docs/Model/InventoryRequest.md)
- [Login](docs/Model/Login.md)
- [LoginMetadata](docs/Model/LoginMetadata.md)
- [LoginMetadataOidcProvidersInner](docs/Model/LoginMetadataOidcProvidersInner.md)
- [Project](docs/Model/Project.md)
- [ProjectBackup](docs/Model/ProjectBackup.md)
- [ProjectBackupEnvironmentsInner](docs/Model/ProjectBackupEnvironmentsInner.md)
- [ProjectBackupInventoriesInner](docs/Model/ProjectBackupInventoriesInner.md)
- [ProjectBackupKeysInner](docs/Model/ProjectBackupKeysInner.md)
- [ProjectBackupMeta](docs/Model/ProjectBackupMeta.md)
- [ProjectBackupRepositoriesInner](docs/Model/ProjectBackupRepositoriesInner.md)
- [ProjectBackupTemplatesInner](docs/Model/ProjectBackupTemplatesInner.md)
- [ProjectBackupViewsInner](docs/Model/ProjectBackupViewsInner.md)
- [ProjectProjectIdPutRequest](docs/Model/ProjectProjectIdPutRequest.md)
- [ProjectProjectIdRoleGet200Response](docs/Model/ProjectProjectIdRoleGet200Response.md)
- [ProjectProjectIdTasksPostRequest](docs/Model/ProjectProjectIdTasksPostRequest.md)
- [ProjectProjectIdUsersPostRequest](docs/Model/ProjectProjectIdUsersPostRequest.md)
- [ProjectProjectIdUsersUserIdPutRequest](docs/Model/ProjectProjectIdUsersUserIdPutRequest.md)
- [ProjectRequest](docs/Model/ProjectRequest.md)
- [ProjectUser](docs/Model/ProjectUser.md)
- [Repository](docs/Model/Repository.md)
- [RepositoryRequest](docs/Model/RepositoryRequest.md)
- [Runner](docs/Model/Runner.md)
- [Schedule](docs/Model/Schedule.md)
- [ScheduleRequest](docs/Model/ScheduleRequest.md)
- [Task](docs/Model/Task.md)
- [TaskOutput](docs/Model/TaskOutput.md)
- [Template](docs/Model/Template.md)
- [TemplateRequest](docs/Model/TemplateRequest.md)
- [TemplateSurveyVar](docs/Model/TemplateSurveyVar.md)
- [TemplateSurveyVarValue](docs/Model/TemplateSurveyVarValue.md)
- [TemplateVault](docs/Model/TemplateVault.md)
- [User](docs/Model/User.md)
- [UserPutRequest](docs/Model/UserPutRequest.md)
- [UserRequest](docs/Model/UserRequest.md)
- [UsersUserIdPasswordPostRequest](docs/Model/UsersUserIdPasswordPostRequest.md)
- [View](docs/Model/View.md)
- [ViewRequest](docs/Model/ViewRequest.md)

## Authorization

### cookie

- **Type**: API key
- **API key parameter name**: Cookie
- **Location**: HTTP header



### bearer

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2.13.0`
    - Generator version: `7.12.0`
- Build package: `org.openapitools.codegen.languages.PhpNextgenClientCodegen`
