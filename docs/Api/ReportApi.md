# Cakemail\ReportApi

All URIs are relative to *https://api.cakemail.dev*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAccountStats**](ReportApi.md#getaccountstats) | **GET** /reports/accounts/{account_id} | Show an account report
[**getCampaignLinksStats**](ReportApi.md#getcampaignlinksstats) | **GET** /reports/campaigns/{campaign_id}/links | Show campaign links report
[**getCampaignStats**](ReportApi.md#getcampaignstats) | **GET** /reports/campaigns/{campaign_id} | Show campaign report
[**getEmailsStats**](ReportApi.md#getemailsstats) | **GET** /reports/emails | Show transactional email report
[**getListStats**](ReportApi.md#getliststats) | **GET** /reports/lists/{list_id} | Show list report
[**getSelfAccountStats**](ReportApi.md#getselfaccountstats) | **GET** /reports/accounts/self | Show my account report

# **getAccountStats**
> \Cakemail\Model\AccountStatsResponse getAccountStats($account_id, $start_time, $end_time)

Show an account report

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Cakemail\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 56; // int | 
$start_time = 56; // int | 
$end_time = 56; // int | 

try {
    $result = $apiInstance->getAccountStats($account_id, $start_time, $end_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->getAccountStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **int**|  |
 **start_time** | **int**|  |
 **end_time** | **int**|  |

### Return type

[**\Cakemail\Model\AccountStatsResponse**](../Model/AccountStatsResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCampaignLinksStats**
> \Cakemail\Model\CampaignLinksStatsResponse getCampaignLinksStats($campaign_id, $account_id, $start_time, $end_time, $page, $per_page, $with_count, $sort)

Show campaign links report

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Cakemail\Api\ReportApi(
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
$sort = "sort_example"; // string | Sort term and direction, using syntax `[-|+]term`.  Valid terms:   - `unique`   - `total`   - `link`

try {
    $result = $apiInstance->getCampaignLinksStats($campaign_id, $account_id, $start_time, $end_time, $page, $per_page, $with_count, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->getCampaignLinksStats: ', $e->getMessage(), PHP_EOL;
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
 **sort** | **string**| Sort term and direction, using syntax &#x60;[-|+]term&#x60;.  Valid terms:   - &#x60;unique&#x60;   - &#x60;total&#x60;   - &#x60;link&#x60; | [optional]

### Return type

[**\Cakemail\Model\CampaignLinksStatsResponse**](../Model/CampaignLinksStatsResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCampaignStats**
> \Cakemail\Model\CampaignStatsResponse getCampaignStats($campaign_id, $account_id)

Show campaign report

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Cakemail\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->getCampaignStats($campaign_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->getCampaignStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**|  |
 **account_id** | **int**|  | [optional]

### Return type

[**\Cakemail\Model\CampaignStatsResponse**](../Model/CampaignStatsResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailsStats**
> \Cakemail\Model\EmailStatsResponse getEmailsStats($start_time, $end_time, $account_id)

Show transactional email report

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Cakemail\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_time = 56; // int | 
$end_time = 56; // int | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->getEmailsStats($start_time, $end_time, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->getEmailsStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_time** | **int**|  |
 **end_time** | **int**|  |
 **account_id** | **int**|  | [optional]

### Return type

[**\Cakemail\Model\EmailStatsResponse**](../Model/EmailStatsResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getListStats**
> \Cakemail\Model\ListStatsResponse getListStats($list_id, $account_id)

Show list report

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Cakemail\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->getListStats($list_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->getListStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **int**|  |
 **account_id** | **int**|  | [optional]

### Return type

[**\Cakemail\Model\ListStatsResponse**](../Model/ListStatsResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSelfAccountStats**
> \Cakemail\Model\AccountStatsResponse getSelfAccountStats($start_time, $end_time)

Show my account report

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Cakemail\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_time = 56; // int | 
$end_time = 56; // int | 

try {
    $result = $apiInstance->getSelfAccountStats($start_time, $end_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->getSelfAccountStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_time** | **int**|  |
 **end_time** | **int**|  |

### Return type

[**\Cakemail\Model\AccountStatsResponse**](../Model/AccountStatsResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

