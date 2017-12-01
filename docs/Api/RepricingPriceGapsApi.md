# eSagu\Amzn\RePricing\V1\RepricingPriceGapsApi

All URIs are relative to *https://api.esagu.de/amzn/repricing/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**callList**](RepricingPriceGapsApi.md#callList) | **GET** /price-gaps | Gets all price gaps of a service.
[**delete**](RepricingPriceGapsApi.md#delete) | **DELETE** /price-gaps/{priceGapsId} | Delete a price gap by id.
[**get**](RepricingPriceGapsApi.md#get) | **GET** /price-gaps/{priceGapsId} | Get a price gap specified by it&#39;s id.
[**post**](RepricingPriceGapsApi.md#post) | **POST** /price-gaps | Adds a new price gap.
[**put**](RepricingPriceGapsApi.md#put) | **PUT** /price-gaps/{priceGapsId} | Edit a price gap.


# **callList**
> \eSagu\Amzn\RePricing\V1\Model\RepricingPriceGapsDTO[] callList()

Gets all price gaps of a service.

API endpoint for price gaps, a price gap can be global, by seller id, by fulfillment or a combination of seller id and fulfillment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\Amzn\RePricing\V1\Api\RepricingPriceGapsApi();

try {
    $result = $api_instance->callList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepricingPriceGapsApi->callList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\eSagu\Amzn\RePricing\V1\Model\RepricingPriceGapsDTO[]**](../Model/RepricingPriceGapsDTO.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **delete**
> delete($price_gaps_id)

Delete a price gap by id.

API endpoint for price gaps, a price gap can be global, by seller id, by fulfillment or a combination of seller id and fulfillment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\Amzn\RePricing\V1\Api\RepricingPriceGapsApi();
$price_gaps_id = 789; // int | 

try {
    $api_instance->delete($price_gaps_id);
} catch (Exception $e) {
    echo 'Exception when calling RepricingPriceGapsApi->delete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **price_gaps_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **get**
> \eSagu\Amzn\RePricing\V1\Model\RepricingPriceGapsDTO get($price_gaps_id)

Get a price gap specified by it's id.

API endpoint for price gaps, a price gap can be global, by seller id, by fulfillment or a combination of seller id and fulfillment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\Amzn\RePricing\V1\Api\RepricingPriceGapsApi();
$price_gaps_id = 789; // int | 

try {
    $result = $api_instance->get($price_gaps_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepricingPriceGapsApi->get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **price_gaps_id** | **int**|  |

### Return type

[**\eSagu\Amzn\RePricing\V1\Model\RepricingPriceGapsDTO**](../Model/RepricingPriceGapsDTO.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **post**
> post($body)

Adds a new price gap.

API endpoint for price gaps, a price gap can be global, by seller id, by fulfillment or a combination of seller id and fulfillment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\Amzn\RePricing\V1\Api\RepricingPriceGapsApi();
$body = new \eSagu\Amzn\RePricing\V1\Model\RepricingPriceGapsDTO(); // \eSagu\Amzn\RePricing\V1\Model\RepricingPriceGapsDTO | 

try {
    $api_instance->post($body);
} catch (Exception $e) {
    echo 'Exception when calling RepricingPriceGapsApi->post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\eSagu\Amzn\RePricing\V1\Model\RepricingPriceGapsDTO**](../Model/\eSagu\Amzn\RePricing\V1\Model\RepricingPriceGapsDTO.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **put**
> put($price_gaps_id, $body)

Edit a price gap.

API endpoint for price gaps, a price gap can be global, by seller id, by fulfillment or a combination of seller id and fulfillment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\Amzn\RePricing\V1\Api\RepricingPriceGapsApi();
$price_gaps_id = 789; // int | 
$body = new \eSagu\Amzn\RePricing\V1\Model\RepricingPriceGapsDTO(); // \eSagu\Amzn\RePricing\V1\Model\RepricingPriceGapsDTO | 

try {
    $api_instance->put($price_gaps_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepricingPriceGapsApi->put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **price_gaps_id** | **int**|  |
 **body** | [**\eSagu\Amzn\RePricing\V1\Model\RepricingPriceGapsDTO**](../Model/\eSagu\Amzn\RePricing\V1\Model\RepricingPriceGapsDTO.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

