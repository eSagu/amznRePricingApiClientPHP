# eSagu\Amzn\RePricing\V1\RepricingItemStrategyApi

All URIs are relative to *https://api.esagu.de/amzn/repricing/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**get**](RepricingItemStrategyApi.md#get) | **GET** /item/{itemId}/strategy | Gets the item&#39;s strategy settings.
[**put**](RepricingItemStrategyApi.md#put) | **PUT** /item/{itemId}/strategy | Creates or updates the item&#39;s strategy settings.


# **get**
> \eSagu\Amzn\RePricing\V1\Model\RepricingItemStrategyDTO get($item_id)

Gets the item's strategy settings.

API endpoint editing the repricing item's strategy and price settings.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\Amzn\RePricing\V1\Api\RepricingItemStrategyApi();
$item_id = 789; // int | 

try {
    $result = $api_instance->get($item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepricingItemStrategyApi->get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **int**|  |

### Return type

[**\eSagu\Amzn\RePricing\V1\Model\RepricingItemStrategyDTO**](../Model/RepricingItemStrategyDTO.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **put**
> put($item_id, $body)

Creates or updates the item's strategy settings.

API endpoint editing the repricing item's strategy and price settings.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\Amzn\RePricing\V1\Api\RepricingItemStrategyApi();
$item_id = 789; // int | 
$body = new \eSagu\Amzn\RePricing\V1\Model\RepricingItemStrategyDTO(); // \eSagu\Amzn\RePricing\V1\Model\RepricingItemStrategyDTO | 

try {
    $api_instance->put($item_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepricingItemStrategyApi->put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **int**|  |
 **body** | [**\eSagu\Amzn\RePricing\V1\Model\RepricingItemStrategyDTO**](../Model/\eSagu\Amzn\RePricing\V1\Model\RepricingItemStrategyDTO.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

