# eSagu\Amzn\RePricing\V1\UserServiceMWSAccountApi

All URIs are relative to *https://api.esagu.de/amzn/repricing/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**get**](UserServiceMWSAccountApi.md#get) | **GET** /mws-account | Get a user service&#39;s Amazon MWS account.


# **get**
> \eSagu\Amzn\RePricing\V1\Model\UserServiceMWSAccountDTO get()

Get a user service's Amazon MWS account.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\Amzn\RePricing\V1\Api\UserServiceMWSAccountApi();

try {
    $result = $api_instance->get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceMWSAccountApi->get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\eSagu\Amzn\RePricing\V1\Model\UserServiceMWSAccountDTO**](../Model/UserServiceMWSAccountDTO.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

