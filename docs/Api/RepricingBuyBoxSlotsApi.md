# eSagu\Amzn\RePricing\V1\RepricingBuyBoxSlotsApi

All URIs are relative to *https://api.esagu.de/amzn/repricing/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**callList**](RepricingBuyBoxSlotsApi.md#callList) | **GET** /buy-box-slots | Get all user service&#39;s buy box slots.
[**get**](RepricingBuyBoxSlotsApi.md#get) | **GET** /buy-box-slots/{buyBoxSlotsId} | Get the buy box slots specified by it&#39;s id.


# **callList**
> \eSagu\Amzn\RePricing\V1\eSagu\Amzn\RePricing\V1\Model\RepricingBuyBoxSlotsDTO[] callList()

Get all user service's buy box slots.

API endpoint for working with the easyBox slot packages.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\Amzn\RePricing\V1\Api\RepricingBuyBoxSlotsApi();

try {
    $result = $api_instance->callList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepricingBuyBoxSlotsApi->callList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\eSagu\Amzn\RePricing\V1\eSagu\Amzn\RePricing\V1\Model\RepricingBuyBoxSlotsDTO[]**](../Model/RepricingBuyBoxSlotsDTO.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **get**
> \eSagu\Amzn\RePricing\V1\eSagu\Amzn\RePricing\V1\Model\RepricingBuyBoxSlotsDTO[] get($buy_box_slots_id)

Get the buy box slots specified by it's id.

API endpoint for working with the easyBox slot packages.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\Amzn\RePricing\V1\Api\RepricingBuyBoxSlotsApi();
$buy_box_slots_id = 789; // int | 

try {
    $result = $api_instance->get($buy_box_slots_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepricingBuyBoxSlotsApi->get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **buy_box_slots_id** | **int**|  |

### Return type

[**\eSagu\Amzn\RePricing\V1\eSagu\Amzn\RePricing\V1\Model\RepricingBuyBoxSlotsDTO[]**](../Model/RepricingBuyBoxSlotsDTO.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

