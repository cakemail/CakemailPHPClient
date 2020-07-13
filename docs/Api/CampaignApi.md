# Cakemail\CampaignApi

All URIs are relative to *https://api.cakemail.dev*

Method | HTTP request | Description
------------- | ------------- | -------------
[**archiveCampaign**](CampaignApi.md#archivecampaign) | **POST** /campaigns/{campaign_id}/archive | Archive a campaign
[**cancelCampaign**](CampaignApi.md#cancelcampaign) | **POST** /campaigns/{campaign_id}/cancel | Cancel a campaign
[**createCampaign**](CampaignApi.md#createcampaign) | **POST** /campaigns | Create a campaign
[**deleteCampaign**](CampaignApi.md#deletecampaign) | **DELETE** /campaigns/{campaign_id} | Delete a campaign
[**getCampaign**](CampaignApi.md#getcampaign) | **GET** /campaigns/{campaign_id} | Show a campaign details
[**listCampaigns**](CampaignApi.md#listcampaigns) | **GET** /campaigns | Show all campaigns
[**listLinks**](CampaignApi.md#listlinks) | **GET** /campaigns/{campaign_id}/links | Show a campaign links
[**patchCampaign**](CampaignApi.md#patchcampaign) | **PATCH** /campaigns/{campaign_id} | Update a campaign
[**renderCampaign**](CampaignApi.md#rendercampaign) | **GET** /campaigns/{campaign_id}/render | Render a campaign
[**rescheduleCampaign**](CampaignApi.md#reschedulecampaign) | **POST** /campaigns/{campaign_id}/reschedule | Reschedule a campaign
[**resumeCampaign**](CampaignApi.md#resumecampaign) | **POST** /campaigns/{campaign_id}/resume | Resume a campaign
[**scheduleCampaign**](CampaignApi.md#schedulecampaign) | **POST** /campaigns/{campaign_id}/schedule | Schedule a campaign
[**sendTestEmail**](CampaignApi.md#sendtestemail) | **POST** /campaigns/{campaign_id}/send-test | Send a test email
[**suspendCampaign**](CampaignApi.md#suspendcampaign) | **POST** /campaigns/{campaign_id}/suspend | Suspend a campaign
[**unarchiveCampaign**](CampaignApi.md#unarchivecampaign) | **POST** /campaigns/{campaign_id}/unarchive | Unarchive a campaign
[**unscheduleCampaign**](CampaignApi.md#unschedulecampaign) | **POST** /campaigns/{campaign_id}/unschedule | Unschedule a campaign

# **archiveCampaign**
> \Cakemail\Model\ArchiveCampaignResponse archiveCampaign($campaign_id, $account_id)

Archive a campaign

You can only delete a campaign when the status is draft. However, if you want to remove a campaign from your list of active campaigns, you can archive it.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Cakemail\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->archiveCampaign($campaign_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->archiveCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**|  |
 **account_id** | **int**|  | [optional]

### Return type

[**\Cakemail\Model\ArchiveCampaignResponse**](../Model/ArchiveCampaignResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cancelCampaign**
> \Cakemail\Model\CancelCampaignResponse cancelCampaign($campaign_id, $account_id)

Cancel a campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Cakemail\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->cancelCampaign($campaign_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->cancelCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**|  |
 **account_id** | **int**|  | [optional]

### Return type

[**\Cakemail\Model\CancelCampaignResponse**](../Model/CancelCampaignResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCampaign**
> \Cakemail\Model\CreateCampaignResponse createCampaign($body, $account_id)

Create a campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Cakemail\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Cakemail\Model\CreateCampaign(); // \Cakemail\Model\CreateCampaign | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->createCampaign($body, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->createCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Cakemail\Model\CreateCampaign**](../Model/CreateCampaign.md)|  |
 **account_id** | **int**|  | [optional]

### Return type

[**\Cakemail\Model\CreateCampaignResponse**](../Model/CreateCampaignResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCampaign**
> \Cakemail\Model\DeleteCampaignResponse deleteCampaign($campaign_id, $account_id)

Delete a campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Cakemail\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->deleteCampaign($campaign_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->deleteCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**|  |
 **account_id** | **int**|  | [optional]

### Return type

[**\Cakemail\Model\DeleteCampaignResponse**](../Model/DeleteCampaignResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCampaign**
> \Cakemail\Model\CampaignResponse getCampaign($campaign_id, $account_id)

Show a campaign details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Cakemail\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->getCampaign($campaign_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**|  |
 **account_id** | **int**|  | [optional]

### Return type

[**\Cakemail\Model\CampaignResponse**](../Model/CampaignResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listCampaigns**
> \Cakemail\Model\CampaignsResponse listCampaigns($page, $per_page, $with_count, $account_id, $filter, $sort)

Show all campaigns

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Cakemail\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | 
$per_page = 50; // int | 
$with_count = false; // bool | 
$account_id = 56; // int | 
$filter = "filter_example"; // string | Valid Terms:   - `status`   - `name`   - `type`  Valid Operators:   - `==`  Query separator:   - `;`
$sort = "sort_example"; // string | Sort term and direction, using syntax `[-|+]term`.  Valid terms:   - `name`   - `created_on`   - `scheduled_for`   - `scheduled_on`   - `type`

try {
    $result = $apiInstance->listCampaigns($page, $per_page, $with_count, $account_id, $filter, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->listCampaigns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional] [default to 1]
 **per_page** | **int**|  | [optional] [default to 50]
 **with_count** | **bool**|  | [optional] [default to false]
 **account_id** | **int**|  | [optional]
 **filter** | **string**| Valid Terms:   - &#x60;status&#x60;   - &#x60;name&#x60;   - &#x60;type&#x60;  Valid Operators:   - &#x60;&#x3D;&#x3D;&#x60;  Query separator:   - &#x60;;&#x60; | [optional]
 **sort** | **string**| Sort term and direction, using syntax &#x60;[-|+]term&#x60;.  Valid terms:   - &#x60;name&#x60;   - &#x60;created_on&#x60;   - &#x60;scheduled_for&#x60;   - &#x60;scheduled_on&#x60;   - &#x60;type&#x60; | [optional]

### Return type

[**\Cakemail\Model\CampaignsResponse**](../Model/CampaignsResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listLinks**
> \Cakemail\Model\LinksResponse listLinks($campaign_id, $account_id, $page, $per_page, $with_count)

Show a campaign links

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Cakemail\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | 
$account_id = 56; // int | 
$page = 1; // int | 
$per_page = 50; // int | 
$with_count = false; // bool | 

try {
    $result = $apiInstance->listLinks($campaign_id, $account_id, $page, $per_page, $with_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->listLinks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**|  |
 **account_id** | **int**|  | [optional]
 **page** | **int**|  | [optional] [default to 1]
 **per_page** | **int**|  | [optional] [default to 50]
 **with_count** | **bool**|  | [optional] [default to false]

### Return type

[**\Cakemail\Model\LinksResponse**](../Model/LinksResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchCampaign**
> \Cakemail\Model\PatchCampaignResponse patchCampaign($body, $campaign_id, $account_id)

Update a campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Cakemail\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Cakemail\Model\PatchCampaign(); // \Cakemail\Model\PatchCampaign | 
$campaign_id = 56; // int | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->patchCampaign($body, $campaign_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->patchCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Cakemail\Model\PatchCampaign**](../Model/PatchCampaign.md)|  |
 **campaign_id** | **int**|  |
 **account_id** | **int**|  | [optional]

### Return type

[**\Cakemail\Model\PatchCampaignResponse**](../Model/PatchCampaignResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **renderCampaign**
> \Cakemail\Model\RenderCampaignResponse renderCampaign($campaign_id, $contact_id, $account_id)

Render a campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Cakemail\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | 
$contact_id = 56; // int | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->renderCampaign($campaign_id, $contact_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->renderCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**|  |
 **contact_id** | **int**|  | [optional]
 **account_id** | **int**|  | [optional]

### Return type

[**\Cakemail\Model\RenderCampaignResponse**](../Model/RenderCampaignResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rescheduleCampaign**
> \Cakemail\Model\ScheduleCampaignResponse rescheduleCampaign($campaign_id, $body, $account_id)

Reschedule a campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Cakemail\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | 
$body = new \Cakemail\Model\ScheduleCampaign(); // \Cakemail\Model\ScheduleCampaign | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->rescheduleCampaign($campaign_id, $body, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->rescheduleCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**|  |
 **body** | [**\Cakemail\Model\ScheduleCampaign**](../Model/ScheduleCampaign.md)|  | [optional]
 **account_id** | **int**|  | [optional]

### Return type

[**\Cakemail\Model\ScheduleCampaignResponse**](../Model/ScheduleCampaignResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resumeCampaign**
> \Cakemail\Model\ResumeCampaignResponse resumeCampaign($campaign_id, $account_id)

Resume a campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Cakemail\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->resumeCampaign($campaign_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->resumeCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**|  |
 **account_id** | **int**|  | [optional]

### Return type

[**\Cakemail\Model\ResumeCampaignResponse**](../Model/ResumeCampaignResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **scheduleCampaign**
> \Cakemail\Model\ScheduleCampaignResponse scheduleCampaign($campaign_id, $body, $account_id)

Schedule a campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Cakemail\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | 
$body = new \Cakemail\Model\ScheduleCampaign(); // \Cakemail\Model\ScheduleCampaign | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->scheduleCampaign($campaign_id, $body, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->scheduleCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**|  |
 **body** | [**\Cakemail\Model\ScheduleCampaign**](../Model/ScheduleCampaign.md)|  | [optional]
 **account_id** | **int**|  | [optional]

### Return type

[**\Cakemail\Model\ScheduleCampaignResponse**](../Model/ScheduleCampaignResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendTestEmail**
> \Cakemail\Model\SendTestEmailResponse sendTestEmail($body, $campaign_id, $account_id)

Send a test email

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Cakemail\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Cakemail\Model\SendTestEmail(); // \Cakemail\Model\SendTestEmail | 
$campaign_id = 56; // int | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->sendTestEmail($body, $campaign_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->sendTestEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Cakemail\Model\SendTestEmail**](../Model/SendTestEmail.md)|  |
 **campaign_id** | **int**|  |
 **account_id** | **int**|  | [optional]

### Return type

[**\Cakemail\Model\SendTestEmailResponse**](../Model/SendTestEmailResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **suspendCampaign**
> \Cakemail\Model\SuspendCampaignResponse suspendCampaign($campaign_id, $account_id)

Suspend a campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Cakemail\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->suspendCampaign($campaign_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->suspendCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**|  |
 **account_id** | **int**|  | [optional]

### Return type

[**\Cakemail\Model\SuspendCampaignResponse**](../Model/SuspendCampaignResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unarchiveCampaign**
> \Cakemail\Model\ArchiveCampaignResponse unarchiveCampaign($campaign_id, $account_id)

Unarchive a campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Cakemail\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->unarchiveCampaign($campaign_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->unarchiveCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**|  |
 **account_id** | **int**|  | [optional]

### Return type

[**\Cakemail\Model\ArchiveCampaignResponse**](../Model/ArchiveCampaignResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unscheduleCampaign**
> \Cakemail\Model\ScheduleCampaignResponse unscheduleCampaign($campaign_id, $account_id)

Unschedule a campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Cakemail\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->unscheduleCampaign($campaign_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->unscheduleCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**|  |
 **account_id** | **int**|  | [optional]

### Return type

[**\Cakemail\Model\ScheduleCampaignResponse**](../Model/ScheduleCampaignResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

