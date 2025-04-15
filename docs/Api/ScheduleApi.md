# ClientAPI\Semaphore\ScheduleApi

All URIs are relative to http://localhost:3000/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**projectProjectIdSchedulesPost()**](ScheduleApi.md#projectProjectIdSchedulesPost) | **POST** /project/{project_id}/schedules | create schedule |
| [**projectProjectIdSchedulesScheduleIdDelete()**](ScheduleApi.md#projectProjectIdSchedulesScheduleIdDelete) | **DELETE** /project/{project_id}/schedules/{schedule_id} | Deletes schedule |
| [**projectProjectIdSchedulesScheduleIdGet()**](ScheduleApi.md#projectProjectIdSchedulesScheduleIdGet) | **GET** /project/{project_id}/schedules/{schedule_id} | Get schedule |
| [**projectProjectIdSchedulesScheduleIdPut()**](ScheduleApi.md#projectProjectIdSchedulesScheduleIdPut) | **PUT** /project/{project_id}/schedules/{schedule_id} | Updates schedule |


## `projectProjectIdSchedulesPost()`

```php
projectProjectIdSchedulesPost($projectId, $schedule): \ClientAPI\Semaphore\Model\Schedule
```

create schedule

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


$apiInstance = new ClientAPI\Semaphore\Api\ScheduleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int | Project ID
$schedule = new \ClientAPI\Semaphore\Model\ScheduleRequest(); // \ClientAPI\Semaphore\Model\ScheduleRequest

try {
    $result = $apiInstance->projectProjectIdSchedulesPost($projectId, $schedule);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduleApi->projectProjectIdSchedulesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**| Project ID | |
| **schedule** | [**\ClientAPI\Semaphore\Model\ScheduleRequest**](../Model/ScheduleRequest.md)|  | |

### Return type

[**\ClientAPI\Semaphore\Model\Schedule**](../Model/Schedule.md)

### Authorization

[cookie](../../README.md#cookie), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectProjectIdSchedulesScheduleIdDelete()`

```php
projectProjectIdSchedulesScheduleIdDelete($projectId, $scheduleId)
```

Deletes schedule

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


$apiInstance = new ClientAPI\Semaphore\Api\ScheduleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int | Project ID
$scheduleId = 56; // int | schedule ID

try {
    $apiInstance->projectProjectIdSchedulesScheduleIdDelete($projectId, $scheduleId);
} catch (Exception $e) {
    echo 'Exception when calling ScheduleApi->projectProjectIdSchedulesScheduleIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**| Project ID | |
| **scheduleId** | **int**| schedule ID | |

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

## `projectProjectIdSchedulesScheduleIdGet()`

```php
projectProjectIdSchedulesScheduleIdGet($projectId, $scheduleId): \ClientAPI\Semaphore\Model\Schedule
```

Get schedule

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


$apiInstance = new ClientAPI\Semaphore\Api\ScheduleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int | Project ID
$scheduleId = 56; // int | schedule ID

try {
    $result = $apiInstance->projectProjectIdSchedulesScheduleIdGet($projectId, $scheduleId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduleApi->projectProjectIdSchedulesScheduleIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**| Project ID | |
| **scheduleId** | **int**| schedule ID | |

### Return type

[**\ClientAPI\Semaphore\Model\Schedule**](../Model/Schedule.md)

### Authorization

[cookie](../../README.md#cookie), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectProjectIdSchedulesScheduleIdPut()`

```php
projectProjectIdSchedulesScheduleIdPut($projectId, $scheduleId, $schedule)
```

Updates schedule

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


$apiInstance = new ClientAPI\Semaphore\Api\ScheduleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int | Project ID
$scheduleId = 56; // int | schedule ID
$schedule = new \ClientAPI\Semaphore\Model\ScheduleRequest(); // \ClientAPI\Semaphore\Model\ScheduleRequest

try {
    $apiInstance->projectProjectIdSchedulesScheduleIdPut($projectId, $scheduleId, $schedule);
} catch (Exception $e) {
    echo 'Exception when calling ScheduleApi->projectProjectIdSchedulesScheduleIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**| Project ID | |
| **scheduleId** | **int**| schedule ID | |
| **schedule** | [**\ClientAPI\Semaphore\Model\ScheduleRequest**](../Model/ScheduleRequest.md)|  | |

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
