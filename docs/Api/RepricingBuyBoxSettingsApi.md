# eSagu\Amzn\RePricing\V1\RepricingBuyBoxSettingsApi

All URIs are relative to *https://api.esagu.de/amzn/repricing/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**callList**](RepricingBuyBoxSettingsApi.md#callList) | **GET** /buy-box-settings | Get all user service&#39;s buy box settings.
[**delete**](RepricingBuyBoxSettingsApi.md#delete) | **DELETE** /buy-box-settings/{buyBoxSettingsId} | Delete buy box settings by id.
[**get**](RepricingBuyBoxSettingsApi.md#get) | **GET** /buy-box-settings/{buyBoxSettingsId} | Get the buy box settings specified by it&#39;s id.
[**post**](RepricingBuyBoxSettingsApi.md#post) | **POST** /buy-box-settings | Adds new buy box settings.
[**put**](RepricingBuyBoxSettingsApi.md#put) | **PUT** /buy-box-settings/{buyBoxSettingsId} | Edit buy box settings by id.


# **callList**
> \eSagu\Amzn\RePricing\V1\Model\RepricingBuyBoxSettingsDTO[] callList()

Get all user service's buy box settings.

API endpoint for working with the easyBox settings.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\Amzn\RePricing\V1\Api\RepricingBuyBoxSettingsApi();

try {
    $result = $api_instance->callList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepricingBuyBoxSettingsApi->callList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\eSagu\Amzn\RePricing\V1\Model\RepricingBuyBoxSettingsDTO[]**](../Model/RepricingBuyBoxSettingsDTO.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **delete**
> delete($buy_box_settings_id)

Delete buy box settings by id.

API endpoint for working with the easyBox settings.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\Amzn\RePricing\V1\Api\RepricingBuyBoxSettingsApi();
$buy_box_settings_id = 789; // int | 

try {
    $api_instance->delete($buy_box_settings_id);
} catch (Exception $e) {
    echo 'Exception when calling RepricingBuyBoxSettingsApi->delete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **buy_box_settings_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **get**
> \eSagu\Amzn\RePricing\V1\Model\RepricingBuyBoxSettingsDTO get($buy_box_settings_id)

Get the buy box settings specified by it's id.

API endpoint for working with the easyBox settings.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\Amzn\RePricing\V1\Api\RepricingBuyBoxSettingsApi();
$buy_box_settings_id = 789; // int | 

try {
    $result = $api_instance->get($buy_box_settings_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepricingBuyBoxSettingsApi->get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **buy_box_settings_id** | **int**|  |

### Return type

[**\eSagu\Amzn\RePricing\V1\Model\RepricingBuyBoxSettingsDTO**](../Model/RepricingBuyBoxSettingsDTO.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **post**
> post($body)

Adds new buy box settings.

API endpoint for working with the easyBox settings.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\Amzn\RePricing\V1\Api\RepricingBuyBoxSettingsApi();
$body = new \eSagu\Amzn\RePricing\V1\Model\RepricingBuyBoxSettingsDTO(); // \eSagu\Amzn\RePricing\V1\Model\RepricingBuyBoxSettingsDTO | 

try {
    $api_instance->post($body);
} catch (Exception $e) {
    echo 'Exception when calling RepricingBuyBoxSettingsApi->post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\eSagu\Amzn\RePricing\V1\Model\RepricingBuyBoxSettingsDTO**](../Model/\eSagu\Amzn\RePricing\V1\Model\RepricingBuyBoxSettingsDTO.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **put**
> put($buy_box_settings_id, $body)

Edit buy box settings by id.

API endpoint for working with the easyBox settings.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\Amzn\RePricing\V1\Api\RepricingBuyBoxSettingsApi();
$buy_box_settings_id = 789; // int | 
$body = new \eSagu\Amzn\RePricing\V1\Model\RepricingBuyBoxSettingsDTO(); // \eSagu\Amzn\RePricing\V1\Model\RepricingBuyBoxSettingsDTO | 

try {
    $api_instance->put($buy_box_settings_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepricingBuyBoxSettingsApi->put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **buy_box_settings_id** | **int**|  |
 **body** | [**\eSagu\Amzn\RePricing\V1\Model\RepricingBuyBoxSettingsDTO**](../Model/\eSagu\Amzn\RePricing\V1\Model\RepricingBuyBoxSettingsDTO.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

