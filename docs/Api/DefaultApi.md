# ClientAPI\Semaphore\DefaultApi

All URIs are relative to http://localhost:3000/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**eventsGet()**](DefaultApi.md#eventsGet) | **GET** /events | Get Events related to Semaphore and projects you are part of |
| [**eventsLastGet()**](DefaultApi.md#eventsLastGet) | **GET** /events/last | Get last 200 Events related to Semaphore and projects you are part of |
| [**infoGet()**](DefaultApi.md#infoGet) | **GET** /info | Fetches information about semaphore |
| [**pingGet()**](DefaultApi.md#pingGet) | **GET** /ping | PING test |
| [**wsGet()**](DefaultApi.md#wsGet) | **GET** /ws | Websocket handler |


## `eventsGet()`

```php
eventsGet(): \ClientAPI\Semaphore\Model\Event[]
```

Get Events related to Semaphore and projects you are part of

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


$apiInstance = new ClientAPI\Semaphore\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->eventsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->eventsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `eventsLastGet()`

```php
eventsLastGet(): \ClientAPI\Semaphore\Model\Event[]
```

Get last 200 Events related to Semaphore and projects you are part of

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


$apiInstance = new ClientAPI\Semaphore\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->eventsLastGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->eventsLastGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `infoGet()`

```php
infoGet(): \ClientAPI\Semaphore\Model\InfoType
```

Fetches information about semaphore

you must be authenticated to use this

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


$apiInstance = new ClientAPI\Semaphore\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->infoGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->infoGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ClientAPI\Semaphore\Model\InfoType**](../Model/InfoType.md)

### Authorization

[cookie](../../README.md#cookie), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pingGet()`

```php
pingGet(): string
```

PING test

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ClientAPI\Semaphore\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->pingGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->pingGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wsGet()`

```php
wsGet()
```

Websocket handler

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


$apiInstance = new ClientAPI\Semaphore\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->wsGet();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->wsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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
