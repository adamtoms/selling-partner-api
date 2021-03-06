<?php
/**
 * ContentDocument
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for A+ Content Management
 *
 * With the A+ Content API, you can build applications that help selling partners add rich marketing content to their Amazon product detail pages. A+ content helps selling partners share their brand and product story, which helps buyers make informed purchasing decisions. Selling partners assemble content by choosing from content modules and adding images and text.
 *
 * The version of the OpenAPI document: 2020-11-01
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\AplusContent;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;
use \SellingPartnerApi\Model\ModelInterface;

/**
 * ContentDocument Class Doc Comment
 *
 * @category Class
 * @description The A+ Content document. This is the enhanced content that is published to product detail pages.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ContentDocument implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ContentDocument';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'content_type' => '\SellingPartnerApi\Model\AplusContent\ContentType',
        'content_sub_type' => 'string',
        'locale' => 'string',
        'content_module_list' => '\SellingPartnerApi\Model\AplusContent\ContentModule[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'content_type' => null,
        'content_sub_type' => null,
        'locale' => null,
        'content_module_list' => null
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
        'name' => 'name',
        'content_type' => 'contentType',
        'content_sub_type' => 'contentSubType',
        'locale' => 'locale',
        'content_module_list' => 'contentModuleList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'content_type' => 'setContentType',
        'content_sub_type' => 'setContentSubType',
        'locale' => 'setLocale',
        'content_module_list' => 'setContentModuleList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'content_type' => 'getContentType',
        'content_sub_type' => 'getContentSubType',
        'locale' => 'getLocale',
        'content_module_list' => 'getContentModuleList'
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['content_type'] = $data['content_type'] ?? null;
        $this->container['content_sub_type'] = $data['content_sub_type'] ?? null;
        $this->container['locale'] = $data['locale'] ?? null;
        $this->container['content_module_list'] = $data['content_module_list'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 100)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 100.";
        }

        if ((mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['content_type'] === null) {
            $invalidProperties[] = "'content_type' can't be null";
        }
        if (!is_null($this->container['content_sub_type']) && (mb_strlen($this->container['content_sub_type']) < 1)) {
            $invalidProperties[] = "invalid value for 'content_sub_type', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['locale'] === null) {
            $invalidProperties[] = "'locale' can't be null";
        }
        if ((mb_strlen($this->container['locale']) < 5)) {
            $invalidProperties[] = "invalid value for 'locale', the character length must be bigger than or equal to 5.";
        }

        if ($this->container['content_module_list'] === null) {
            $invalidProperties[] = "'content_module_list' can't be null";
        }
        if ((count($this->container['content_module_list']) > 100)) {
            $invalidProperties[] = "invalid value for 'content_module_list', number of items must be less than or equal to 100.";
        }

        if ((count($this->container['content_module_list']) < 1)) {
            $invalidProperties[] = "invalid value for 'content_module_list', number of items must be greater than or equal to 1.";
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The A+ Content document name.
     *
     * @return self
     */
    public function setName($name)
    {
        if ((mb_strlen($name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ContentDocument., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ContentDocument., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets content_type
     *
     * @return \SellingPartnerApi\Model\AplusContent\ContentType
     */
    public function getContentType()
    {
        return $this->container['content_type'];
    }

    /**
     * Sets content_type
     *
     * @param \SellingPartnerApi\Model\AplusContent\ContentType $content_type content_type
     *
     * @return self
     */
    public function setContentType($content_type)
    {
        $this->container['content_type'] = $content_type;

        return $this;
    }

    /**
     * Gets content_sub_type
     *
     * @return string|null
     */
    public function getContentSubType()
    {
        return $this->container['content_sub_type'];
    }

    /**
     * Sets content_sub_type
     *
     * @param string|null $content_sub_type The A+ Content document subtype. This represents a special-purpose type of an A+ Content document. Not every A+ Content document type will have a subtype, and subtypes may change at any time.
     *
     * @return self
     */
    public function setContentSubType($content_sub_type)
    {

        if (!is_null($content_sub_type) && (mb_strlen($content_sub_type) < 1)) {
            throw new \InvalidArgumentException('invalid length for $content_sub_type when calling ContentDocument., must be bigger than or equal to 1.');
        }

        $this->container['content_sub_type'] = $content_sub_type;

        return $this;
    }

    /**
     * Gets locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param string $locale The IETF language tag. This only supports the primary language subtag with one secondary language subtag. The secondary language subtag is almost always a regional designation. This does not support additional subtags beyond the primary and secondary subtags. **Pattern:** ^[a-z]{2,}-[A-Z0-9]{2,}$
     *
     * @return self
     */
    public function setLocale($locale)
    {

        if ((mb_strlen($locale) < 5)) {
            throw new \InvalidArgumentException('invalid length for $locale when calling ContentDocument., must be bigger than or equal to 5.');
        }

        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets content_module_list
     *
     * @return \SellingPartnerApi\Model\AplusContent\ContentModule[]
     */
    public function getContentModuleList()
    {
        return $this->container['content_module_list'];
    }

    /**
     * Sets content_module_list
     *
     * @param \SellingPartnerApi\Model\AplusContent\ContentModule[] $content_module_list A list of A+ Content modules.
     *
     * @return self
     */
    public function setContentModuleList($content_module_list)
    {

        if ((count($content_module_list) > 100)) {
            throw new \InvalidArgumentException('invalid value for $content_module_list when calling ContentDocument., number of items must be less than or equal to 100.');
        }
        if ((count($content_module_list) < 1)) {
            throw new \InvalidArgumentException('invalid length for $content_module_list when calling ContentDocument., number of items must be greater than or equal to 1.');
        }
        $this->container['content_module_list'] = $content_module_list;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
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

