# Cakemail\CustomAttributeApi

All URIs are relative to *https://api.cakemail.dev*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCustomAttribute**](CustomAttributeApi.md#createCustomAttribute) | **POST** /lists/{list_id}/custom-attributes | Create a custom attribute
[**deleteCustomAttribute**](CustomAttributeApi.md#deleteCustomAttribute) | **DELETE** /lists/{list_id}/custom-attributes/{name} | Delete a custom attribute
[**getCustomAttribute**](CustomAttributeApi.md#getCustomAttribute) | **GET** /lists/{list_id}/custom-attributes/{name} | Show a custom attribute
[**listCustomAttributes**](CustomAttributeApi.md#listCustomAttributes) | **GET** /lists/{list_id}/custom-attributes | Show all custom attributes



## createCustomAttribute

> \Cakemail\Model\CreateAttributeResponse createCustomAttribute($list_id, $create_custom_attribute, $account_id)

Create a custom attribute

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Cakemail\Api\CustomAttributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | 
$create_custom_attribute = new \Cakemail\Model\CreateCustomAttribute(); // \Cakemail\Model\CreateCustomAttribute | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->createCustomAttribute($list_id, $create_custom_attribute, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomAttributeApi->createCustomAttribute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **int**|  |
 **create_custom_attribute** | [**\Cakemail\Model\CreateCustomAttribute**](../Model/CreateCustomAttribute.md)|  |
 **account_id** | **int**|  | [optional]

### Return type

[**\Cakemail\Model\CreateAttributeResponse**](../Model/CreateAttributeResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteCustomAttribute

> \Cakemail\Model\DeleteCustomAttributeResponse deleteCustomAttribute($list_id, $name, $account_id)

Delete a custom attribute

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Cakemail\Api\CustomAttributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | 
$name = 'name_example'; // string | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->deleteCustomAttribute($list_id, $name, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomAttributeApi->deleteCustomAttribute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **int**|  |
 **name** | **string**|  |
 **account_id** | **int**|  | [optional]

### Return type

[**\Cakemail\Model\DeleteCustomAttributeResponse**](../Model/DeleteCustomAttributeResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCustomAttribute

> \Cakemail\Model\CustomAttributeResponse getCustomAttribute($list_id, $name, $account_id)

Show a custom attribute

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Cakemail\Api\CustomAttributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | 
$name = 'name_example'; // string | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->getCustomAttribute($list_id, $name, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomAttributeApi->getCustomAttribute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **int**|  |
 **name** | **string**|  |
 **account_id** | **int**|  | [optional]

### Return type

[**\Cakemail\Model\CustomAttributeResponse**](../Model/CustomAttributeResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listCustomAttributes

> \Cakemail\Model\CustomAttributesResponse listCustomAttributes($list_id, $account_id, $page, $per_page, $with_count)

Show all custom attributes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Cakemail\Api\CustomAttributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | 
$account_id = 56; // int | 
$page = 1; // int | 
$per_page = 50; // int | 
$with_count = false; // bool | 

try {
    $result = $apiInstance->listCustomAttributes($list_id, $account_id, $page, $per_page, $with_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomAttributeApi->listCustomAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **int**|  |
 **account_id** | **int**|  | [optional]
 **page** | **int**|  | [optional] [default to 1]
 **per_page** | **int**|  | [optional] [default to 50]
 **with_count** | **bool**|  | [optional] [default to false]

### Return type

[**\Cakemail\Model\CustomAttributesResponse**](../Model/CustomAttributesResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

