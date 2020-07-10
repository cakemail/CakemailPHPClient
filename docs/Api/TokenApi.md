# Cakemail\TokenApi

All URIs are relative to *https://api.cakemail.dev*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createToken**](TokenApi.md#createToken) | **POST** /token | Create a token
[**refreshToken**](TokenApi.md#refreshToken) | **PUT** /token | Refresh a token



## createToken

> \Cakemail\Model\TokenResponse createToken($username, $password, $grant_type, $account_id)

Create a token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Cakemail\Api\TokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$username = 'username_example'; // string | 
$password = 'password_example'; // string | 
$grant_type = 'password'; // string | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->createToken($username, $password, $grant_type, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokenApi->createToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | [**string**](../Model/string.md)|  |
 **password** | **string**|  |
 **grant_type** | **string**|  | [optional] [default to &#39;password&#39;]
 **account_id** | **int**|  | [optional]

### Return type

[**\Cakemail\Model\TokenResponse**](../Model/TokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/x-www-form-urlencoded
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## refreshToken

> \Cakemail\Model\TokenResponse refreshToken($refresh_token, $grant_type)

Refresh a token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Cakemail\Api\TokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$refresh_token = 'refresh_token_example'; // string | 
$grant_type = 'refresh_token'; // string | 

try {
    $result = $apiInstance->refreshToken($refresh_token, $grant_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokenApi->refreshToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **refresh_token** | **string**|  |
 **grant_type** | **string**|  | [optional] [default to &#39;refresh_token&#39;]

### Return type

[**\Cakemail\Model\TokenResponse**](../Model/TokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/x-www-form-urlencoded
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

