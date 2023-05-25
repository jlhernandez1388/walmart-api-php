<?php

/**
 * ItemsDetailsForListing200ResponsePayloadInnerStats
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */

/**
 * Insights Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Model\MP\US\Insights;
use Walmart\Model\BaseModel;

/**
 * ItemsDetailsForListing200ResponsePayloadInnerStats Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class ItemsDetailsForListing200ResponsePayloadInnerStats extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'itemsDetailsForListing_200_response_payload_inner_stats';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'gmv' => '\Walmart\Model\MP\US\Insights\ItemsDetailsForListing200ResponsePayloadInnerStatsGmv',
        'pageViews' => 'string',
        'orders' => 'string',
        'conversionRate' => 'string',
        'totalUnits' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'gmv' => null,
        'pageViews' => null,
        'orders' => null,
        'conversionRate' => null,
        'totalUnits' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'gmv' => false,
        'pageViews' => false,
        'orders' => false,
        'conversionRate' => false,
        'totalUnits' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'gmv' => 'gmv',
        'pageViews' => 'pageViews',
        'orders' => 'orders',
        'conversionRate' => 'conversionRate',
        'totalUnits' => 'totalUnits'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'gmv' => 'setGmv',
        'pageViews' => 'setPageViews',
        'orders' => 'setOrders',
        'conversionRate' => 'setConversionRate',
        'totalUnits' => 'setTotalUnits'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'gmv' => 'getGmv',
        'pageViews' => 'getPageViews',
        'orders' => 'getOrders',
        'conversionRate' => 'getConversionRate',
        'totalUnits' => 'getTotalUnits'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('gmv', $data ?? [], null);
        $this->setIfExists('pageViews', $data ?? [], null);
        $this->setIfExists('orders', $data ?? [], null);
        $this->setIfExists('conversionRate', $data ?? [], null);
        $this->setIfExists('totalUnits', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];


        return $invalidProperties;
    }
    /**
     * Gets gmv
     *
     * @return \Walmart\Model\MP\US\Insights\ItemsDetailsForListing200ResponsePayloadInnerStatsGmv|null
    
     */
    public function getGmv()
    {
        return $this->container['gmv'];
    }

    /**
     * Sets gmv
     *
     * @param \Walmart\Model\MP\US\Insights\ItemsDetailsForListing200ResponsePayloadInnerStatsGmv|null $gmv gmv
     *
     * @return self
    
     */
    public function setGmv($gmv)
    {
        if (is_null($gmv)) {
            throw new \InvalidArgumentException('non-nullable gmv cannot be null');
        }

        $this->container['gmv'] = $gmv;
        return $this;
    }

    /**
     * Gets pageViews
     *
     * @return string|null
    
     */
    public function getPageViews()
    {
        return $this->container['pageViews'];
    }

    /**
     * Sets pageViews
     *
     * @param string|null $pageViews pageViews
     *
     * @return self
    
     */
    public function setPageViews($pageViews)
    {
        if (is_null($pageViews)) {
            throw new \InvalidArgumentException('non-nullable pageViews cannot be null');
        }

        $this->container['pageViews'] = $pageViews;
        return $this;
    }

    /**
     * Gets orders
     *
     * @return string|null
    
     */
    public function getOrders()
    {
        return $this->container['orders'];
    }

    /**
     * Sets orders
     *
     * @param string|null $orders orders
     *
     * @return self
    
     */
    public function setOrders($orders)
    {
        if (is_null($orders)) {
            throw new \InvalidArgumentException('non-nullable orders cannot be null');
        }

        $this->container['orders'] = $orders;
        return $this;
    }

    /**
     * Gets conversionRate
     *
     * @return string|null
    
     */
    public function getConversionRate()
    {
        return $this->container['conversionRate'];
    }

    /**
     * Sets conversionRate
     *
     * @param string|null $conversionRate conversionRate
     *
     * @return self
    
     */
    public function setConversionRate($conversionRate)
    {
        if (is_null($conversionRate)) {
            throw new \InvalidArgumentException('non-nullable conversionRate cannot be null');
        }

        $this->container['conversionRate'] = $conversionRate;
        return $this;
    }

    /**
     * Gets totalUnits
     *
     * @return string|null
    
     */
    public function getTotalUnits()
    {
        return $this->container['totalUnits'];
    }

    /**
     * Sets totalUnits
     *
     * @param string|null $totalUnits totalUnits
     *
     * @return self
    
     */
    public function setTotalUnits($totalUnits)
    {
        if (is_null($totalUnits)) {
            throw new \InvalidArgumentException('non-nullable totalUnits cannot be null');
        }

        $this->container['totalUnits'] = $totalUnits;
        return $this;
    }
}

