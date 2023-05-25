# Walmart\Api\US\MPPricesApi  
All URIs are relative to https://marketplace.walmartapis.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createStrategy()**](PricesApi.md#createStrategy) | **POST** /v3/repricer/strategy | Create Repricer Strategy |
| [**deleteStrategy()**](PricesApi.md#deleteStrategy) | **DELETE** /v3/repricer/strategy/{strategyCollectionId} | Delete Repricer Strategy |
| [**getRepricerFeed()**](PricesApi.md#getRepricerFeed) | **POST** /v3/repricerFeeds | Assign/Unassign items to/from Repricer Strategy |
| [**getStrategies()**](PricesApi.md#getStrategies) | **GET** /v3/repricer/strategies | List of Repricer Strategies |
| [**optCapProgramInPrice()**](PricesApi.md#optCapProgramInPrice) | **POST** /v3/cppreference | Set up CAP SKU All |
| [**priceBulkUploads()**](PricesApi.md#priceBulkUploads) | **POST** /v3/feeds | Update bulk prices (Multiple) |
| [**updatePrice()**](PricesApi.md#updatePrice) | **PUT** /v3/price | Update a price |
| [**updateStrategy()**](PricesApi.md#updateStrategy) | **PUT** /v3/repricer/strategy/{strategyCollectionId} | Update Repricer Strategy |


## `createStrategy()`

```php
createStrategy($updateStrategyRequest): \Walmart\Model\MP\US\Prices\UpdateStrategy200Response
```
Create Repricer Strategy

Creates a new strategy for the seller

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure access token authorization: accessTokenScheme
$accessToken = new Walmart\AccessToken('ACCESS_TOKEN', new DateTime('+900 seconds'));
$config = new Walmart\Configuration('CLIENT_ID', 'CLIENT_SECRET', ['accessToken' => $accessToken]);

$apiInstance = new Walmart\Api\PricesApi(  
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$updateStrategyRequest = new \Walmart\Model\MP\US\Prices\UpdateStrategyRequest(); // \Walmart\Model\MP\US\Prices\UpdateStrategyRequest | The request body will have the strategy related information

try {
    $result = $apiInstance->createStrategy($updateStrategyRequest);
    print_r($result);
} catch (Exception $e) {
    echo "Exception when calling PricesApi->createStrategy: {$e->getMessage()}\n";
}
```

### Parameters| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **updateStrategyRequest** | [**\Walmart\Model\MP\US\Prices\UpdateStrategyRequest**](../Model/UpdateStrategyRequest.md)| The request body will have the strategy related information | |


### Return type

[**\Walmart\Model\MP\US\Prices\UpdateStrategy200Response**](../Model/UpdateStrategy200Response.md)

### Authorization

[accessTokenScheme](../../README.md#accessTokenScheme)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteStrategy()`

```php
deleteStrategy($strategyCollectionId): \Walmart\Model\MP\US\Prices\DeleteStrategy200Response
```
Delete Repricer Strategy

Deletes the strategy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure access token authorization: accessTokenScheme
$accessToken = new Walmart\AccessToken('ACCESS_TOKEN', new DateTime('+900 seconds'));
$config = new Walmart\Configuration('CLIENT_ID', 'CLIENT_SECRET', ['accessToken' => $accessToken]);

$apiInstance = new Walmart\Api\PricesApi(  
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$strategyCollectionId = 'strategyCollectionId_example'; // string

try {
    $result = $apiInstance->deleteStrategy($strategyCollectionId);
    print_r($result);
} catch (Exception $e) {
    echo "Exception when calling PricesApi->deleteStrategy: {$e->getMessage()}\n";
}
```

### Parameters| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **strategyCollectionId** | **string**|  | |


### Return type

[**\Walmart\Model\MP\US\Prices\DeleteStrategy200Response**](../Model/DeleteStrategy200Response.md)

### Authorization

[accessTokenScheme](../../README.md#accessTokenScheme)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRepricerFeed()`

```php
getRepricerFeed($getRepricerFeedRequest): \Walmart\Model\MP\US\Prices\GetRepricerFeed200Response
```
Assign/Unassign items to/from Repricer Strategy

Add/Remove one or more items from a strategy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure access token authorization: accessTokenScheme
$accessToken = new Walmart\AccessToken('ACCESS_TOKEN', new DateTime('+900 seconds'));
$config = new Walmart\Configuration('CLIENT_ID', 'CLIENT_SECRET', ['accessToken' => $accessToken]);

$apiInstance = new Walmart\Api\PricesApi(  
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$getRepricerFeedRequest = new \Walmart\Model\MP\US\Prices\GetRepricerFeedRequest(); // \Walmart\Model\MP\US\Prices\GetRepricerFeedRequest

try {
    $result = $apiInstance->getRepricerFeed($getRepricerFeedRequest);
    print_r($result);
} catch (Exception $e) {
    echo "Exception when calling PricesApi->getRepricerFeed: {$e->getMessage()}\n";
}
```

### Parameters| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **getRepricerFeedRequest** | [**\Walmart\Model\MP\US\Prices\GetRepricerFeedRequest**](../Model/GetRepricerFeedRequest.md)|  | |


### Return type

[**\Walmart\Model\MP\US\Prices\GetRepricerFeed200Response**](../Model/GetRepricerFeed200Response.md)

### Authorization

[accessTokenScheme](../../README.md#accessTokenScheme)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStrategies()`

```php
getStrategies(): \Walmart\Model\MP\US\Prices\GetStrategies200Response
```
List of Repricer Strategies

Get the list of strategies

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure access token authorization: accessTokenScheme
$accessToken = new Walmart\AccessToken('ACCESS_TOKEN', new DateTime('+900 seconds'));
$config = new Walmart\Configuration('CLIENT_ID', 'CLIENT_SECRET', ['accessToken' => $accessToken]);

$apiInstance = new Walmart\Api\PricesApi(  
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);


try {
    $result = $apiInstance->getStrategies();
    print_r($result);
} catch (Exception $e) {
    echo "Exception when calling PricesApi->getStrategies: {$e->getMessage()}\n";
}
```

### ParametersThis endpoint does not need any parameter.


### Return type

[**\Walmart\Model\MP\US\Prices\GetStrategies200Response**](../Model/GetStrategies200Response.md)

### Authorization

[accessTokenScheme](../../README.md#accessTokenScheme)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `optCapProgramInPrice()`

```php
optCapProgramInPrice($optCapProgramInPriceRequest): \Walmart\Model\MP\US\Prices\OptCapProgramInPrice200Response
```
Set up CAP SKU All

This API helps Sellers to completely opt-in or opt-out from CAP program.  If the subsidyEnrolled value = \"true\", the Seller enrolls in the CAP program. All eligible SKUs (current and future) are by default opt-in. Seller should use the SKU opt-in/opt-out API to opt-out individual items.  If the subsidyEnrolled value = \"false\", the Seller stops participating in the CAP program and all eligible SKUs (current and future) are opt-out of the CAP program.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure access token authorization: accessTokenScheme
$accessToken = new Walmart\AccessToken('ACCESS_TOKEN', new DateTime('+900 seconds'));
$config = new Walmart\Configuration('CLIENT_ID', 'CLIENT_SECRET', ['accessToken' => $accessToken]);

$apiInstance = new Walmart\Api\PricesApi(  
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$optCapProgramInPriceRequest = new \Walmart\Model\MP\US\Prices\OptCapProgramInPriceRequest(); // \Walmart\Model\MP\US\Prices\OptCapProgramInPriceRequest | Request fields

try {
    $result = $apiInstance->optCapProgramInPrice($optCapProgramInPriceRequest);
    print_r($result);
} catch (Exception $e) {
    echo "Exception when calling PricesApi->optCapProgramInPrice: {$e->getMessage()}\n";
}
```

### Parameters| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **optCapProgramInPriceRequest** | [**\Walmart\Model\MP\US\Prices\OptCapProgramInPriceRequest**](../Model/OptCapProgramInPriceRequest.md)| Request fields | |


### Return type

[**\Walmart\Model\MP\US\Prices\OptCapProgramInPrice200Response**](../Model/OptCapProgramInPrice200Response.md)

### Authorization

[accessTokenScheme](../../README.md#accessTokenScheme)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `priceBulkUploads()`

```php
priceBulkUploads($feedType, $file): \Walmart\Model\MP\US\Prices\PriceBulkUploads200Response
```
Update bulk prices (Multiple)

Updates prices in bulk.  In one Feed you can update up to 10,000 items in bulk. To ensure optimal Feed processing time, we recommend sending no more than 1000 items in one Feed and keeping the Feed sizes below 10 MB.  The price sequence guarantee is observed by the bulk price update functionality, subject to the following rules:  The timestamp used to determine precedence is passed in the request headers. All price updates in the feed are considered to have the same timestamp. The timestamp in the XML file is used only for auditing. You can send a single SKU multiple times in one Feed. If a SKU is repeated in a Feed, the price will be set for that SKU on Walmart.com, but there is no guarantee as to which SKU's price within that feed will be used. This API should be used in preference to the update a price. It should be called no sooner than 24 hours after a new item is set up and a wpid (Walmart Part ID) is available. Thereafter, the bulk price update has an service level agreement (SLA) of 15 minutes.  After the update is submitted, wait for at least five minutes before verifying whether the bulk price update was successful. Individual SKU price update success or failure is only available after the entire feed is processed.  If a SKU's price update fails (for example, multiple price updates were sent for the same SKU in a single feed), an error will be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure access token authorization: accessTokenScheme
$accessToken = new Walmart\AccessToken('ACCESS_TOKEN', new DateTime('+900 seconds'));
$config = new Walmart\Configuration('CLIENT_ID', 'CLIENT_SECRET', ['accessToken' => $accessToken]);

$apiInstance = new Walmart\Api\PricesApi(  
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$feedType = 'feedType_example'; // string | The feed Type
$file = "/path/to/file.txt"; // \SplFileObject | Feed file to upload

try {
    $result = $apiInstance->priceBulkUploads($feedType, $file);
    print_r($result);
} catch (Exception $e) {
    echo "Exception when calling PricesApi->priceBulkUploads: {$e->getMessage()}\n";
}
```

### Parameters| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **feedType** | **string**| The feed Type | |
| **file** | **\SplFileObject****\SplFileObject**| Feed file to upload | |


### Return type

[**\Walmart\Model\MP\US\Prices\PriceBulkUploads200Response**](../Model/PriceBulkUploads200Response.md)

### Authorization

[accessTokenScheme](../../README.md#accessTokenScheme)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePrice()`

```php
updatePrice($updatePriceRequest): \Walmart\Model\MP\US\Prices\UpdatePrice200Response
```
Update a price

Updates the regular price for a given item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure access token authorization: accessTokenScheme
$accessToken = new Walmart\AccessToken('ACCESS_TOKEN', new DateTime('+900 seconds'));
$config = new Walmart\Configuration('CLIENT_ID', 'CLIENT_SECRET', ['accessToken' => $accessToken]);

$apiInstance = new Walmart\Api\PricesApi(  
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$updatePriceRequest = {"sku":"97964_KFTest","pricing":[{"currentPriceType":"BASE","currentPrice":{"currency":"USD","amount":10}}]}; // \Walmart\Model\MP\US\Prices\UpdatePriceRequest | The request body consists of a Feed file attached to the request.

try {
    $result = $apiInstance->updatePrice($updatePriceRequest);
    print_r($result);
} catch (Exception $e) {
    echo "Exception when calling PricesApi->updatePrice: {$e->getMessage()}\n";
}
```

### Parameters| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **updatePriceRequest** | [**\Walmart\Model\MP\US\Prices\UpdatePriceRequest**](../Model/UpdatePriceRequest.md)| The request body consists of a Feed file attached to the request. | |


### Return type

[**\Walmart\Model\MP\US\Prices\UpdatePrice200Response**](../Model/UpdatePrice200Response.md)

### Authorization

[accessTokenScheme](../../README.md#accessTokenScheme)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateStrategy()`

```php
updateStrategy($strategyCollectionId, $updateStrategyRequest): \Walmart\Model\MP\US\Prices\UpdateStrategy200Response
```
Update Repricer Strategy

Updates the existing strategy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure access token authorization: accessTokenScheme
$accessToken = new Walmart\AccessToken('ACCESS_TOKEN', new DateTime('+900 seconds'));
$config = new Walmart\Configuration('CLIENT_ID', 'CLIENT_SECRET', ['accessToken' => $accessToken]);

$apiInstance = new Walmart\Api\PricesApi(  
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$strategyCollectionId = 'strategyCollectionId_example'; // string
$updateStrategyRequest = new \Walmart\Model\MP\US\Prices\UpdateStrategyRequest(); // \Walmart\Model\MP\US\Prices\UpdateStrategyRequest | The request body will have the strategy related information

try {
    $result = $apiInstance->updateStrategy($strategyCollectionId, $updateStrategyRequest);
    print_r($result);
} catch (Exception $e) {
    echo "Exception when calling PricesApi->updateStrategy: {$e->getMessage()}\n";
}
```

### Parameters| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **strategyCollectionId** | **string**|  | |
| **updateStrategyRequest** | [**\Walmart\Model\MP\US\Prices\UpdateStrategyRequest**](../Model/UpdateStrategyRequest.md)| The request body will have the strategy related information | |


### Return type

[**\Walmart\Model\MP\US\Prices\UpdateStrategy200Response**](../Model/UpdateStrategy200Response.md)

### Authorization

[accessTokenScheme](../../README.md#accessTokenScheme)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)