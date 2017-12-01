# eSagu\Amzn\RePricing\V1\RepricingItemApi

All URIs are relative to *https://api.esagu.de/amzn/repricing/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**callList**](RepricingItemApi.md#callList) | **GET** /item | Gets a list of repricing items.
[**get**](RepricingItemApi.md#get) | **GET** /item/{itemId} | Get a single repricing item specified by it&#39;s id.


# **callList**
> \eSagu\Amzn\RePricing\V1\eSagu\Amzn\RePricing\V1\Model\RepricingItemDTO[] callList($by_sku, $by_sku_exact, $by_title, $by_title_exact, $by_asin, $by_search_term, $by_amazon_price_from, $by_amazon_price_to, $by_price_mode, $by_price_state, $by_condition, $by_fulfillment_type, $by_no_price_settings, $by_buy_box_strategy, $by_price_gaps, $by_exclusion_criteria, $by_shipping_costs, $by_buy_box, $by_missing_rules, $by_quantity_greater_zero, $by_quantity_equal_zero, $by_id_greater_than, $has_buy_box, $by_custom_code, $sort, $order, $offset, $limit, $count_items, $return_items)

Gets a list of repricing items.

API endpoint for repricing items, you can retrieve item information here for editing the item's strategy use the \"Repricing ItemStrategy\" API.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\Amzn\RePricing\V1\Api\RepricingItemApi();
$by_sku = "by_sku_example"; // string | 
$by_sku_exact = false; // bool | 
$by_title = "by_title_example"; // string | 
$by_title_exact = false; // bool | 
$by_asin = "by_asin_example"; // string | 
$by_search_term = "by_search_term_example"; // string | 
$by_amazon_price_from = 56; // int | 
$by_amazon_price_to = 56; // int | 
$by_price_mode = "by_price_mode_example"; // string | 
$by_price_state = "by_price_state_example"; // string | 
$by_condition = "by_condition_example"; // string | 
$by_fulfillment_type = "by_fulfillment_type_example"; // string | 
$by_no_price_settings = false; // bool | 
$by_buy_box_strategy = "by_buy_box_strategy_example"; // string | 
$by_price_gaps = 789; // int | 
$by_exclusion_criteria = 789; // int | 
$by_shipping_costs = 789; // int | 
$by_buy_box = 789; // int | 
$by_missing_rules = false; // bool | 
$by_quantity_greater_zero = true; // bool | 
$by_quantity_equal_zero = false; // bool | 
$by_id_greater_than = 789; // int | 
$has_buy_box = false; // bool | 
$by_custom_code = 789; // int | 
$sort = "ITEM_ID"; // string | 
$order = "ASC"; // string | 
$offset = 0; // int | 
$limit = 50; // int | 
$count_items = false; // bool | 
$return_items = true; // bool | 

try {
    $result = $api_instance->callList($by_sku, $by_sku_exact, $by_title, $by_title_exact, $by_asin, $by_search_term, $by_amazon_price_from, $by_amazon_price_to, $by_price_mode, $by_price_state, $by_condition, $by_fulfillment_type, $by_no_price_settings, $by_buy_box_strategy, $by_price_gaps, $by_exclusion_criteria, $by_shipping_costs, $by_buy_box, $by_missing_rules, $by_quantity_greater_zero, $by_quantity_equal_zero, $by_id_greater_than, $has_buy_box, $by_custom_code, $sort, $order, $offset, $limit, $count_items, $return_items);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepricingItemApi->callList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **by_sku** | **string**|  | [optional]
 **by_sku_exact** | **bool**|  | [optional] [default to false]
 **by_title** | **string**|  | [optional]
 **by_title_exact** | **bool**|  | [optional] [default to false]
 **by_asin** | **string**|  | [optional]
 **by_search_term** | **string**|  | [optional]
 **by_amazon_price_from** | **int**|  | [optional]
 **by_amazon_price_to** | **int**|  | [optional]
 **by_price_mode** | **string**|  | [optional]
 **by_price_state** | **string**|  | [optional]
 **by_condition** | **string**|  | [optional]
 **by_fulfillment_type** | **string**|  | [optional]
 **by_no_price_settings** | **bool**|  | [optional] [default to false]
 **by_buy_box_strategy** | **string**|  | [optional]
 **by_price_gaps** | **int**|  | [optional]
 **by_exclusion_criteria** | **int**|  | [optional]
 **by_shipping_costs** | **int**|  | [optional]
 **by_buy_box** | **int**|  | [optional]
 **by_missing_rules** | **bool**|  | [optional] [default to false]
 **by_quantity_greater_zero** | **bool**|  | [optional] [default to true]
 **by_quantity_equal_zero** | **bool**|  | [optional] [default to false]
 **by_id_greater_than** | **int**|  | [optional]
 **has_buy_box** | **bool**|  | [optional] [default to false]
 **by_custom_code** | **int**|  | [optional]
 **sort** | **string**|  | [optional] [default to ITEM_ID]
 **order** | **string**|  | [optional] [default to ASC]
 **offset** | **int**|  | [optional] [default to 0]
 **limit** | **int**|  | [optional] [default to 50]
 **count_items** | **bool**|  | [optional] [default to false]
 **return_items** | **bool**|  | [optional] [default to true]

### Return type

[**\eSagu\Amzn\RePricing\V1\eSagu\Amzn\RePricing\V1\Model\RepricingItemDTO[]**](../Model/RepricingItemDTO.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **get**
> \eSagu\Amzn\RePricing\V1\eSagu\Amzn\RePricing\V1\Model\RepricingItemDTO get($item_id)

Get a single repricing item specified by it's id.

API endpoint for repricing items, you can retrieve item information here for editing the item's strategy use the \"Repricing ItemStrategy\" API.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\Amzn\RePricing\V1\Api\RepricingItemApi();
$item_id = 789; // int | 

try {
    $result = $api_instance->get($item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepricingItemApi->get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **int**|  |

### Return type

[**\eSagu\Amzn\RePricing\V1\eSagu\Amzn\RePricing\V1\Model\RepricingItemDTO**](../Model/RepricingItemDTO.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

