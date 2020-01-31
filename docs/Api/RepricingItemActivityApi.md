# eSagu\Amzn\RePricing\V1\RepricingItemActivityApi

All URIs are relative to *https://api.esagu.de/amzn/repricing/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**callList**](RepricingItemActivityApi.md#callList) | **GET** /item/{itemId}/activity | The repricing items optimization result activity as list.


# **callList**
> \eSagu\Amzn\RePricing\V1\Model\OptimizationResultActivityDTO[] callList($item_id)

The repricing items optimization result activity as list.

API endpoint for repricing item optimization result activities.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\Amzn\RePricing\V1\Api\RepricingItemActivityApi();
$item_id = 789; // int | 

try {
    $result = $api_instance->callList($item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepricingItemActivityApi->callList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **int**|  |

### Return type

[**\eSagu\Amzn\RePricing\V1\Model\OptimizationResultActivityDTO[]**](../Model/OptimizationResultActivityDTO.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

