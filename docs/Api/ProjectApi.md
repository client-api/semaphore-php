# ClientAPI\Semaphore\ProjectApi

All URIs are relative to http://localhost:3000/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**projectProjectIdBackupGet()**](ProjectApi.md#projectProjectIdBackupGet) | **GET** /project/{project_id}/backup | Backup A Project |
| [**projectProjectIdDelete()**](ProjectApi.md#projectProjectIdDelete) | **DELETE** /project/{project_id}/ | Delete project |
| [**projectProjectIdEnvironmentEnvironmentIdDelete()**](ProjectApi.md#projectProjectIdEnvironmentEnvironmentIdDelete) | **DELETE** /project/{project_id}/environment/{environment_id} | Removes environment |
| [**projectProjectIdEnvironmentEnvironmentIdGet()**](ProjectApi.md#projectProjectIdEnvironmentEnvironmentIdGet) | **GET** /project/{project_id}/environment/{environment_id} | Get environment |
| [**projectProjectIdEnvironmentEnvironmentIdPut()**](ProjectApi.md#projectProjectIdEnvironmentEnvironmentIdPut) | **PUT** /project/{project_id}/environment/{environment_id} | Update environment |
| [**projectProjectIdEnvironmentGet()**](ProjectApi.md#projectProjectIdEnvironmentGet) | **GET** /project/{project_id}/environment | Get environment |
| [**projectProjectIdEnvironmentPost()**](ProjectApi.md#projectProjectIdEnvironmentPost) | **POST** /project/{project_id}/environment | Add environment |
| [**projectProjectIdEventsGet()**](ProjectApi.md#projectProjectIdEventsGet) | **GET** /project/{project_id}/events | Get Events related to this project |
| [**projectProjectIdGet()**](ProjectApi.md#projectProjectIdGet) | **GET** /project/{project_id}/ | Fetch project |
| [**projectProjectIdIntegrationsGet()**](ProjectApi.md#projectProjectIdIntegrationsGet) | **GET** /project/{project_id}/integrations | get all integrations |
| [**projectProjectIdIntegrationsIntegrationIdDelete()**](ProjectApi.md#projectProjectIdIntegrationsIntegrationIdDelete) | **DELETE** /project/{project_id}/integrations/{integration_id} | Remove integration |
| [**projectProjectIdIntegrationsIntegrationIdMatchersPost()**](ProjectApi.md#projectProjectIdIntegrationsIntegrationIdMatchersPost) | **POST** /project/{project_id}/integrations/{integration_id}/matchers | Add Integration Matcher |
| [**projectProjectIdIntegrationsIntegrationIdPut()**](ProjectApi.md#projectProjectIdIntegrationsIntegrationIdPut) | **PUT** /project/{project_id}/integrations/{integration_id} | Update Integration |
| [**projectProjectIdIntegrationsIntegrationIdValuesPost()**](ProjectApi.md#projectProjectIdIntegrationsIntegrationIdValuesPost) | **POST** /project/{project_id}/integrations/{integration_id}/values | Add Integration Extracted Value |
| [**projectProjectIdIntegrationsPost()**](ProjectApi.md#projectProjectIdIntegrationsPost) | **POST** /project/{project_id}/integrations | create a new integration |
| [**projectProjectIdInventoryGet()**](ProjectApi.md#projectProjectIdInventoryGet) | **GET** /project/{project_id}/inventory | Get inventory |
| [**projectProjectIdInventoryInventoryIdDelete()**](ProjectApi.md#projectProjectIdInventoryInventoryIdDelete) | **DELETE** /project/{project_id}/inventory/{inventory_id} | Removes inventory |
| [**projectProjectIdInventoryInventoryIdGet()**](ProjectApi.md#projectProjectIdInventoryInventoryIdGet) | **GET** /project/{project_id}/inventory/{inventory_id} | Get inventory |
| [**projectProjectIdInventoryInventoryIdPut()**](ProjectApi.md#projectProjectIdInventoryInventoryIdPut) | **PUT** /project/{project_id}/inventory/{inventory_id} | Updates inventory |
| [**projectProjectIdInventoryPost()**](ProjectApi.md#projectProjectIdInventoryPost) | **POST** /project/{project_id}/inventory | create inventory |
| [**projectProjectIdKeysGet()**](ProjectApi.md#projectProjectIdKeysGet) | **GET** /project/{project_id}/keys | Get access keys linked to project |
| [**projectProjectIdKeysKeyIdDelete()**](ProjectApi.md#projectProjectIdKeysKeyIdDelete) | **DELETE** /project/{project_id}/keys/{key_id} | Removes access key |
| [**projectProjectIdKeysKeyIdPut()**](ProjectApi.md#projectProjectIdKeysKeyIdPut) | **PUT** /project/{project_id}/keys/{key_id} | Updates access key |
| [**projectProjectIdKeysPost()**](ProjectApi.md#projectProjectIdKeysPost) | **POST** /project/{project_id}/keys | Add access key |
| [**projectProjectIdPut()**](ProjectApi.md#projectProjectIdPut) | **PUT** /project/{project_id}/ | Update project |
| [**projectProjectIdRepositoriesGet()**](ProjectApi.md#projectProjectIdRepositoriesGet) | **GET** /project/{project_id}/repositories | Get repositories |
| [**projectProjectIdRepositoriesPost()**](ProjectApi.md#projectProjectIdRepositoriesPost) | **POST** /project/{project_id}/repositories | Add repository |
| [**projectProjectIdRepositoriesRepositoryIdDelete()**](ProjectApi.md#projectProjectIdRepositoriesRepositoryIdDelete) | **DELETE** /project/{project_id}/repositories/{repository_id} | Removes repository |
| [**projectProjectIdRepositoriesRepositoryIdGet()**](ProjectApi.md#projectProjectIdRepositoriesRepositoryIdGet) | **GET** /project/{project_id}/repositories/{repository_id} | Get repository |
| [**projectProjectIdRepositoriesRepositoryIdPut()**](ProjectApi.md#projectProjectIdRepositoriesRepositoryIdPut) | **PUT** /project/{project_id}/repositories/{repository_id} | Updates repository |
| [**projectProjectIdRoleGet()**](ProjectApi.md#projectProjectIdRoleGet) | **GET** /project/{project_id}/role | Fetch permissions of the current user for project |
| [**projectProjectIdTasksGet()**](ProjectApi.md#projectProjectIdTasksGet) | **GET** /project/{project_id}/tasks | Get Tasks related to current project |
| [**projectProjectIdTasksLastGet()**](ProjectApi.md#projectProjectIdTasksLastGet) | **GET** /project/{project_id}/tasks/last | Get last 200 Tasks related to current project |
| [**projectProjectIdTasksPost()**](ProjectApi.md#projectProjectIdTasksPost) | **POST** /project/{project_id}/tasks | Starts a job |
| [**projectProjectIdTasksTaskIdDelete()**](ProjectApi.md#projectProjectIdTasksTaskIdDelete) | **DELETE** /project/{project_id}/tasks/{task_id} | Deletes task (including output) |
| [**projectProjectIdTasksTaskIdGet()**](ProjectApi.md#projectProjectIdTasksTaskIdGet) | **GET** /project/{project_id}/tasks/{task_id} | Get a single task |
| [**projectProjectIdTasksTaskIdOutputGet()**](ProjectApi.md#projectProjectIdTasksTaskIdOutputGet) | **GET** /project/{project_id}/tasks/{task_id}/output | Get task output |
| [**projectProjectIdTasksTaskIdStopPost()**](ProjectApi.md#projectProjectIdTasksTaskIdStopPost) | **POST** /project/{project_id}/tasks/{task_id}/stop | Stop a job |
| [**projectProjectIdTemplatesGet()**](ProjectApi.md#projectProjectIdTemplatesGet) | **GET** /project/{project_id}/templates | Get template |
| [**projectProjectIdTemplatesPost()**](ProjectApi.md#projectProjectIdTemplatesPost) | **POST** /project/{project_id}/templates | create template |
| [**projectProjectIdTemplatesTemplateIdDelete()**](ProjectApi.md#projectProjectIdTemplatesTemplateIdDelete) | **DELETE** /project/{project_id}/templates/{template_id} | Removes template |
| [**projectProjectIdTemplatesTemplateIdGet()**](ProjectApi.md#projectProjectIdTemplatesTemplateIdGet) | **GET** /project/{project_id}/templates/{template_id} | Get template |
| [**projectProjectIdTemplatesTemplateIdPut()**](ProjectApi.md#projectProjectIdTemplatesTemplateIdPut) | **PUT** /project/{project_id}/templates/{template_id} | Updates template |
| [**projectProjectIdUsersGet()**](ProjectApi.md#projectProjectIdUsersGet) | **GET** /project/{project_id}/users | Get users linked to project |
| [**projectProjectIdUsersPost()**](ProjectApi.md#projectProjectIdUsersPost) | **POST** /project/{project_id}/users | Link user to project |
| [**projectProjectIdUsersUserIdDelete()**](ProjectApi.md#projectProjectIdUsersUserIdDelete) | **DELETE** /project/{project_id}/users/{user_id} | Removes user from project |
| [**projectProjectIdUsersUserIdPut()**](ProjectApi.md#projectProjectIdUsersUserIdPut) | **PUT** /project/{project_id}/users/{user_id} | Update user role |
| [**projectProjectIdViewsGet()**](ProjectApi.md#projectProjectIdViewsGet) | **GET** /project/{project_id}/views | Get view |
| [**projectProjectIdViewsPost()**](ProjectApi.md#projectProjectIdViewsPost) | **POST** /project/{project_id}/views | create view |
| [**projectProjectIdViewsViewIdDelete()**](ProjectApi.md#projectProjectIdViewsViewIdDelete) | **DELETE** /project/{project_id}/views/{view_id} | Removes view |
| [**projectProjectIdViewsViewIdGet()**](ProjectApi.md#projectProjectIdViewsViewIdGet) | **GET** /project/{project_id}/views/{view_id} | Get view |
| [**projectProjectIdViewsViewIdPut()**](ProjectApi.md#projectProjectIdViewsViewIdPut) | **PUT** /project/{project_id}/views/{view_id} | Updates view |


## `projectProjectIdBackupGet()`

```php
projectProjectIdBackupGet($projectId): \ClientAPI\Semaphore\Model\ProjectBackup
```

Backup A Project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookie
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

// Configure API key authorization: bearer
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ClientAPI\Semaphore\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int | Project ID

try {
    $result = $apiInstance->projectProjectIdBackupGet($projectId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectProjectIdBackupGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**| Project ID | |

### Return type

[**\ClientAPI\Semaphore\Model\ProjectBackup**](../Model/ProjectBackup.md)

### Authorization

[cookie](../../README.md#cookie), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectProjectIdDelete()`

```php
projectProjectIdDelete($projectId)
```

Delete project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookie
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

// Configure API key authorization: bearer
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ClientAPI\Semaphore\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int | Project ID

try {
    $apiInstance->projectProjectIdDelete($projectId);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectProjectIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**| Project ID | |

### Return type

void (empty response body)

### Authorization

[cookie](../../README.md#cookie), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectProjectIdEnvironmentEnvironmentIdDelete()`

```php
projectProjectIdEnvironmentEnvironmentIdDelete($projectId, $environmentId)
```

Removes environment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookie
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

// Configure API key authorization: bearer
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ClientAPI\Semaphore\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int | Project ID
$environmentId = 56; // int | environment ID

try {
    $apiInstance->projectProjectIdEnvironmentEnvironmentIdDelete($projectId, $environmentId);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectProjectIdEnvironmentEnvironmentIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**| Project ID | |
| **environmentId** | **int**| environment ID | |

### Return type

void (empty response body)

### Authorization

[cookie](../../README.md#cookie), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectProjectIdEnvironmentEnvironmentIdGet()`

```php
projectProjectIdEnvironmentEnvironmentIdGet($projectId, $environmentId): \ClientAPI\Semaphore\Model\Environment
```

Get environment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookie
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

// Configure API key authorization: bearer
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ClientAPI\Semaphore\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int | Project ID
$environmentId = 56; // int | environment ID

try {
    $result = $apiInstance->projectProjectIdEnvironmentEnvironmentIdGet($projectId, $environmentId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectProjectIdEnvironmentEnvironmentIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**| Project ID | |
| **environmentId** | **int**| environment ID | |

### Return type

[**\ClientAPI\Semaphore\Model\Environment**](../Model/Environment.md)

### Authorization

[cookie](../../README.md#cookie), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectProjectIdEnvironmentEnvironmentIdPut()`

```php
projectProjectIdEnvironmentEnvironmentIdPut($projectId, $environmentId, $environment)
```

Update environment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookie
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

// Configure API key authorization: bearer
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ClientAPI\Semaphore\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int | Project ID
$environmentId = 56; // int | environment ID
$environment = new \ClientAPI\Semaphore\Model\EnvironmentRequest(); // \ClientAPI\Semaphore\Model\EnvironmentRequest

try {
    $apiInstance->projectProjectIdEnvironmentEnvironmentIdPut($projectId, $environmentId, $environment);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectProjectIdEnvironmentEnvironmentIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**| Project ID | |
| **environmentId** | **int**| environment ID | |
| **environment** | [**\ClientAPI\Semaphore\Model\EnvironmentRequest**](../Model/EnvironmentRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[cookie](../../README.md#cookie), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectProjectIdEnvironmentGet()`

```php
projectProjectIdEnvironmentGet($projectId, $sort, $order): \ClientAPI\Semaphore\Model\Environment[]
```

Get environment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookie
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

// Configure API key authorization: bearer
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ClientAPI\Semaphore\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int | Project ID
$sort = name; // string | sorting name
$order = desc; // string | ordering manner

try {
    $result = $apiInstance->projectProjectIdEnvironmentGet($projectId, $sort, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectProjectIdEnvironmentGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**| Project ID | |
| **sort** | **string**| sorting name | |
| **order** | **string**| ordering manner | |

### Return type

[**\ClientAPI\Semaphore\Model\Environment[]**](../Model/Environment.md)

### Authorization

[cookie](../../README.md#cookie), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectProjectIdEnvironmentPost()`

```php
projectProjectIdEnvironmentPost($projectId, $environment): \ClientAPI\Semaphore\Model\Environment
```

Add environment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookie
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

// Configure API key authorization: bearer
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ClientAPI\Semaphore\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int | Project ID
$environment = new \ClientAPI\Semaphore\Model\EnvironmentRequest(); // \ClientAPI\Semaphore\Model\EnvironmentRequest

try {
    $result = $apiInstance->projectProjectIdEnvironmentPost($projectId, $environment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectProjectIdEnvironmentPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**| Project ID | |
| **environment** | [**\ClientAPI\Semaphore\Model\EnvironmentRequest**](../Model/EnvironmentRequest.md)|  | |

### Return type

[**\ClientAPI\Semaphore\Model\Environment**](../Model/Environment.md)

### Authorization

[cookie](../../README.md#cookie), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectProjectIdEventsGet()`

```php
projectProjectIdEventsGet($projectId): \ClientAPI\Semaphore\Model\Event[]
```

Get Events related to this project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookie
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

// Configure API key authorization: bearer
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ClientAPI\Semaphore\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int | Project ID

try {
    $result = $apiInstance->projectProjectIdEventsGet($projectId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectProjectIdEventsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**| Project ID | |

### Return type

[**\ClientAPI\Semaphore\Model\Event[]**](../Model/Event.md)

### Authorization

[cookie](../../README.md#cookie), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectProjectIdGet()`

```php
projectProjectIdGet($projectId): \ClientAPI\Semaphore\Model\Project
```

Fetch project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookie
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

// Configure API key authorization: bearer
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ClientAPI\Semaphore\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int | Project ID

try {
    $result = $apiInstance->projectProjectIdGet($projectId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectProjectIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**| Project ID | |

### Return type

[**\ClientAPI\Semaphore\Model\Project**](../Model/Project.md)

### Authorization

[cookie](../../README.md#cookie), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectProjectIdIntegrationsGet()`

```php
projectProjectIdIntegrationsGet($projectId): \ClientAPI\Semaphore\Model\Integration[]
```

get all integrations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookie
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

// Configure API key authorization: bearer
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ClientAPI\Semaphore\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int | Project ID

try {
    $result = $apiInstance->projectProjectIdIntegrationsGet($projectId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectProjectIdIntegrationsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**| Project ID | |

### Return type

[**\ClientAPI\Semaphore\Model\Integration[]**](../Model/Integration.md)

### Authorization

[cookie](../../README.md#cookie), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectProjectIdIntegrationsIntegrationIdDelete()`

```php
projectProjectIdIntegrationsIntegrationIdDelete($projectId, $integrationId)
```

Remove integration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookie
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

// Configure API key authorization: bearer
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ClientAPI\Semaphore\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int | Project ID
$integrationId = 56; // int | integration ID

try {
    $apiInstance->projectProjectIdIntegrationsIntegrationIdDelete($projectId, $integrationId);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectProjectIdIntegrationsIntegrationIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**| Project ID | |
| **integrationId** | **int**| integration ID | |

### Return type

void (empty response body)

### Authorization

[cookie](../../README.md#cookie), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectProjectIdIntegrationsIntegrationIdMatchersPost()`

```php
projectProjectIdIntegrationsIntegrationIdMatchersPost($projectId, $integrationId, $integrationMatcher)
```

Add Integration Matcher

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookie
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

// Configure API key authorization: bearer
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ClientAPI\Semaphore\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int | Project ID
$integrationId = 56; // int | integration ID
$integrationMatcher = new \ClientAPI\Semaphore\Model\IntegrationMatcher(); // \ClientAPI\Semaphore\Model\IntegrationMatcher

try {
    $apiInstance->projectProjectIdIntegrationsIntegrationIdMatchersPost($projectId, $integrationId, $integrationMatcher);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectProjectIdIntegrationsIntegrationIdMatchersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**| Project ID | |
| **integrationId** | **int**| integration ID | |
| **integrationMatcher** | [**\ClientAPI\Semaphore\Model\IntegrationMatcher**](../Model/IntegrationMatcher.md)|  | |

### Return type

void (empty response body)

### Authorization

[cookie](../../README.md#cookie), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectProjectIdIntegrationsIntegrationIdPut()`

```php
projectProjectIdIntegrationsIntegrationIdPut($projectId, $integrationId, $integration)
```

Update Integration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookie
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

// Configure API key authorization: bearer
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ClientAPI\Semaphore\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int | Project ID
$integrationId = 56; // int | integration ID
$integration = new \ClientAPI\Semaphore\Model\IntegrationRequest(); // \ClientAPI\Semaphore\Model\IntegrationRequest

try {
    $apiInstance->projectProjectIdIntegrationsIntegrationIdPut($projectId, $integrationId, $integration);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectProjectIdIntegrationsIntegrationIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**| Project ID | |
| **integrationId** | **int**| integration ID | |
| **integration** | [**\ClientAPI\Semaphore\Model\IntegrationRequest**](../Model/IntegrationRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[cookie](../../README.md#cookie), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectProjectIdIntegrationsIntegrationIdValuesPost()`

```php
projectProjectIdIntegrationsIntegrationIdValuesPost($projectId, $integrationId, $integrationExtractedValue)
```

Add Integration Extracted Value

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookie
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

// Configure API key authorization: bearer
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ClientAPI\Semaphore\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int | Project ID
$integrationId = 56; // int | integration ID
$integrationExtractedValue = new \ClientAPI\Semaphore\Model\IntegrationExtractValue(); // \ClientAPI\Semaphore\Model\IntegrationExtractValue

try {
    $apiInstance->projectProjectIdIntegrationsIntegrationIdValuesPost($projectId, $integrationId, $integrationExtractedValue);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectProjectIdIntegrationsIntegrationIdValuesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**| Project ID | |
| **integrationId** | **int**| integration ID | |
| **integrationExtractedValue** | [**\ClientAPI\Semaphore\Model\IntegrationExtractValue**](../Model/IntegrationExtractValue.md)|  | |

### Return type

void (empty response body)

### Authorization

[cookie](../../README.md#cookie), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectProjectIdIntegrationsPost()`

```php
projectProjectIdIntegrationsPost($projectId, $integration): \ClientAPI\Semaphore\Model\Integration
```

create a new integration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookie
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

// Configure API key authorization: bearer
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ClientAPI\Semaphore\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int | Project ID
$integration = new \ClientAPI\Semaphore\Model\IntegrationRequest(); // \ClientAPI\Semaphore\Model\IntegrationRequest

try {
    $result = $apiInstance->projectProjectIdIntegrationsPost($projectId, $integration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectProjectIdIntegrationsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**| Project ID | |
| **integration** | [**\ClientAPI\Semaphore\Model\IntegrationRequest**](../Model/IntegrationRequest.md)|  | |

### Return type

[**\ClientAPI\Semaphore\Model\Integration**](../Model/Integration.md)

### Authorization

[cookie](../../README.md#cookie), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectProjectIdInventoryGet()`

```php
projectProjectIdInventoryGet($projectId, $sort, $order): \ClientAPI\Semaphore\Model\Inventory[]
```

Get inventory

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookie
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

// Configure API key authorization: bearer
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ClientAPI\Semaphore\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int | Project ID
$sort = 'sort_example'; // string | sorting name
$order = 'order_example'; // string | ordering manner

try {
    $result = $apiInstance->projectProjectIdInventoryGet($projectId, $sort, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectProjectIdInventoryGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**| Project ID | |
| **sort** | **string**| sorting name | |
| **order** | **string**| ordering manner | |

### Return type

[**\ClientAPI\Semaphore\Model\Inventory[]**](../Model/Inventory.md)

### Authorization

[cookie](../../README.md#cookie), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectProjectIdInventoryInventoryIdDelete()`

```php
projectProjectIdInventoryInventoryIdDelete($projectId, $inventoryId)
```

Removes inventory

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookie
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

// Configure API key authorization: bearer
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ClientAPI\Semaphore\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int | Project ID
$inventoryId = 56; // int | inventory ID

try {
    $apiInstance->projectProjectIdInventoryInventoryIdDelete($projectId, $inventoryId);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectProjectIdInventoryInventoryIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**| Project ID | |
| **inventoryId** | **int**| inventory ID | |

### Return type

void (empty response body)

### Authorization

[cookie](../../README.md#cookie), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectProjectIdInventoryInventoryIdGet()`

```php
projectProjectIdInventoryInventoryIdGet($projectId, $inventoryId): \ClientAPI\Semaphore\Model\Inventory
```

Get inventory

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookie
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

// Configure API key authorization: bearer
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ClientAPI\Semaphore\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int | Project ID
$inventoryId = 56; // int | inventory ID

try {
    $result = $apiInstance->projectProjectIdInventoryInventoryIdGet($projectId, $inventoryId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectProjectIdInventoryInventoryIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**| Project ID | |
| **inventoryId** | **int**| inventory ID | |

### Return type

[**\ClientAPI\Semaphore\Model\Inventory**](../Model/Inventory.md)

### Authorization

[cookie](../../README.md#cookie), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectProjectIdInventoryInventoryIdPut()`

```php
projectProjectIdInventoryInventoryIdPut($projectId, $inventoryId, $inventory)
```

Updates inventory

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookie
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

// Configure API key authorization: bearer
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ClientAPI\Semaphore\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int | Project ID
$inventoryId = 56; // int | inventory ID
$inventory = new \ClientAPI\Semaphore\Model\InventoryRequest(); // \ClientAPI\Semaphore\Model\InventoryRequest

try {
    $apiInstance->projectProjectIdInventoryInventoryIdPut($projectId, $inventoryId, $inventory);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectProjectIdInventoryInventoryIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**| Project ID | |
| **inventoryId** | **int**| inventory ID | |
| **inventory** | [**\ClientAPI\Semaphore\Model\InventoryRequest**](../Model/InventoryRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[cookie](../../README.md#cookie), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectProjectIdInventoryPost()`

```php
projectProjectIdInventoryPost($projectId, $inventory): \ClientAPI\Semaphore\Model\Inventory
```

create inventory

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookie
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

// Configure API key authorization: bearer
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ClientAPI\Semaphore\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int | Project ID
$inventory = new \ClientAPI\Semaphore\Model\InventoryRequest(); // \ClientAPI\Semaphore\Model\InventoryRequest

try {
    $result = $apiInstance->projectProjectIdInventoryPost($projectId, $inventory);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectProjectIdInventoryPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**| Project ID | |
| **inventory** | [**\ClientAPI\Semaphore\Model\InventoryRequest**](../Model/InventoryRequest.md)|  | |

### Return type

[**\ClientAPI\Semaphore\Model\Inventory**](../Model/Inventory.md)

### Authorization

[cookie](../../README.md#cookie), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectProjectIdKeysGet()`

```php
projectProjectIdKeysGet($projectId, $sort, $order, $keyType): \ClientAPI\Semaphore\Model\AccessKey[]
```

Get access keys linked to project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookie
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

// Configure API key authorization: bearer
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ClientAPI\Semaphore\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int | Project ID
$sort = type; // string | sorting name
$order = asc; // string | ordering manner
$keyType = none; // string | Filter by key type

try {
    $result = $apiInstance->projectProjectIdKeysGet($projectId, $sort, $order, $keyType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectProjectIdKeysGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**| Project ID | |
| **sort** | **string**| sorting name | |
| **order** | **string**| ordering manner | |
| **keyType** | **string**| Filter by key type | [optional] |

### Return type

[**\ClientAPI\Semaphore\Model\AccessKey[]**](../Model/AccessKey.md)

### Authorization

[cookie](../../README.md#cookie), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectProjectIdKeysKeyIdDelete()`

```php
projectProjectIdKeysKeyIdDelete($projectId, $keyId)
```

Removes access key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookie
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

// Configure API key authorization: bearer
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ClientAPI\Semaphore\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int | Project ID
$keyId = 56; // int | key ID

try {
    $apiInstance->projectProjectIdKeysKeyIdDelete($projectId, $keyId);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectProjectIdKeysKeyIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**| Project ID | |
| **keyId** | **int**| key ID | |

### Return type

void (empty response body)

### Authorization

[cookie](../../README.md#cookie), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectProjectIdKeysKeyIdPut()`

```php
projectProjectIdKeysKeyIdPut($projectId, $keyId, $accessKey)
```

Updates access key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookie
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

// Configure API key authorization: bearer
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ClientAPI\Semaphore\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int | Project ID
$keyId = 56; // int | key ID
$accessKey = new \ClientAPI\Semaphore\Model\AccessKeyRequest(); // \ClientAPI\Semaphore\Model\AccessKeyRequest

try {
    $apiInstance->projectProjectIdKeysKeyIdPut($projectId, $keyId, $accessKey);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectProjectIdKeysKeyIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**| Project ID | |
| **keyId** | **int**| key ID | |
| **accessKey** | [**\ClientAPI\Semaphore\Model\AccessKeyRequest**](../Model/AccessKeyRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[cookie](../../README.md#cookie), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectProjectIdKeysPost()`

```php
projectProjectIdKeysPost($projectId, $accessKey): \ClientAPI\Semaphore\Model\AccessKey
```

Add access key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookie
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

// Configure API key authorization: bearer
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ClientAPI\Semaphore\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int | Project ID
$accessKey = new \ClientAPI\Semaphore\Model\AccessKeyRequest(); // \ClientAPI\Semaphore\Model\AccessKeyRequest

try {
    $result = $apiInstance->projectProjectIdKeysPost($projectId, $accessKey);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectProjectIdKeysPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**| Project ID | |
| **accessKey** | [**\ClientAPI\Semaphore\Model\AccessKeyRequest**](../Model/AccessKeyRequest.md)|  | |

### Return type

[**\ClientAPI\Semaphore\Model\AccessKey**](../Model/AccessKey.md)

### Authorization

[cookie](../../README.md#cookie), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectProjectIdPut()`

```php
projectProjectIdPut($projectId, $project)
```

Update project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookie
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

// Configure API key authorization: bearer
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ClientAPI\Semaphore\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int | Project ID
$project = new \ClientAPI\Semaphore\Model\ProjectProjectIdPutRequest(); // \ClientAPI\Semaphore\Model\ProjectProjectIdPutRequest

try {
    $apiInstance->projectProjectIdPut($projectId, $project);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectProjectIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**| Project ID | |
| **project** | [**\ClientAPI\Semaphore\Model\ProjectProjectIdPutRequest**](../Model/ProjectProjectIdPutRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[cookie](../../README.md#cookie), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectProjectIdRepositoriesGet()`

```php
projectProjectIdRepositoriesGet($projectId, $sort, $order): \ClientAPI\Semaphore\Model\Repository[]
```

Get repositories

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookie
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

// Configure API key authorization: bearer
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ClientAPI\Semaphore\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int | Project ID
$sort = 'sort_example'; // string | sorting name
$order = 'order_example'; // string | ordering manner

try {
    $result = $apiInstance->projectProjectIdRepositoriesGet($projectId, $sort, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectProjectIdRepositoriesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**| Project ID | |
| **sort** | **string**| sorting name | |
| **order** | **string**| ordering manner | |

### Return type

[**\ClientAPI\Semaphore\Model\Repository[]**](../Model/Repository.md)

### Authorization

[cookie](../../README.md#cookie), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectProjectIdRepositoriesPost()`

```php
projectProjectIdRepositoriesPost($projectId, $repository): \ClientAPI\Semaphore\Model\Repository
```

Add repository

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookie
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

// Configure API key authorization: bearer
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ClientAPI\Semaphore\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int | Project ID
$repository = new \ClientAPI\Semaphore\Model\RepositoryRequest(); // \ClientAPI\Semaphore\Model\RepositoryRequest

try {
    $result = $apiInstance->projectProjectIdRepositoriesPost($projectId, $repository);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectProjectIdRepositoriesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**| Project ID | |
| **repository** | [**\ClientAPI\Semaphore\Model\RepositoryRequest**](../Model/RepositoryRequest.md)|  | |

### Return type

[**\ClientAPI\Semaphore\Model\Repository**](../Model/Repository.md)

### Authorization

[cookie](../../README.md#cookie), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectProjectIdRepositoriesRepositoryIdDelete()`

```php
projectProjectIdRepositoriesRepositoryIdDelete($projectId, $repositoryId)
```

Removes repository

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookie
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

// Configure API key authorization: bearer
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ClientAPI\Semaphore\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int | Project ID
$repositoryId = 56; // int | repository ID

try {
    $apiInstance->projectProjectIdRepositoriesRepositoryIdDelete($projectId, $repositoryId);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectProjectIdRepositoriesRepositoryIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**| Project ID | |
| **repositoryId** | **int**| repository ID | |

### Return type

void (empty response body)

### Authorization

[cookie](../../README.md#cookie), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectProjectIdRepositoriesRepositoryIdGet()`

```php
projectProjectIdRepositoriesRepositoryIdGet($projectId, $repositoryId): \ClientAPI\Semaphore\Model\Repository
```

Get repository

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookie
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

// Configure API key authorization: bearer
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ClientAPI\Semaphore\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int | Project ID
$repositoryId = 56; // int | repository ID

try {
    $result = $apiInstance->projectProjectIdRepositoriesRepositoryIdGet($projectId, $repositoryId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectProjectIdRepositoriesRepositoryIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**| Project ID | |
| **repositoryId** | **int**| repository ID | |

### Return type

[**\ClientAPI\Semaphore\Model\Repository**](../Model/Repository.md)

### Authorization

[cookie](../../README.md#cookie), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectProjectIdRepositoriesRepositoryIdPut()`

```php
projectProjectIdRepositoriesRepositoryIdPut($projectId, $repositoryId, $repository)
```

Updates repository

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookie
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

// Configure API key authorization: bearer
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ClientAPI\Semaphore\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int | Project ID
$repositoryId = 56; // int | repository ID
$repository = new \ClientAPI\Semaphore\Model\RepositoryRequest(); // \ClientAPI\Semaphore\Model\RepositoryRequest

try {
    $apiInstance->projectProjectIdRepositoriesRepositoryIdPut($projectId, $repositoryId, $repository);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectProjectIdRepositoriesRepositoryIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**| Project ID | |
| **repositoryId** | **int**| repository ID | |
| **repository** | [**\ClientAPI\Semaphore\Model\RepositoryRequest**](../Model/RepositoryRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[cookie](../../README.md#cookie), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectProjectIdRoleGet()`

```php
projectProjectIdRoleGet($projectId): \ClientAPI\Semaphore\Model\ProjectProjectIdRoleGet200Response
```

Fetch permissions of the current user for project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookie
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

// Configure API key authorization: bearer
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ClientAPI\Semaphore\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int | Project ID

try {
    $result = $apiInstance->projectProjectIdRoleGet($projectId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectProjectIdRoleGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**| Project ID | |

### Return type

[**\ClientAPI\Semaphore\Model\ProjectProjectIdRoleGet200Response**](../Model/ProjectProjectIdRoleGet200Response.md)

### Authorization

[cookie](../../README.md#cookie), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectProjectIdTasksGet()`

```php
projectProjectIdTasksGet($projectId): \ClientAPI\Semaphore\Model\Task[]
```

Get Tasks related to current project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookie
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

// Configure API key authorization: bearer
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ClientAPI\Semaphore\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int | Project ID

try {
    $result = $apiInstance->projectProjectIdTasksGet($projectId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectProjectIdTasksGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**| Project ID | |

### Return type

[**\ClientAPI\Semaphore\Model\Task[]**](../Model/Task.md)

### Authorization

[cookie](../../README.md#cookie), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectProjectIdTasksLastGet()`

```php
projectProjectIdTasksLastGet($projectId): \ClientAPI\Semaphore\Model\Task[]
```

Get last 200 Tasks related to current project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookie
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

// Configure API key authorization: bearer
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ClientAPI\Semaphore\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int | Project ID

try {
    $result = $apiInstance->projectProjectIdTasksLastGet($projectId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectProjectIdTasksLastGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**| Project ID | |

### Return type

[**\ClientAPI\Semaphore\Model\Task[]**](../Model/Task.md)

### Authorization

[cookie](../../README.md#cookie), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectProjectIdTasksPost()`

```php
projectProjectIdTasksPost($projectId, $task): \ClientAPI\Semaphore\Model\Task
```

Starts a job

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookie
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

// Configure API key authorization: bearer
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ClientAPI\Semaphore\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int | Project ID
$task = new \ClientAPI\Semaphore\Model\ProjectProjectIdTasksPostRequest(); // \ClientAPI\Semaphore\Model\ProjectProjectIdTasksPostRequest

try {
    $result = $apiInstance->projectProjectIdTasksPost($projectId, $task);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectProjectIdTasksPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**| Project ID | |
| **task** | [**\ClientAPI\Semaphore\Model\ProjectProjectIdTasksPostRequest**](../Model/ProjectProjectIdTasksPostRequest.md)|  | |

### Return type

[**\ClientAPI\Semaphore\Model\Task**](../Model/Task.md)

### Authorization

[cookie](../../README.md#cookie), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectProjectIdTasksTaskIdDelete()`

```php
projectProjectIdTasksTaskIdDelete($projectId, $taskId)
```

Deletes task (including output)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookie
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

// Configure API key authorization: bearer
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ClientAPI\Semaphore\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int | Project ID
$taskId = 56; // int | task ID

try {
    $apiInstance->projectProjectIdTasksTaskIdDelete($projectId, $taskId);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectProjectIdTasksTaskIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**| Project ID | |
| **taskId** | **int**| task ID | |

### Return type

void (empty response body)

### Authorization

[cookie](../../README.md#cookie), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectProjectIdTasksTaskIdGet()`

```php
projectProjectIdTasksTaskIdGet($projectId, $taskId): \ClientAPI\Semaphore\Model\Task
```

Get a single task

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookie
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

// Configure API key authorization: bearer
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ClientAPI\Semaphore\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int | Project ID
$taskId = 56; // int | task ID

try {
    $result = $apiInstance->projectProjectIdTasksTaskIdGet($projectId, $taskId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectProjectIdTasksTaskIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**| Project ID | |
| **taskId** | **int**| task ID | |

### Return type

[**\ClientAPI\Semaphore\Model\Task**](../Model/Task.md)

### Authorization

[cookie](../../README.md#cookie), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectProjectIdTasksTaskIdOutputGet()`

```php
projectProjectIdTasksTaskIdOutputGet($projectId, $taskId): \ClientAPI\Semaphore\Model\TaskOutput[]
```

Get task output

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookie
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

// Configure API key authorization: bearer
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ClientAPI\Semaphore\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int | Project ID
$taskId = 56; // int | task ID

try {
    $result = $apiInstance->projectProjectIdTasksTaskIdOutputGet($projectId, $taskId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectProjectIdTasksTaskIdOutputGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**| Project ID | |
| **taskId** | **int**| task ID | |

### Return type

[**\ClientAPI\Semaphore\Model\TaskOutput[]**](../Model/TaskOutput.md)

### Authorization

[cookie](../../README.md#cookie), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectProjectIdTasksTaskIdStopPost()`

```php
projectProjectIdTasksTaskIdStopPost($projectId, $taskId)
```

Stop a job

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookie
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

// Configure API key authorization: bearer
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ClientAPI\Semaphore\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int | Project ID
$taskId = 56; // int | task ID

try {
    $apiInstance->projectProjectIdTasksTaskIdStopPost($projectId, $taskId);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectProjectIdTasksTaskIdStopPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**| Project ID | |
| **taskId** | **int**| task ID | |

### Return type

void (empty response body)

### Authorization

[cookie](../../README.md#cookie), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectProjectIdTemplatesGet()`

```php
projectProjectIdTemplatesGet($projectId, $sort, $order): \ClientAPI\Semaphore\Model\Template[]
```

Get template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookie
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

// Configure API key authorization: bearer
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ClientAPI\Semaphore\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int | Project ID
$sort = 'sort_example'; // string | sorting name
$order = 'order_example'; // string | ordering manner

try {
    $result = $apiInstance->projectProjectIdTemplatesGet($projectId, $sort, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectProjectIdTemplatesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**| Project ID | |
| **sort** | **string**| sorting name | |
| **order** | **string**| ordering manner | |

### Return type

[**\ClientAPI\Semaphore\Model\Template[]**](../Model/Template.md)

### Authorization

[cookie](../../README.md#cookie), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectProjectIdTemplatesPost()`

```php
projectProjectIdTemplatesPost($projectId, $template): \ClientAPI\Semaphore\Model\Template
```

create template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookie
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

// Configure API key authorization: bearer
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ClientAPI\Semaphore\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int | Project ID
$template = new \ClientAPI\Semaphore\Model\TemplateRequest(); // \ClientAPI\Semaphore\Model\TemplateRequest

try {
    $result = $apiInstance->projectProjectIdTemplatesPost($projectId, $template);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectProjectIdTemplatesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**| Project ID | |
| **template** | [**\ClientAPI\Semaphore\Model\TemplateRequest**](../Model/TemplateRequest.md)|  | |

### Return type

[**\ClientAPI\Semaphore\Model\Template**](../Model/Template.md)

### Authorization

[cookie](../../README.md#cookie), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectProjectIdTemplatesTemplateIdDelete()`

```php
projectProjectIdTemplatesTemplateIdDelete($projectId, $templateId)
```

Removes template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookie
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

// Configure API key authorization: bearer
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ClientAPI\Semaphore\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int | Project ID
$templateId = 56; // int | template ID

try {
    $apiInstance->projectProjectIdTemplatesTemplateIdDelete($projectId, $templateId);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectProjectIdTemplatesTemplateIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**| Project ID | |
| **templateId** | **int**| template ID | |

### Return type

void (empty response body)

### Authorization

[cookie](../../README.md#cookie), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectProjectIdTemplatesTemplateIdGet()`

```php
projectProjectIdTemplatesTemplateIdGet($projectId, $templateId): \ClientAPI\Semaphore\Model\Template
```

Get template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookie
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

// Configure API key authorization: bearer
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ClientAPI\Semaphore\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int | Project ID
$templateId = 56; // int | template ID

try {
    $result = $apiInstance->projectProjectIdTemplatesTemplateIdGet($projectId, $templateId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectProjectIdTemplatesTemplateIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**| Project ID | |
| **templateId** | **int**| template ID | |

### Return type

[**\ClientAPI\Semaphore\Model\Template**](../Model/Template.md)

### Authorization

[cookie](../../README.md#cookie), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectProjectIdTemplatesTemplateIdPut()`

```php
projectProjectIdTemplatesTemplateIdPut($projectId, $templateId, $template)
```

Updates template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookie
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

// Configure API key authorization: bearer
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ClientAPI\Semaphore\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int | Project ID
$templateId = 56; // int | template ID
$template = new \ClientAPI\Semaphore\Model\TemplateRequest(); // \ClientAPI\Semaphore\Model\TemplateRequest

try {
    $apiInstance->projectProjectIdTemplatesTemplateIdPut($projectId, $templateId, $template);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectProjectIdTemplatesTemplateIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**| Project ID | |
| **templateId** | **int**| template ID | |
| **template** | [**\ClientAPI\Semaphore\Model\TemplateRequest**](../Model/TemplateRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[cookie](../../README.md#cookie), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectProjectIdUsersGet()`

```php
projectProjectIdUsersGet($projectId, $sort, $order): \ClientAPI\Semaphore\Model\ProjectUser[]
```

Get users linked to project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookie
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

// Configure API key authorization: bearer
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ClientAPI\Semaphore\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int | Project ID
$sort = email; // string | sorting name
$order = desc; // string | ordering manner

try {
    $result = $apiInstance->projectProjectIdUsersGet($projectId, $sort, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectProjectIdUsersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**| Project ID | |
| **sort** | **string**| sorting name | |
| **order** | **string**| ordering manner | |

### Return type

[**\ClientAPI\Semaphore\Model\ProjectUser[]**](../Model/ProjectUser.md)

### Authorization

[cookie](../../README.md#cookie), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectProjectIdUsersPost()`

```php
projectProjectIdUsersPost($projectId, $user)
```

Link user to project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookie
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

// Configure API key authorization: bearer
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ClientAPI\Semaphore\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int | Project ID
$user = new \ClientAPI\Semaphore\Model\ProjectProjectIdUsersPostRequest(); // \ClientAPI\Semaphore\Model\ProjectProjectIdUsersPostRequest

try {
    $apiInstance->projectProjectIdUsersPost($projectId, $user);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectProjectIdUsersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**| Project ID | |
| **user** | [**\ClientAPI\Semaphore\Model\ProjectProjectIdUsersPostRequest**](../Model/ProjectProjectIdUsersPostRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[cookie](../../README.md#cookie), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectProjectIdUsersUserIdDelete()`

```php
projectProjectIdUsersUserIdDelete($projectId, $userId)
```

Removes user from project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookie
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

// Configure API key authorization: bearer
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ClientAPI\Semaphore\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int | Project ID
$userId = 56; // int | User ID

try {
    $apiInstance->projectProjectIdUsersUserIdDelete($projectId, $userId);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectProjectIdUsersUserIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**| Project ID | |
| **userId** | **int**| User ID | |

### Return type

void (empty response body)

### Authorization

[cookie](../../README.md#cookie), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectProjectIdUsersUserIdPut()`

```php
projectProjectIdUsersUserIdPut($projectId, $userId, $projectUser)
```

Update user role

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookie
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

// Configure API key authorization: bearer
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ClientAPI\Semaphore\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int | Project ID
$userId = 56; // int | User ID
$projectUser = new \ClientAPI\Semaphore\Model\ProjectProjectIdUsersUserIdPutRequest(); // \ClientAPI\Semaphore\Model\ProjectProjectIdUsersUserIdPutRequest

try {
    $apiInstance->projectProjectIdUsersUserIdPut($projectId, $userId, $projectUser);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectProjectIdUsersUserIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**| Project ID | |
| **userId** | **int**| User ID | |
| **projectUser** | [**\ClientAPI\Semaphore\Model\ProjectProjectIdUsersUserIdPutRequest**](../Model/ProjectProjectIdUsersUserIdPutRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[cookie](../../README.md#cookie), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectProjectIdViewsGet()`

```php
projectProjectIdViewsGet($projectId): \ClientAPI\Semaphore\Model\View[]
```

Get view

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookie
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

// Configure API key authorization: bearer
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ClientAPI\Semaphore\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int | Project ID

try {
    $result = $apiInstance->projectProjectIdViewsGet($projectId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectProjectIdViewsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**| Project ID | |

### Return type

[**\ClientAPI\Semaphore\Model\View[]**](../Model/View.md)

### Authorization

[cookie](../../README.md#cookie), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectProjectIdViewsPost()`

```php
projectProjectIdViewsPost($projectId, $view): \ClientAPI\Semaphore\Model\View
```

create view

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookie
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

// Configure API key authorization: bearer
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ClientAPI\Semaphore\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int | Project ID
$view = new \ClientAPI\Semaphore\Model\ViewRequest(); // \ClientAPI\Semaphore\Model\ViewRequest

try {
    $result = $apiInstance->projectProjectIdViewsPost($projectId, $view);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectProjectIdViewsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**| Project ID | |
| **view** | [**\ClientAPI\Semaphore\Model\ViewRequest**](../Model/ViewRequest.md)|  | |

### Return type

[**\ClientAPI\Semaphore\Model\View**](../Model/View.md)

### Authorization

[cookie](../../README.md#cookie), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectProjectIdViewsViewIdDelete()`

```php
projectProjectIdViewsViewIdDelete($projectId, $viewId)
```

Removes view

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookie
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

// Configure API key authorization: bearer
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ClientAPI\Semaphore\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int | Project ID
$viewId = 56; // int | view ID

try {
    $apiInstance->projectProjectIdViewsViewIdDelete($projectId, $viewId);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectProjectIdViewsViewIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**| Project ID | |
| **viewId** | **int**| view ID | |

### Return type

void (empty response body)

### Authorization

[cookie](../../README.md#cookie), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectProjectIdViewsViewIdGet()`

```php
projectProjectIdViewsViewIdGet($projectId, $viewId): \ClientAPI\Semaphore\Model\View
```

Get view

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookie
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

// Configure API key authorization: bearer
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ClientAPI\Semaphore\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int | Project ID
$viewId = 56; // int | view ID

try {
    $result = $apiInstance->projectProjectIdViewsViewIdGet($projectId, $viewId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectProjectIdViewsViewIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**| Project ID | |
| **viewId** | **int**| view ID | |

### Return type

[**\ClientAPI\Semaphore\Model\View**](../Model/View.md)

### Authorization

[cookie](../../README.md#cookie), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectProjectIdViewsViewIdPut()`

```php
projectProjectIdViewsViewIdPut($projectId, $viewId, $view)
```

Updates view

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookie
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

// Configure API key authorization: bearer
$config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ClientAPI\Semaphore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ClientAPI\Semaphore\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int | Project ID
$viewId = 56; // int | view ID
$view = new \ClientAPI\Semaphore\Model\ViewRequest(); // \ClientAPI\Semaphore\Model\ViewRequest

try {
    $apiInstance->projectProjectIdViewsViewIdPut($projectId, $viewId, $view);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectProjectIdViewsViewIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**| Project ID | |
| **viewId** | **int**| view ID | |
| **view** | [**\ClientAPI\Semaphore\Model\ViewRequest**](../Model/ViewRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[cookie](../../README.md#cookie), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
