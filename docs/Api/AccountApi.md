# Cakemail\AccountApi

All URIs are relative to *https://api.cakemail.dev*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSelfAccount**](AccountApi.md#getSelfAccount) | **GET** /accounts/self | Show my account details
[**patchSelfAccount**](AccountApi.md#patchSelfAccount) | **PATCH** /accounts/self | Update my account



## getSelfAccount

> \Cakemail\Model\AccountResponse getSelfAccount()

Show my account details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Cakemail\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getSelfAccount();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getSelfAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Cakemail\Model\AccountResponse**](../Model/AccountResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## patchSelfAccount

> \Cakemail\Model\AccountResponse patchSelfAccount($patch_self_account)

Update my account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Cakemail\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$patch_self_account = new \Cakemail\Model\PatchSelfAccount(); // \Cakemail\Model\PatchSelfAccount | 

try {
    $result = $apiInstance->patchSelfAccount($patch_self_account);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->patchSelfAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **patch_self_account** | [**\Cakemail\Model\PatchSelfAccount**](../Model/PatchSelfAccount.md)|  |

### Return type

[**\Cakemail\Model\AccountResponse**](../Model/AccountResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

