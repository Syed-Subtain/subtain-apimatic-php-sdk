<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Controllers;

use AdvancedBillingLib\Exceptions\ApiException;
use AdvancedBillingLib\Exceptions\ErrorListResponseException;
use AdvancedBillingLib\Exceptions\ErrorMapResponseException;
use AdvancedBillingLib\Models\BasicDateField;
use AdvancedBillingLib\Models\BulkCreateProductPricePointsRequest;
use AdvancedBillingLib\Models\BulkCreateProductPricePointsResponse;
use AdvancedBillingLib\Models\CreateProductCurrencyPricesRequest;
use AdvancedBillingLib\Models\CreateProductPricePointRequest;
use AdvancedBillingLib\Models\IncludeNotNull;
use AdvancedBillingLib\Models\ListProductPricePointsResponse;
use AdvancedBillingLib\Models\ListProductsPricePointsInclude;
use AdvancedBillingLib\Models\PricePointType;
use AdvancedBillingLib\Models\ProductPricePointCurrencyPrice;
use AdvancedBillingLib\Models\ProductPricePointResponse;
use AdvancedBillingLib\Models\UpdateCurrencyPricesRequest;
use AdvancedBillingLib\Models\UpdateProductPricePointRequest;
use Core\Request\Parameters\BodyParam;
use Core\Request\Parameters\HeaderParam;
use Core\Request\Parameters\QueryParam;
use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;

class ProductPricePointsController extends BaseController
{
    /**
     * Use this endpoint to retrieve a list of product price points.
     *
     * @param array $options Array with all options for search
     *
     * @return ListProductPricePointsResponse|null Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listProductPricePoints(array $options): ?ListProductPricePointsResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/products/{product_id}/price_points.json')
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('product_id', $options)->extract('productId')->required(),
                QueryParam::init('page', $options)->commaSeparated()->extract('page', 1),
                QueryParam::init('per_page', $options)->commaSeparated()->extract('perPage', 10),
                QueryParam::init('currency_prices', $options)->commaSeparated()->extract('currencyPrices'),
                QueryParam::init('filter[type]', $options)
                    ->commaSeparated()
                    ->extract('filterType')
                    ->serializeBy([PricePointType::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()->type(ListProductPricePointsResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * [Product Price Point Documentation](https://chargify.zendesk.com/hc/en-us/articles/4407755824155)
     *
     * @param int $productId The id or handle of the product. When using the handle, it must be
     *        prefixed with `handle:`
     * @param CreateProductPricePointRequest|null $body
     *
     * @return ProductPricePointResponse|null Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createProductPricePoint(
        int $productId,
        ?CreateProductPricePointRequest $body = null
    ): ?ProductPricePointResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/products/{product_id}/price_points.json')
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('product_id', $productId)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()->type(ProductPricePointResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Use this endpoint to update a product price point.
     *
     * Note: Custom product price points are not able to be updated.
     *
     * @param int $productId The id or handle of the product. When using the handle, it must be
     *        prefixed with `handle:`
     * @param int $pricePointId The id or handle of the price point. When using the handle, it must
     *        be prefixed with `handle:`
     * @param UpdateProductPricePointRequest|null $body
     *
     * @return ProductPricePointResponse|null Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updateProductPricePoint(
        int $productId,
        int $pricePointId,
        ?UpdateProductPricePointRequest $body = null
    ): ?ProductPricePointResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::PUT,
            '/products/{product_id}/price_points/{price_point_id}.json'
        )
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('product_id', $productId)->required(),
                TemplateParam::init('price_point_id', $pricePointId)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()->type(ProductPricePointResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Use this endpoint to unarchive an archived product price point.
     *
     * @param int $productId The Chargify id of the product to which the price point belongs
     * @param int $pricePointId The Chargify id of the product price point
     *
     * @return ProductPricePointResponse|null Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function unarchiveProductPricePoint(int $productId, int $pricePointId): ?ProductPricePointResponse
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::PATCH,
            '/products/{product_id}/price_points/{price_point_id}/unarchive.json'
        )
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('product_id', $productId)->required(),
                TemplateParam::init('price_point_id', $pricePointId)->required()
            );

        $_resHandler = $this->responseHandler()->type(ProductPricePointResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Use this endpoint to create multiple product price points in one request.
     *
     * @param int $productId The Chargify id of the product to which the price points belong
     * @param BulkCreateProductPricePointsRequest|null $body
     *
     * @return BulkCreateProductPricePointsResponse|null Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createProductPricePoints(
        int $productId,
        ?BulkCreateProductPricePointsRequest $body = null
    ): ?BulkCreateProductPricePointsResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/products/{product_id}/price_points/bulk.json')
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('product_id', $productId)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()->type(BulkCreateProductPricePointsResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This endpoint allows you to create currency prices for a given currency that has been defined on the
     * site level in your settings.
     *
     * When creating currency prices, they need to mirror the structure of your primary pricing. If the
     * product price point defines a trial and/or setup fee, each currency must also define a trial and/or
     * setup fee.
     *
     * Note: Currency Prices are not able to be created for custom product price points.
     *
     * @param int $productPricePointId The Chargify id of the product price point
     * @param CreateProductCurrencyPricesRequest|null $body
     *
     * @return ProductPricePointCurrencyPrice|null Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createProductCurrencyPrices(
        int $productPricePointId,
        ?CreateProductCurrencyPricesRequest $body = null
    ): ?ProductPricePointCurrencyPrice {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/product_price_points/{product_price_point_id}/currency_prices.json'
        )
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('product_price_point_id', $productPricePointId)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '422',
                ErrorType::init('Unprocessable Entity (WebDAV)', ErrorMapResponseException::class)
            )
            ->type(ProductPricePointCurrencyPrice::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Use this endpoint to archive a product price point.
     *
     * @param int $productId The id or handle of the product. When using the handle, it must be
     *        prefixed with `handle:`
     * @param int $pricePointId The id or handle of the price point. When using the handle, it must
     *        be prefixed with `handle:`
     *
     * @return ProductPricePointResponse|null Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function archiveProductPricePoint(int $productId, int $pricePointId): ?ProductPricePointResponse
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::DELETE,
            '/products/{product_id}/price_points/{price_point_id}.json'
        )
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('product_id', $productId)->required(),
                TemplateParam::init('price_point_id', $pricePointId)->required()
            );

        $_resHandler = $this->responseHandler()->type(ProductPricePointResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Use this endpoint to make a product price point the default for the product.
     *
     * Note: Custom product price points are not able to be set as the default for a product.
     *
     * @param int $productId The Chargify id of the product to which the price point belongs
     * @param int $pricePointId The Chargify id of the product price point
     *
     * @return ProductPricePointResponse|null Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function setDefaultPricePointForProduct(int $productId, int $pricePointId): ?ProductPricePointResponse
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::PATCH,
            '/products/{product_id}/price_points/{price_point_id}/default.json'
        )
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('product_id', $productId)->required(),
                TemplateParam::init('price_point_id', $pricePointId)->required()
            );

        $_resHandler = $this->responseHandler()->type(ProductPricePointResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This endpoint allows you to update the `price`s of currency prices for a given currency that exists
     * on the product price point.
     *
     * When updating the pricing, it needs to mirror the structure of your primary pricing. If the product
     * price point defines a trial and/or setup fee, each currency must also define a trial and/or setup
     * fee.
     *
     * Note: Currency Prices are not able to be updated for custom product price points.
     *
     * @param int $productPricePointId The Chargify id of the product price point
     * @param UpdateCurrencyPricesRequest|null $body
     *
     * @return ProductPricePointCurrencyPrice[]|null Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updateProductCurrencyPrices(
        int $productPricePointId,
        ?UpdateCurrencyPricesRequest $body = null
    ): ?array {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::PUT,
            '/product_price_points/{product_price_point_id}/currency_prices.json'
        )
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('product_price_point_id', $productPricePointId)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()->type(ProductPricePointCurrencyPrice::class, 1);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This method allows retrieval of a list of Products Price Points belonging to a Site.
     *
     * @param array $options Array with all options for search
     *
     * @return ListProductPricePointsResponse|null Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listAllProductPricePoints(array $options): ?ListProductPricePointsResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/products_price_points.json')
            ->auth('BasicAuth')
            ->parameters(
                QueryParam::init('direction', $options)
                    ->commaSeparated()
                    ->extract('direction')
                    ->strictType(
                        'anyOf(oneOf(SortingDirection),null)',
                        ['\\AdvancedBillingLib\\Models\\SortingDirection::checkValue SortingDirection']
                    ),
                QueryParam::init('filter[archived_at]', $options)
                    ->commaSeparated()
                    ->extract('filterArchivedAt')
                    ->serializeBy([IncludeNotNull::class, 'checkValue']),
                QueryParam::init('filter[date_field]', $options)
                    ->commaSeparated()
                    ->extract('filterDateField')
                    ->serializeBy([BasicDateField::class, 'checkValue']),
                QueryParam::init('filter[end_date]', $options)->commaSeparated()->extract('filterEndDate'),
                QueryParam::init('filter[end_datetime]', $options)->commaSeparated()->extract('filterEndDatetime'),
                QueryParam::init('filter[ids]', $options)->commaSeparated()->extract('filterIds'),
                QueryParam::init('filter[start_date]', $options)->commaSeparated()->extract('filterStartDate'),
                QueryParam::init('filter[start_datetime]', $options)->commaSeparated()->extract('filterStartDatetime'),
                QueryParam::init('filter[type]', $options)
                    ->commaSeparated()
                    ->extract('filterType')
                    ->serializeBy([PricePointType::class, 'checkValue']),
                QueryParam::init('include', $options)
                    ->commaSeparated()
                    ->extract('mInclude')
                    ->serializeBy([ListProductsPricePointsInclude::class, 'checkValue']),
                QueryParam::init('page', $options)->commaSeparated()->extract('page', 1),
                QueryParam::init('per_page', $options)->commaSeparated()->extract('perPage', 20)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '422',
                ErrorType::init('Unprocessable Entity (WebDAV)', ErrorListResponseException::class)
            )
            ->type(ListProductPricePointsResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Use this endpoint to retrieve details for a specific product price point.
     *
     * @param int $productId The id or handle of the product. When using the handle, it must be
     *        prefixed with `handle:`
     * @param int $pricePointId The id or handle of the price point. When using the handle, it must
     *        be prefixed with `handle:`
     * @param bool|null $currencyPrices When fetching a product's price points, if you have defined
     *        multiple currencies at the site level, you can optionally pass the ?
     *        currency_prices=true query param to include an array of currency price data in the
     *        response. If the product price point is set to use_site_exchange_rate: true, it will
     *        return pricing based on the current exchange rate. If the flag is set to false, it
     *        will return all of the defined prices for each currency.
     *
     * @return ProductPricePointResponse|null Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function readProductPricePoint(
        int $productId,
        int $pricePointId,
        ?bool $currencyPrices = null
    ): ?ProductPricePointResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/products/{product_id}/price_points/{price_point_id}.json'
        )
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('product_id', $productId)->required(),
                TemplateParam::init('price_point_id', $pricePointId)->required(),
                QueryParam::init('currency_prices', $currencyPrices)->commaSeparated()
            );

        $_resHandler = $this->responseHandler()->type(ProductPricePointResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
