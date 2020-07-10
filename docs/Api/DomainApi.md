# Cakemail\DomainApi

All URIs are relative to *https://api.cakemail.dev*

Method | HTTP request | Description
------------- | ------------- | -------------
[**patchDomains**](DomainApi.md#patchDomains) | **PATCH** /brands/default/domains/default | Change domains
[**showDomains**](DomainApi.md#showDomains) | **GET** /brands/default/domains/default | Show domains
[**validateDomains**](DomainApi.md#validateDomains) | **GET** /brands/default/domains/default/validate | Validate domains



## patchDomains

> \Cakemail\Model\PatchDomainsResponse patchDomains($patch_domains, $account_id)

Change domains

Change the Tracking and Bounce domains.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Cakemail\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$patch_domains = new \Cakemail\Model\PatchDomains(); // \Cakemail\Model\PatchDomains | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->patchDomains($patch_domains, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->patchDomains: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **patch_domains** | [**\Cakemail\Model\PatchDomains**](../Model/PatchDomains.md)|  |
 **account_id** | **int**|  | [optional]

### Return type

[**\Cakemail\Model\PatchDomainsResponse**](../Model/PatchDomainsResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## showDomains

> \Cakemail\Model\DomainsResponse showDomains($account_id)

Show domains

Show the Tracking and Bounce domains.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Cakemail\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 56; // int | 

try {
    $result = $apiInstance->showDomains($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->showDomains: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **int**|  | [optional]

### Return type

[**\Cakemail\Model\DomainsResponse**](../Model/DomainsResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## validateDomains

> \Cakemail\Model\ValidateDomainsResponse validateDomains($account_id)

Validate domains

Validate and return the DNS entries for the Tracking and the Bounce domains.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Cakemail\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 56; // int | 

try {
    $result = $apiInstance->validateDomains($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->validateDomains: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **int**|  | [optional]

### Return type

[**\Cakemail\Model\ValidateDomainsResponse**](../Model/ValidateDomainsResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

