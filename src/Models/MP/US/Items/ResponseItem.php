<?php

/**
 * ResponseItem
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
 * Item Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Model\MP\US\Items;
use Walmart\Model\BaseModel;

/**
 * ResponseItem Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class ResponseItem extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ResponseItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'sku' => 'string',
        'associations' => '\Walmart\Model\MP\US\Items\GetItemAssociations200ResponseItemsInnerAssociationsInner[]',
        'errors' => '\Walmart\Model\MP\US\Items\GetItemAssociations200ResponseItemsInnerErrorsInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'sku' => null,
        'associations' => null,
        'errors' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'sku' => false,
        'associations' => false,
        'errors' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'sku' => 'sku',
        'associations' => 'associations',
        'errors' => 'errors'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'sku' => 'setSku',
        'associations' => 'setAssociations',
        'errors' => 'setErrors'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'sku' => 'getSku',
        'associations' => 'getAssociations',
        'errors' => 'getErrors'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('sku', $data ?? [], null);
        $this->setIfExists('associations', $data ?? [], null);
        $this->setIfExists('errors', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['sku'] === null) {
            $invalidProperties[] = "'sku' can't be null";
        }

        return $invalidProperties;
    }
    /**
     * Gets sku
     *
     * @return string
    
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string $sku An arbitrary alphanumeric unique ID, specified by the seller, which identifies each item.
     *
     * @return self
    
     */
    public function setSku($sku)
    {
        if (is_null($sku)) {
            throw new \InvalidArgumentException('non-nullable sku cannot be null');
        }

        $this->container['sku'] = $sku;
        return $this;
    }

    /**
     * Gets associations
     *
     * @return \Walmart\Model\MP\US\Items\GetItemAssociations200ResponseItemsInnerAssociationsInner[]|null
    
     */
    public function getAssociations()
    {
        return $this->container['associations'];
    }

    /**
     * Sets associations
     *
     * @param \Walmart\Model\MP\US\Items\GetItemAssociations200ResponseItemsInnerAssociationsInner[]|null $associations Item Associations like shippingTemplate, shipNode.
     *
     * @return self
    
     */
    public function setAssociations($associations)
    {
        if (is_null($associations)) {
            throw new \InvalidArgumentException('non-nullable associations cannot be null');
        }

        $this->container['associations'] = $associations;
        return $this;
    }

    /**
     * Gets errors
     *
     * @return \Walmart\Model\MP\US\Items\GetItemAssociations200ResponseItemsInnerErrorsInner[]|null
    
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     *
     * @param \Walmart\Model\MP\US\Items\GetItemAssociations200ResponseItemsInnerErrorsInner[]|null $errors errors
     *
     * @return self
    
     */
    public function setErrors($errors)
    {
        if (is_null($errors)) {
            throw new \InvalidArgumentException('non-nullable errors cannot be null');
        }

        $this->container['errors'] = $errors;
        return $this;
    }
}

