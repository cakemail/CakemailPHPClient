# Cakemail\TokenApi

All URIs are relative to *https://api.cakemail.dev*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createToken**](TokenApi.md#createtoken) | **POST** /token | Create a token
[**refreshToken**](TokenApi.md#refreshtoken) | **PUT** /token | Refresh a token

# **createToken**
> \Cakemail\Model\TokenResponse createToken($grant_type, $username, $password, $account_id)

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
$grant_type = "grant_type_example"; // string | 
$username = "username_example"; // string | 
$password = "password_example"; // string | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->createToken($grant_type, $username, $password, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokenApi->createToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **grant_type** | **string**|  |
 **username** | **string**|  |
 **password** | **string**|  |
 **account_id** | **int**|  |

### Return type

[**\Cakemail\Model\TokenResponse**](../Model/TokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refreshToken**
> \Cakemail\Model\TokenResponse refreshToken($grant_type, $refresh_token)

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
$grant_type = "grant_type_example"; // string | 
$refresh_token = "refresh_token_example"; // string | 

try {
    $result = $apiInstance->refreshToken($grant_type, $refresh_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokenApi->refreshToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **grant_type** | **string**|  |
 **refresh_token** | **string**|  |

### Return type

[**\Cakemail\Model\TokenResponse**](../Model/TokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

