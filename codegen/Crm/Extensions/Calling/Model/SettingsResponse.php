<?php
/**
 * SettingsResponse
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  HubSpot\Client\Crm\Extensions\Calling
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Calling Extensions
 *
 * Provides a way for apps to add custom calling options to a contact record. This works in conjunction with the [Calling SDK](#), which is used to build your phone/calling UI. The endpoints here allow your service to appear as an option to HubSpot users when they access the *Call* action on a contact record. Once accessed, your custom phone/calling UI will be displayed in an iframe at the specified URL with the specified dimensions on that record.
 *
 * The version of the OpenAPI document: v3
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace HubSpot\Client\Crm\Extensions\Calling\Model;

use \ArrayAccess;
use \HubSpot\Client\Crm\Extensions\Calling\ObjectSerializer;

/**
 * SettingsResponse Class Doc Comment
 *
 * @category Class
 * @description Current settings state
 * @package  HubSpot\Client\Crm\Extensions\Calling
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SettingsResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SettingsResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'created_at' => '\DateTime',
        'supports_custom_objects' => 'bool',
        'is_ready' => 'bool',
        'name' => 'string',
        'width' => 'int',
        'url' => 'string',
        'height' => 'int',
        'updated_at' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'created_at' => 'date-time',
        'supports_custom_objects' => null,
        'is_ready' => null,
        'name' => null,
        'width' => 'int32',
        'url' => null,
        'height' => 'int32',
        'updated_at' => 'date-time'
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
        'created_at' => 'createdAt',
        'supports_custom_objects' => 'supportsCustomObjects',
        'is_ready' => 'isReady',
        'name' => 'name',
        'width' => 'width',
        'url' => 'url',
        'height' => 'height',
        'updated_at' => 'updatedAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'created_at' => 'setCreatedAt',
        'supports_custom_objects' => 'setSupportsCustomObjects',
        'is_ready' => 'setIsReady',
        'name' => 'setName',
        'width' => 'setWidth',
        'url' => 'setUrl',
        'height' => 'setHeight',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'created_at' => 'getCreatedAt',
        'supports_custom_objects' => 'getSupportsCustomObjects',
        'is_ready' => 'getIsReady',
        'name' => 'getName',
        'width' => 'getWidth',
        'url' => 'getUrl',
        'height' => 'getHeight',
        'updated_at' => 'getUpdatedAt'
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
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['supports_custom_objects'] = $data['supports_custom_objects'] ?? null;
        $this->container['is_ready'] = $data['is_ready'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['width'] = $data['width'] ?? null;
        $this->container['url'] = $data['url'] ?? null;
        $this->container['height'] = $data['height'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['supports_custom_objects'] === null) {
            $invalidProperties[] = "'supports_custom_objects' can't be null";
        }
        if ($this->container['is_ready'] === null) {
            $invalidProperties[] = "'is_ready' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['width'] === null) {
            $invalidProperties[] = "'width' can't be null";
        }
        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
        if ($this->container['height'] === null) {
            $invalidProperties[] = "'height' can't be null";
        }
        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
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
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at When this calling extension was created.
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets supports_custom_objects
     *
     * @return bool
     */
    public function getSupportsCustomObjects()
    {
        return $this->container['supports_custom_objects'];
    }

    /**
     * Sets supports_custom_objects
     *
     * @param bool $supports_custom_objects When true, you are indicating that your service is compatible with engagement v2 service and can be used with custom objects.
     *
     * @return self
     */
    public function setSupportsCustomObjects($supports_custom_objects)
    {
        $this->container['supports_custom_objects'] = $supports_custom_objects;

        return $this;
    }

    /**
     * Gets is_ready
     *
     * @return bool
     */
    public function getIsReady()
    {
        return $this->container['is_ready'];
    }

    /**
     * Sets is_ready
     *
     * @param bool $is_ready When true, your service will appear as an option under the *Call* action in contact records of connected accounts.
     *
     * @return self
     */
    public function setIsReady($is_ready)
    {
        $this->container['is_ready'] = $is_ready;

        return $this;
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
     * @param string $name The name of your calling service to display to users.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets width
     *
     * @return int
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param int $width The target width of the iframe that will contain your phone/calling UI.
     *
     * @return self
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url The URL to your phone/calling UI, built with the [Calling SDK](#).
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets height
     *
     * @return int
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param int $height The target height of the iframe that will contain your phone/calling UI.
     *
     * @return self
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at The last time the settings for this calling extension were modified.
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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


