# ClientAPI\Semaphore\IntegrationApi

All URIs are relative to http://localhost:3000/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**projectProjectIdIntegrationsIntegrationIdMatchersGet()**](IntegrationApi.md#projectProjectIdIntegrationsIntegrationIdMatchersGet) | **GET** /project/{project_id}/integrations/{integration_id}/matchers | Get Integration Matcher linked to integration extractor |
| [**projectProjectIdIntegrationsIntegrationIdMatchersMatcherIdDelete()**](IntegrationApi.md#projectProjectIdIntegrationsIntegrationIdMatchersMatcherIdDelete) | **DELETE** /project/{project_id}/integrations/{integration_id}/matchers/{matcher_id} | Removes integration matcher |
| [**projectProjectIdIntegrationsIntegrationIdMatchersMatcherIdPut()**](IntegrationApi.md#projectProjectIdIntegrationsIntegrationIdMatchersMatcherIdPut) | **PUT** /project/{project_id}/integrations/{integration_id}/matchers/{matcher_id} | Updates Integration Matcher |
| [**projectProjectIdIntegrationsIntegrationIdValuesExtractvalueIdDelete()**](IntegrationApi.md#projectProjectIdIntegrationsIntegrationIdValuesExtractvalueIdDelete) | **DELETE** /project/{project_id}/integrations/{integration_id}/values/{extractvalue_id} | Removes integration extract value |
| [**projectProjectIdIntegrationsIntegrationIdValuesExtractvalueIdPut()**](IntegrationApi.md#projectProjectIdIntegrationsIntegrationIdValuesExtractvalueIdPut) | **PUT** /project/{project_id}/integrations/{integration_id}/values/{extractvalue_id} | Updates Integration ExtractValue |
| [**projectProjectIdIntegrationsIntegrationIdValuesGet()**](IntegrationApi.md#projectProjectIdIntegrationsIntegrationIdValuesGet) | **GET** /project/{project_id}/integrations/{integration_id}/values | Get Integration Extracted Values linked to integration extractor |


## `projectProjectIdIntegrationsIntegrationIdMatchersGet()`

```php
projectProjectIdIntegrationsIntegrationIdMatchersGet($projectId, $integrationId): \ClientAPI\Semaphore\Model\IntegrationMatcher[]
```

Get Integration Matcher linked to integration extractor

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


$apiInstance = new ClientAPI\Semaphore\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int | Project ID
$integrationId = 56; // int | integration ID

try {
    $result = $apiInstance->projectProjectIdIntegrationsIntegrationIdMatchersGet($projectId, $integrationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->projectProjectIdIntegrationsIntegrationIdMatchersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**| Project ID | |
| **integrationId** | **int**| integration ID | |

### Return type

[**\ClientAPI\Semaphore\Model\IntegrationMatcher[]**](../Model/IntegrationMatcher.md)

### Authorization

[cookie](../../README.md#cookie), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectProjectIdIntegrationsIntegrationIdMatchersMatcherIdDelete()`

```php
projectProjectIdIntegrationsIntegrationIdMatchersMatcherIdDelete($projectId, $integrationId, $matcherId)
```

Removes integration matcher

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


$apiInstance = new ClientAPI\Semaphore\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int | Project ID
$integrationId = 56; // int | integration ID
$matcherId = 56; // int | matcher ID

try {
    $apiInstance->projectProjectIdIntegrationsIntegrationIdMatchersMatcherIdDelete($projectId, $integrationId, $matcherId);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->projectProjectIdIntegrationsIntegrationIdMatchersMatcherIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**| Project ID | |
| **integrationId** | **int**| integration ID | |
| **matcherId** | **int**| matcher ID | |

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

## `projectProjectIdIntegrationsIntegrationIdMatchersMatcherIdPut()`

```php
projectProjectIdIntegrationsIntegrationIdMatchersMatcherIdPut($projectId, $integrationId, $matcherId, $integrationMatcher)
```

Updates Integration Matcher

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


$apiInstance = new ClientAPI\Semaphore\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int | Project ID
$integrationId = 56; // int | integration ID
$matcherId = 56; // int | matcher ID
$integrationMatcher = new \ClientAPI\Semaphore\Model\IntegrationMatcherRequest(); // \ClientAPI\Semaphore\Model\IntegrationMatcherRequest

try {
    $apiInstance->projectProjectIdIntegrationsIntegrationIdMatchersMatcherIdPut($projectId, $integrationId, $matcherId, $integrationMatcher);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->projectProjectIdIntegrationsIntegrationIdMatchersMatcherIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**| Project ID | |
| **integrationId** | **int**| integration ID | |
| **matcherId** | **int**| matcher ID | |
| **integrationMatcher** | [**\ClientAPI\Semaphore\Model\IntegrationMatcherRequest**](../Model/IntegrationMatcherRequest.md)|  | |

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

## `projectProjectIdIntegrationsIntegrationIdValuesExtractvalueIdDelete()`

```php
projectProjectIdIntegrationsIntegrationIdValuesExtractvalueIdDelete($projectId, $integrationId, $extractvalueId)
```

Removes integration extract value

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


$apiInstance = new ClientAPI\Semaphore\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int | Project ID
$integrationId = 56; // int | integration ID
$extractvalueId = 56; // int | extractValue ID

try {
    $apiInstance->projectProjectIdIntegrationsIntegrationIdValuesExtractvalueIdDelete($projectId, $integrationId, $extractvalueId);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->projectProjectIdIntegrationsIntegrationIdValuesExtractvalueIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**| Project ID | |
| **integrationId** | **int**| integration ID | |
| **extractvalueId** | **int**| extractValue ID | |

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

## `projectProjectIdIntegrationsIntegrationIdValuesExtractvalueIdPut()`

```php
projectProjectIdIntegrationsIntegrationIdValuesExtractvalueIdPut($projectId, $integrationId, $extractvalueId, $integrationExtractValue)
```

Updates Integration ExtractValue

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


$apiInstance = new ClientAPI\Semaphore\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int | Project ID
$integrationId = 56; // int | integration ID
$extractvalueId = 56; // int | extractValue ID
$integrationExtractValue = new \ClientAPI\Semaphore\Model\IntegrationExtractValueRequest(); // \ClientAPI\Semaphore\Model\IntegrationExtractValueRequest

try {
    $apiInstance->projectProjectIdIntegrationsIntegrationIdValuesExtractvalueIdPut($projectId, $integrationId, $extractvalueId, $integrationExtractValue);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->projectProjectIdIntegrationsIntegrationIdValuesExtractvalueIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**| Project ID | |
| **integrationId** | **int**| integration ID | |
| **extractvalueId** | **int**| extractValue ID | |
| **integrationExtractValue** | [**\ClientAPI\Semaphore\Model\IntegrationExtractValueRequest**](../Model/IntegrationExtractValueRequest.md)|  | |

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

## `projectProjectIdIntegrationsIntegrationIdValuesGet()`

```php
projectProjectIdIntegrationsIntegrationIdValuesGet($projectId, $integrationId): \ClientAPI\Semaphore\Model\IntegrationExtractValue[]
```

Get Integration Extracted Values linked to integration extractor

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


$apiInstance = new ClientAPI\Semaphore\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int | Project ID
$integrationId = 56; // int | integration ID

try {
    $result = $apiInstance->projectProjectIdIntegrationsIntegrationIdValuesGet($projectId, $integrationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->projectProjectIdIntegrationsIntegrationIdValuesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**| Project ID | |
| **integrationId** | **int**| integration ID | |

### Return type

[**\ClientAPI\Semaphore\Model\IntegrationExtractValue[]**](../Model/IntegrationExtractValue.md)

### Authorization

[cookie](../../README.md#cookie), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
