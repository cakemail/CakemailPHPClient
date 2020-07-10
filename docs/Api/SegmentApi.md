# Cakemail\SegmentApi

All URIs are relative to *https://api.cakemail.dev*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSegment**](SegmentApi.md#createSegment) | **POST** /lists/{list_id}/segments | Create a segment
[**deleteSegment**](SegmentApi.md#deleteSegment) | **DELETE** /lists/{list_id}/segments/{segment_id} | Delete a segment
[**getSegment**](SegmentApi.md#getSegment) | **GET** /lists/{list_id}/segments/{segment_id} | Show a segment details
[**listSegments**](SegmentApi.md#listSegments) | **GET** /lists/{list_id}/segments | Show all segments
[**patchSegment**](SegmentApi.md#patchSegment) | **PATCH** /lists/{list_id}/segments/{segment_id} | Update a segment



## createSegment

> \Cakemail\Model\CreateSegmentResponse createSegment($list_id, $segment, $account_id)

Create a segment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Cakemail\Api\SegmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | 
$segment = new \Cakemail\Model\Segment(); // \Cakemail\Model\Segment | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->createSegment($list_id, $segment, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SegmentApi->createSegment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **int**|  |
 **segment** | [**\Cakemail\Model\Segment**](../Model/Segment.md)|  |
 **account_id** | **int**|  | [optional]

### Return type

[**\Cakemail\Model\CreateSegmentResponse**](../Model/CreateSegmentResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteSegment

> \Cakemail\Model\DeleteSegmentResponse deleteSegment($list_id, $segment_id, $account_id)

Delete a segment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Cakemail\Api\SegmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | 
$segment_id = 56; // int | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->deleteSegment($list_id, $segment_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SegmentApi->deleteSegment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **int**|  |
 **segment_id** | **int**|  |
 **account_id** | **int**|  | [optional]

### Return type

[**\Cakemail\Model\DeleteSegmentResponse**](../Model/DeleteSegmentResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getSegment

> \Cakemail\Model\SegmentResponse getSegment($list_id, $segment_id, $account_id)

Show a segment details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Cakemail\Api\SegmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | 
$segment_id = 56; // int | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->getSegment($list_id, $segment_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SegmentApi->getSegment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **int**|  |
 **segment_id** | **int**|  |
 **account_id** | **int**|  | [optional]

### Return type

[**\Cakemail\Model\SegmentResponse**](../Model/SegmentResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listSegments

> \Cakemail\Model\SegmentsResponse listSegments($list_id, $account_id, $page, $per_page, $with_count)

Show all segments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Cakemail\Api\SegmentApi(
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
    $result = $apiInstance->listSegments($list_id, $account_id, $page, $per_page, $with_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SegmentApi->listSegments: ', $e->getMessage(), PHP_EOL;
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

[**\Cakemail\Model\SegmentsResponse**](../Model/SegmentsResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## patchSegment

> \Cakemail\Model\PatchSegmentResponse patchSegment($list_id, $segment_id, $update_segment, $account_id)

Update a segment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Cakemail\Api\SegmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | 
$segment_id = 56; // int | 
$update_segment = new \Cakemail\Model\UpdateSegment(); // \Cakemail\Model\UpdateSegment | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->patchSegment($list_id, $segment_id, $update_segment, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SegmentApi->patchSegment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **int**|  |
 **segment_id** | **int**|  |
 **update_segment** | [**\Cakemail\Model\UpdateSegment**](../Model/UpdateSegment.md)|  |
 **account_id** | **int**|  | [optional]

### Return type

[**\Cakemail\Model\PatchSegmentResponse**](../Model/PatchSegmentResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

