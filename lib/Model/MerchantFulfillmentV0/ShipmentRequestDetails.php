<?php
/**
 * ShipmentRequestDetails
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Merchant Fulfillment
 *
 * The Selling Partner API for Merchant Fulfillment helps you build applications that let sellers purchase shipping for non-Prime and Prime orders using Amazon's Buy Shipping Services.
 *
 * The version of the OpenAPI document: v0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\MerchantFulfillmentV0;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;
use \SellingPartnerApi\Model\ModelInterface;

/**
 * ShipmentRequestDetails Class Doc Comment
 *
 * @category Class
 * @description Shipment information required for requesting shipping service offers or for creating a shipment.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ShipmentRequestDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShipmentRequestDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amazon_order_id' => 'string',
        'seller_order_id' => 'string',
        'item_list' => '\SellingPartnerApi\Model\MerchantFulfillmentV0\FBMItem[]',
        'ship_from_address' => '\SellingPartnerApi\Model\MerchantFulfillmentV0\Address',
        'package_dimensions' => '\SellingPartnerApi\Model\MerchantFulfillmentV0\PackageDimensions',
        'weight' => '\SellingPartnerApi\Model\MerchantFulfillmentV0\Weight',
        'must_arrive_by_date' => 'string',
        'ship_date' => 'string',
        'shipping_service_options' => '\SellingPartnerApi\Model\MerchantFulfillmentV0\ShippingServiceOptions',
        'label_customization' => '\SellingPartnerApi\Model\MerchantFulfillmentV0\LabelCustomization'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amazon_order_id' => null,
        'seller_order_id' => null,
        'item_list' => null,
        'ship_from_address' => null,
        'package_dimensions' => null,
        'weight' => null,
        'must_arrive_by_date' => null,
        'ship_date' => null,
        'shipping_service_options' => null,
        'label_customization' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'amazon_order_id' => 'AmazonOrderId',
        'seller_order_id' => 'SellerOrderId',
        'item_list' => 'ItemList',
        'ship_from_address' => 'ShipFromAddress',
        'package_dimensions' => 'PackageDimensions',
        'weight' => 'Weight',
        'must_arrive_by_date' => 'MustArriveByDate',
        'ship_date' => 'ShipDate',
        'shipping_service_options' => 'ShippingServiceOptions',
        'label_customization' => 'LabelCustomization'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'amazon_order_id' => 'setAmazonOrderId',
        'seller_order_id' => 'setSellerOrderId',
        'item_list' => 'setItemList',
        'ship_from_address' => 'setShipFromAddress',
        'package_dimensions' => 'setPackageDimensions',
        'weight' => 'setWeight',
        'must_arrive_by_date' => 'setMustArriveByDate',
        'ship_date' => 'setShipDate',
        'shipping_service_options' => 'setShippingServiceOptions',
        'label_customization' => 'setLabelCustomization'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amazon_order_id' => 'getAmazonOrderId',
        'seller_order_id' => 'getSellerOrderId',
        'item_list' => 'getItemList',
        'ship_from_address' => 'getShipFromAddress',
        'package_dimensions' => 'getPackageDimensions',
        'weight' => 'getWeight',
        'must_arrive_by_date' => 'getMustArriveByDate',
        'ship_date' => 'getShipDate',
        'shipping_service_options' => 'getShippingServiceOptions',
        'label_customization' => 'getLabelCustomization'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    
    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['amazon_order_id'] = $data['amazon_order_id'] ?? null;
        $this->container['seller_order_id'] = $data['seller_order_id'] ?? null;
        $this->container['item_list'] = $data['item_list'] ?? null;
        $this->container['ship_from_address'] = $data['ship_from_address'] ?? null;
        $this->container['package_dimensions'] = $data['package_dimensions'] ?? null;
        $this->container['weight'] = $data['weight'] ?? null;
        $this->container['must_arrive_by_date'] = $data['must_arrive_by_date'] ?? null;
        $this->container['ship_date'] = $data['ship_date'] ?? null;
        $this->container['shipping_service_options'] = $data['shipping_service_options'] ?? null;
        $this->container['label_customization'] = $data['label_customization'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['amazon_order_id'] === null) {
            $invalidProperties[] = "'amazon_order_id' can't be null";
        }
        if (!is_null($this->container['seller_order_id']) && (mb_strlen($this->container['seller_order_id']) > 64)) {
            $invalidProperties[] = "invalid value for 'seller_order_id', the character length must be smaller than or equal to 64.";
        }

        if ($this->container['item_list'] === null) {
            $invalidProperties[] = "'item_list' can't be null";
        }
        if ($this->container['ship_from_address'] === null) {
            $invalidProperties[] = "'ship_from_address' can't be null";
        }
        if ($this->container['package_dimensions'] === null) {
            $invalidProperties[] = "'package_dimensions' can't be null";
        }
        if ($this->container['weight'] === null) {
            $invalidProperties[] = "'weight' can't be null";
        }
        if ($this->container['shipping_service_options'] === null) {
            $invalidProperties[] = "'shipping_service_options' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets amazon_order_id
     *
     * @return string
     */
    public function getAmazonOrderId()
    {
        return $this->container['amazon_order_id'];
    }

    /**
     * Sets amazon_order_id
     *
     * @param string $amazon_order_id An Amazon-defined order identifier, in 3-7-7 format.
     *
     * @return self
     */
    public function setAmazonOrderId($amazon_order_id)
    {
        $this->container['amazon_order_id'] = $amazon_order_id;

        return $this;
    }
    /**
     * Gets seller_order_id
     *
     * @return string|null
     */
    public function getSellerOrderId()
    {
        return $this->container['seller_order_id'];
    }

    /**
     * Sets seller_order_id
     *
     * @param string|null $seller_order_id A seller-defined order identifier.
     *
     * @return self
     */
    public function setSellerOrderId($seller_order_id)
    {
        if (!is_null($seller_order_id) && (mb_strlen($seller_order_id) > 64)) {
            throw new \InvalidArgumentException('invalid length for $seller_order_id when calling ShipmentRequestDetails., must be smaller than or equal to 64.');
        }

        $this->container['seller_order_id'] = $seller_order_id;

        return $this;
    }
    /**
     * Gets item_list
     *
     * @return \SellingPartnerApi\Model\MerchantFulfillmentV0\FBMItem[]
     */
    public function getItemList()
    {
        return $this->container['item_list'];
    }

    /**
     * Sets item_list
     *
     * @param \SellingPartnerApi\Model\MerchantFulfillmentV0\FBMItem[] $item_list The list of items to be included in a shipment.
     *
     * @return self
     */
    public function setItemList($item_list)
    {
        $this->container['item_list'] = $item_list;

        return $this;
    }
    /**
     * Gets ship_from_address
     *
     * @return \SellingPartnerApi\Model\MerchantFulfillmentV0\Address
     */
    public function getShipFromAddress()
    {
        return $this->container['ship_from_address'];
    }

    /**
     * Sets ship_from_address
     *
     * @param \SellingPartnerApi\Model\MerchantFulfillmentV0\Address $ship_from_address ship_from_address
     *
     * @return self
     */
    public function setShipFromAddress($ship_from_address)
    {
        $this->container['ship_from_address'] = $ship_from_address;

        return $this;
    }
    /**
     * Gets package_dimensions
     *
     * @return \SellingPartnerApi\Model\MerchantFulfillmentV0\PackageDimensions
     */
    public function getPackageDimensions()
    {
        return $this->container['package_dimensions'];
    }

    /**
     * Sets package_dimensions
     *
     * @param \SellingPartnerApi\Model\MerchantFulfillmentV0\PackageDimensions $package_dimensions package_dimensions
     *
     * @return self
     */
    public function setPackageDimensions($package_dimensions)
    {
        $this->container['package_dimensions'] = $package_dimensions;

        return $this;
    }
    /**
     * Gets weight
     *
     * @return \SellingPartnerApi\Model\MerchantFulfillmentV0\Weight
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param \SellingPartnerApi\Model\MerchantFulfillmentV0\Weight $weight weight
     *
     * @return self
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

        return $this;
    }
    /**
     * Gets must_arrive_by_date
     *
     * @return string|null
     */
    public function getMustArriveByDate()
    {
        return $this->container['must_arrive_by_date'];
    }

    /**
     * Sets must_arrive_by_date
     *
     * @param string|null $must_arrive_by_date A timestamp in ISO 8601 format.
     *
     * @return self
     */
    public function setMustArriveByDate($must_arrive_by_date)
    {
        $this->container['must_arrive_by_date'] = $must_arrive_by_date;

        return $this;
    }
    /**
     * Gets ship_date
     *
     * @return string|null
     */
    public function getShipDate()
    {
        return $this->container['ship_date'];
    }

    /**
     * Sets ship_date
     *
     * @param string|null $ship_date A timestamp in ISO 8601 format.
     *
     * @return self
     */
    public function setShipDate($ship_date)
    {
        $this->container['ship_date'] = $ship_date;

        return $this;
    }
    /**
     * Gets shipping_service_options
     *
     * @return \SellingPartnerApi\Model\MerchantFulfillmentV0\ShippingServiceOptions
     */
    public function getShippingServiceOptions()
    {
        return $this->container['shipping_service_options'];
    }

    /**
     * Sets shipping_service_options
     *
     * @param \SellingPartnerApi\Model\MerchantFulfillmentV0\ShippingServiceOptions $shipping_service_options shipping_service_options
     *
     * @return self
     */
    public function setShippingServiceOptions($shipping_service_options)
    {
        $this->container['shipping_service_options'] = $shipping_service_options;

        return $this;
    }
    /**
     * Gets label_customization
     *
     * @return \SellingPartnerApi\Model\MerchantFulfillmentV0\LabelCustomization|null
     */
    public function getLabelCustomization()
    {
        return $this->container['label_customization'];
    }

    /**
     * Sets label_customization
     *
     * @param \SellingPartnerApi\Model\MerchantFulfillmentV0\LabelCustomization|null $label_customization label_customization
     *
     * @return self
     */
    public function setLabelCustomization($label_customization)
    {
        $this->container['label_customization'] = $label_customization;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


