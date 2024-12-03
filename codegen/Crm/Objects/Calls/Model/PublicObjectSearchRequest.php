<?php
/**
 * PublicObjectSearchRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  HubSpot\Client\Crm\Objects\Calls
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Calls
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v3
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace HubSpot\Client\Crm\Objects\Calls\Model;

use \ArrayAccess;
use \HubSpot\Client\Crm\Objects\Calls\ObjectSerializer;

/**
 * PublicObjectSearchRequest Class Doc Comment
 *
 * @category Class
 * @package  HubSpot\Client\Crm\Objects\Calls
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PublicObjectSearchRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PublicObjectSearchRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'query' => 'string',
        'limit' => 'int',
        'after' => 'string',
        'sorts' => 'string[]',
        'properties' => 'string[]',
        'filter_groups' => '\HubSpot\Client\Crm\Objects\Calls\Model\FilterGroup[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'query' => null,
        'limit' => 'int32',
        'after' => null,
        'sorts' => null,
        'properties' => null,
        'filter_groups' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'query' => false,
        'limit' => false,
        'after' => false,
        'sorts' => false,
        'properties' => false,
        'filter_groups' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'query' => 'query',
        'limit' => 'limit',
        'after' => 'after',
        'sorts' => 'sorts',
        'properties' => 'properties',
        'filter_groups' => 'filterGroups'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'query' => 'setQuery',
        'limit' => 'setLimit',
        'after' => 'setAfter',
        'sorts' => 'setSorts',
        'properties' => 'setProperties',
        'filter_groups' => 'setFilterGroups'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'query' => 'getQuery',
        'limit' => 'getLimit',
        'after' => 'getAfter',
        'sorts' => 'getSorts',
        'properties' => 'getProperties',
        'filter_groups' => 'getFilterGroups'
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
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('query', $data ?? [], null);
        $this->setIfExists('limit', $data ?? [], null);
        $this->setIfExists('after', $data ?? [], null);
        $this->setIfExists('sorts', $data ?? [], null);
        $this->setIfExists('properties', $data ?? [], null);
        $this->setIfExists('filter_groups', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
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
     * Gets query
     *
     * @return string|null
     */
    public function getQuery()
    {
        return $this->container['query'];
    }

    /**
     * Sets query
     *
     * @param string|null $query query
     *
     * @return self
     */
    public function setQuery($query)
    {
        if (is_null($query)) {
            throw new \InvalidArgumentException('non-nullable query cannot be null');
        }
        $this->container['query'] = $query;

        return $this;
    }

    /**
     * Gets limit
     *
     * @return int|null
     */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
     * Sets limit
     *
     * @param int|null $limit limit
     *
     * @return self
     */
    public function setLimit($limit)
    {
        if (is_null($limit)) {
            throw new \InvalidArgumentException('non-nullable limit cannot be null');
        }
        $this->container['limit'] = $limit;

        return $this;
    }

    /**
     * Gets after
     *
     * @return string|null
     */
    public function getAfter()
    {
        return $this->container['after'];
    }

    /**
     * Sets after
     *
     * @param string|null $after after
     *
     * @return self
     */
    public function setAfter($after)
    {
        if (is_null($after)) {
            throw new \InvalidArgumentException('non-nullable after cannot be null');
        }
        $this->container['after'] = $after;

        return $this;
    }

    /**
     * Gets sorts
     *
     * @return string[]|null
     */
    public function getSorts()
    {
        return $this->container['sorts'];
    }

    /**
     * Sets sorts
     *
     * @param string[]|null $sorts sorts
     *
     * @return self
     */
    public function setSorts($sorts)
    {
        if (is_null($sorts)) {
            throw new \InvalidArgumentException('non-nullable sorts cannot be null');
        }
        $this->container['sorts'] = $sorts;

        return $this;
    }

    /**
     * Gets properties
     *
     * @return string[]|null
     */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
     * Sets properties
     *
     * @param string[]|null $properties properties
     *
     * @return self
     */
    public function setProperties($properties)
    {
        if (is_null($properties)) {
            throw new \InvalidArgumentException('non-nullable properties cannot be null');
        }
        $this->container['properties'] = $properties;

        return $this;
    }

    /**
     * Gets filter_groups
     *
     * @return \HubSpot\Client\Crm\Objects\Calls\Model\FilterGroup[]|null
     */
    public function getFilterGroups()
    {
        return $this->container['filter_groups'];
    }

    /**
     * Sets filter_groups
     *
     * @param \HubSpot\Client\Crm\Objects\Calls\Model\FilterGroup[]|null $filter_groups filter_groups
     *
     * @return self
     */
    public function setFilterGroups($filter_groups)
    {
        if (is_null($filter_groups)) {
            throw new \InvalidArgumentException('non-nullable filter_groups cannot be null');
        }
        $this->container['filter_groups'] = $filter_groups;

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


