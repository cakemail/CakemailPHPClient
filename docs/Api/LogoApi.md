# Cakemail\LogoApi

All URIs are relative to *https://api.cakemail.dev*

Method | HTTP request | Description
------------- | ------------- | -------------
[**uploadDefaultLogo**](LogoApi.md#uploadDefaultLogo) | **PUT** /brands/default/logos/default | Upload a default logo



## uploadDefaultLogo

> \Cakemail\Model\UploadLogoResponse uploadDefaultLogo($upload_logo, $account_id)

Upload a default logo

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Cakemail\Api\LogoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$upload_logo = new \Cakemail\Model\UploadLogo(); // \Cakemail\Model\UploadLogo | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->uploadDefaultLogo($upload_logo, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogoApi->uploadDefaultLogo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **upload_logo** | [**\Cakemail\Model\UploadLogo**](../Model/UploadLogo.md)|  |
 **account_id** | **int**|  | [optional]

### Return type

[**\Cakemail\Model\UploadLogoResponse**](../Model/UploadLogoResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

