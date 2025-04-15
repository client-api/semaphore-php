# ClientAPI\Semaphore\UserApi

All URIs are relative to http://localhost:3000/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**userGet()**](UserApi.md#userGet) | **GET** /user/ | Fetch logged in user |
| [**userTokensApiTokenIdDelete()**](UserApi.md#userTokensApiTokenIdDelete) | **DELETE** /user/tokens/{api_token_id} | Expires API token |
| [**userTokensGet()**](UserApi.md#userTokensGet) | **GET** /user/tokens | Fetch API tokens for user |
| [**userTokensPost()**](UserApi.md#userTokensPost) | **POST** /user/tokens | Create an API token |
| [**usersGet()**](UserApi.md#usersGet) | **GET** /users | Fetches all users |
| [**usersPost()**](UserApi.md#usersPost) | **POST** /users | Creates a user |
| [**usersUserIdDelete()**](UserApi.md#usersUserIdDelete) | **DELETE** /users/{user_id}/ | Deletes user |
| [**usersUserIdGet()**](UserApi.md#usersUserIdGet) | **GET** /users/{user_id}/ | Fetches a user profile |
| [**usersUserIdPasswordPost()**](UserApi.md#usersUserIdPasswordPost) | **POST** /users/{user_id}/password | Updates user password |
| [**usersUserIdPut()**](UserApi.md#usersUserIdPut) | **PUT** /users/{user_id}/ | Updates user details |


## `userGet()`

```php
userGet(): \ClientAPI\Semaphore\Model\User
```

Fetch logged in user

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


$apiInstance = new ClientAPI\Semaphore\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->userGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ClientAPI\Semaphore\Model\User**](../Model/User.md)

### Authorization

[cookie](../../README.md#cookie), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userTokensApiTokenIdDelete()`

```php
userTokensApiTokenIdDelete($apiTokenId)
```

Expires API token

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


$apiInstance = new ClientAPI\Semaphore\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apiTokenId = kwofd61g93-yuqvex8efmhjkgnbxlo8mp1tin6spyhu=; // string

try {
    $apiInstance->userTokensApiTokenIdDelete($apiTokenId);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userTokensApiTokenIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **apiTokenId** | **string**|  | |

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

## `userTokensGet()`

```php
userTokensGet(): \ClientAPI\Semaphore\Model\APIToken[]
```

Fetch API tokens for user

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


$apiInstance = new ClientAPI\Semaphore\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->userTokensGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userTokensGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ClientAPI\Semaphore\Model\APIToken[]**](../Model/APIToken.md)

### Authorization

[cookie](../../README.md#cookie), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userTokensPost()`

```php
userTokensPost(): \ClientAPI\Semaphore\Model\APIToken
```

Create an API token

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


$apiInstance = new ClientAPI\Semaphore\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->userTokensPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userTokensPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ClientAPI\Semaphore\Model\APIToken**](../Model/APIToken.md)

### Authorization

[cookie](../../README.md#cookie), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersGet()`

```php
usersGet(): \ClientAPI\Semaphore\Model\User[]
```

Fetches all users

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


$apiInstance = new ClientAPI\Semaphore\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->usersGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->usersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ClientAPI\Semaphore\Model\User[]**](../Model/User.md)

### Authorization

[cookie](../../README.md#cookie), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersPost()`

```php
usersPost($user): \ClientAPI\Semaphore\Model\User
```

Creates a user

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


$apiInstance = new ClientAPI\Semaphore\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user = new \ClientAPI\Semaphore\Model\UserRequest(); // \ClientAPI\Semaphore\Model\UserRequest

try {
    $result = $apiInstance->usersPost($user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->usersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user** | [**\ClientAPI\Semaphore\Model\UserRequest**](../Model/UserRequest.md)|  | |

### Return type

[**\ClientAPI\Semaphore\Model\User**](../Model/User.md)

### Authorization

[cookie](../../README.md#cookie), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersUserIdDelete()`

```php
usersUserIdDelete($userId)
```

Deletes user

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


$apiInstance = new ClientAPI\Semaphore\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = 56; // int | User ID

try {
    $apiInstance->usersUserIdDelete($userId);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->usersUserIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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

## `usersUserIdGet()`

```php
usersUserIdGet($userId): \ClientAPI\Semaphore\Model\User
```

Fetches a user profile

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


$apiInstance = new ClientAPI\Semaphore\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = 56; // int | User ID

try {
    $result = $apiInstance->usersUserIdGet($userId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->usersUserIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **userId** | **int**| User ID | |

### Return type

[**\ClientAPI\Semaphore\Model\User**](../Model/User.md)

### Authorization

[cookie](../../README.md#cookie), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersUserIdPasswordPost()`

```php
usersUserIdPasswordPost($userId, $password)
```

Updates user password

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


$apiInstance = new ClientAPI\Semaphore\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = 56; // int | User ID
$password = new \ClientAPI\Semaphore\Model\UsersUserIdPasswordPostRequest(); // \ClientAPI\Semaphore\Model\UsersUserIdPasswordPostRequest

try {
    $apiInstance->usersUserIdPasswordPost($userId, $password);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->usersUserIdPasswordPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **userId** | **int**| User ID | |
| **password** | [**\ClientAPI\Semaphore\Model\UsersUserIdPasswordPostRequest**](../Model/UsersUserIdPasswordPostRequest.md)|  | |

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

## `usersUserIdPut()`

```php
usersUserIdPut($userId, $user)
```

Updates user details

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


$apiInstance = new ClientAPI\Semaphore\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = 56; // int | User ID
$user = new \ClientAPI\Semaphore\Model\UserPutRequest(); // \ClientAPI\Semaphore\Model\UserPutRequest

try {
    $apiInstance->usersUserIdPut($userId, $user);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->usersUserIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **userId** | **int**| User ID | |
| **user** | [**\ClientAPI\Semaphore\Model\UserPutRequest**](../Model/UserPutRequest.md)|  | |

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
