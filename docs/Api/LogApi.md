# Cakemail\LogApi

All URIs are relative to *https://api.cakemail.dev*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCampaignLogs**](LogApi.md#getcampaignlogs) | **GET** /logs/campaigns/{campaign_id} | Show campaign logs
[**getEmailLogs**](LogApi.md#getemaillogs) | **GET** /logs/emails | Show transactional email logs
[**getListLogs**](LogApi.md#getlistlogs) | **GET** /logs/lists/{list_id} | Show list logs

# **getCampaignLogs**
> \Cakemail\Model\CampaignLogsResponse getCampaignLogs($campaign_id, $account_id, $start_time, $end_time, $page, $per_page, $with_count, $filter, $sort)

Show campaign logs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Cakemail\Api\LogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | 
$account_id = 56; // int | 
$start_time = 56; // int | 
$end_time = 56; // int | 
$page = 1; // int | 
$per_page = 50; // int | 
$with_count = false; // bool | 
$filter = "filter_example"; // string | Valid Terms:   - `additional_info`   - `link_id`   - `contact_id`   - `email`   - `uniques`   - `log_id`   - `totals`   - `type`  Valid Operators:   - `==`  Query separator:   - `;`
$sort = "sort_example"; // string | Sort term and direction, using syntax `[-|+]term`.  Valid terms:   - `time`   - `log_id`

try {
    $result = $apiInstance->getCampaignLogs($campaign_id, $account_id, $start_time, $end_time, $page, $per_page, $with_count, $filter, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogApi->getCampaignLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**|  |
 **account_id** | **int**|  | [optional]
 **start_time** | **int**|  | [optional]
 **end_time** | **int**|  | [optional]
 **page** | **int**|  | [optional] [default to 1]
 **per_page** | **int**|  | [optional] [default to 50]
 **with_count** | **bool**|  | [optional] [default to false]
 **filter** | **string**| Valid Terms:   - &#x60;additional_info&#x60;   - &#x60;link_id&#x60;   - &#x60;contact_id&#x60;   - &#x60;email&#x60;   - &#x60;uniques&#x60;   - &#x60;log_id&#x60;   - &#x60;totals&#x60;   - &#x60;type&#x60;  Valid Operators:   - &#x60;&#x3D;&#x3D;&#x60;  Query separator:   - &#x60;;&#x60; | [optional]
 **sort** | **string**| Sort term and direction, using syntax &#x60;[-|+]term&#x60;.  Valid terms:   - &#x60;time&#x60;   - &#x60;log_id&#x60; | [optional]

### Return type

[**\Cakemail\Model\CampaignLogsResponse**](../Model/CampaignLogsResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailLogs**
> \Cakemail\Model\EmailLogsResponse getEmailLogs($log_type, $account_id, $start_time, $end_time, $page, $per_page, $with_count, $filter)

Show transactional email logs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Cakemail\Api\LogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$log_type = "log_type_example"; // string | 
$account_id = 56; // int | 
$start_time = 56; // int | 
$end_time = 56; // int | 
$page = 1; // int | 
$per_page = 50; // int | 
$with_count = false; // bool | 
$filter = "filter_example"; // string | Valid Terms:   - `group_id`  Valid Operators:   - `==`  Query separator:   - `;`

try {
    $result = $apiInstance->getEmailLogs($log_type, $account_id, $start_time, $end_time, $page, $per_page, $with_count, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogApi->getEmailLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **log_type** | **string**|  |
 **account_id** | **int**|  | [optional]
 **start_time** | **int**|  | [optional]
 **end_time** | **int**|  | [optional]
 **page** | **int**|  | [optional] [default to 1]
 **per_page** | **int**|  | [optional] [default to 50]
 **with_count** | **bool**|  | [optional] [default to false]
 **filter** | **string**| Valid Terms:   - &#x60;group_id&#x60;  Valid Operators:   - &#x60;&#x3D;&#x3D;&#x60;  Query separator:   - &#x60;;&#x60; | [optional]

### Return type

[**\Cakemail\Model\EmailLogsResponse**](../Model/EmailLogsResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getListLogs**
> \Cakemail\Model\ListLogsResponse getListLogs($list_id, $account_id, $start_time, $end_time, $page, $per_page, $with_count, $filter)

Show list logs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Cakemail\Api\LogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | 
$account_id = 56; // int | 
$start_time = 56; // int | 
$end_time = 56; // int | 
$page = 1; // int | 
$per_page = 50; // int | 
$with_count = false; // bool | 
$filter = "filter_example"; // string | Valid Terms:   - `additional_info`   - `contact_id`   - `email`   - `uniques`   - `track_id`   - `log_id`   - `start_id`   - `end_id`   - `totals`   - `type`  Valid Operators:   - `==`  Query separator:   - `;`

try {
    $result = $apiInstance->getListLogs($list_id, $account_id, $start_time, $end_time, $page, $per_page, $with_count, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogApi->getListLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **int**|  |
 **account_id** | **int**|  | [optional]
 **start_time** | **int**|  | [optional]
 **end_time** | **int**|  | [optional]
 **page** | **int**|  | [optional] [default to 1]
 **per_page** | **int**|  | [optional] [default to 50]
 **with_count** | **bool**|  | [optional] [default to false]
 **filter** | **string**| Valid Terms:   - &#x60;additional_info&#x60;   - &#x60;contact_id&#x60;   - &#x60;email&#x60;   - &#x60;uniques&#x60;   - &#x60;track_id&#x60;   - &#x60;log_id&#x60;   - &#x60;start_id&#x60;   - &#x60;end_id&#x60;   - &#x60;totals&#x60;   - &#x60;type&#x60;  Valid Operators:   - &#x60;&#x3D;&#x3D;&#x60;  Query separator:   - &#x60;;&#x60; | [optional]

### Return type

[**\Cakemail\Model\ListLogsResponse**](../Model/ListLogsResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

