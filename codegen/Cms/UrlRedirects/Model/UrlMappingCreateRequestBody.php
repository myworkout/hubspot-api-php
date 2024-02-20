<?php
/**
 * UrlMappingCreateRequestBody
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  HubSpot\Client\Cms\UrlRedirects
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * CMS Url Redirects
 *
 * URL redirect operations
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

namespace HubSpot\Client\Cms\UrlRedirects\Model;

use \ArrayAccess;
use \HubSpot\Client\Cms\UrlRedirects\ObjectSerializer;

/**
 * UrlMappingCreateRequestBody Class Doc Comment
 *
 * @category Class
 * @package  HubSpot\Client\Cms\UrlRedirects
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UrlMappingCreateRequestBody implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UrlMappingCreateRequestBody';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'is_trailing_slash_optional' => 'bool',
        'is_match_query_string' => 'bool',
        'redirect_style' => 'int',
        'route_prefix' => 'string',
        'is_match_full_url' => 'bool',
        'is_protocol_agnostic' => 'bool',
        'destination' => 'string',
        'is_only_after_not_found' => 'bool',
        'is_pattern' => 'bool',
        'precedence' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'is_trailing_slash_optional' => null,
        'is_match_query_string' => null,
        'redirect_style' => 'int32',
        'route_prefix' => null,
        'is_match_full_url' => null,
        'is_protocol_agnostic' => null,
        'destination' => null,
        'is_only_after_not_found' => null,
        'is_pattern' => null,
        'precedence' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'is_trailing_slash_optional' => false,
        'is_match_query_string' => false,
        'redirect_style' => false,
        'route_prefix' => false,
        'is_match_full_url' => false,
        'is_protocol_agnostic' => false,
        'destination' => false,
        'is_only_after_not_found' => false,
        'is_pattern' => false,
        'precedence' => false
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
        'is_trailing_slash_optional' => 'isTrailingSlashOptional',
        'is_match_query_string' => 'isMatchQueryString',
        'redirect_style' => 'redirectStyle',
        'route_prefix' => 'routePrefix',
        'is_match_full_url' => 'isMatchFullUrl',
        'is_protocol_agnostic' => 'isProtocolAgnostic',
        'destination' => 'destination',
        'is_only_after_not_found' => 'isOnlyAfterNotFound',
        'is_pattern' => 'isPattern',
        'precedence' => 'precedence'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_trailing_slash_optional' => 'setIsTrailingSlashOptional',
        'is_match_query_string' => 'setIsMatchQueryString',
        'redirect_style' => 'setRedirectStyle',
        'route_prefix' => 'setRoutePrefix',
        'is_match_full_url' => 'setIsMatchFullUrl',
        'is_protocol_agnostic' => 'setIsProtocolAgnostic',
        'destination' => 'setDestination',
        'is_only_after_not_found' => 'setIsOnlyAfterNotFound',
        'is_pattern' => 'setIsPattern',
        'precedence' => 'setPrecedence'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_trailing_slash_optional' => 'getIsTrailingSlashOptional',
        'is_match_query_string' => 'getIsMatchQueryString',
        'redirect_style' => 'getRedirectStyle',
        'route_prefix' => 'getRoutePrefix',
        'is_match_full_url' => 'getIsMatchFullUrl',
        'is_protocol_agnostic' => 'getIsProtocolAgnostic',
        'destination' => 'getDestination',
        'is_only_after_not_found' => 'getIsOnlyAfterNotFound',
        'is_pattern' => 'getIsPattern',
        'precedence' => 'getPrecedence'
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
        $this->setIfExists('is_trailing_slash_optional', $data ?? [], null);
        $this->setIfExists('is_match_query_string', $data ?? [], null);
        $this->setIfExists('redirect_style', $data ?? [], null);
        $this->setIfExists('route_prefix', $data ?? [], null);
        $this->setIfExists('is_match_full_url', $data ?? [], null);
        $this->setIfExists('is_protocol_agnostic', $data ?? [], null);
        $this->setIfExists('destination', $data ?? [], null);
        $this->setIfExists('is_only_after_not_found', $data ?? [], null);
        $this->setIfExists('is_pattern', $data ?? [], null);
        $this->setIfExists('precedence', $data ?? [], null);
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

        if ($this->container['redirect_style'] === null) {
            $invalidProperties[] = "'redirect_style' can't be null";
        }
        if ($this->container['route_prefix'] === null) {
            $invalidProperties[] = "'route_prefix' can't be null";
        }
        if ($this->container['destination'] === null) {
            $invalidProperties[] = "'destination' can't be null";
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
     * Gets is_trailing_slash_optional
     *
     * @return bool|null
     */
    public function getIsTrailingSlashOptional()
    {
        return $this->container['is_trailing_slash_optional'];
    }

    /**
     * Sets is_trailing_slash_optional
     *
     * @param bool|null $is_trailing_slash_optional is_trailing_slash_optional
     *
     * @return self
     */
    public function setIsTrailingSlashOptional($is_trailing_slash_optional)
    {
        if (is_null($is_trailing_slash_optional)) {
            throw new \InvalidArgumentException('non-nullable is_trailing_slash_optional cannot be null');
        }
        $this->container['is_trailing_slash_optional'] = $is_trailing_slash_optional;

        return $this;
    }

    /**
     * Gets is_match_query_string
     *
     * @return bool|null
     */
    public function getIsMatchQueryString()
    {
        return $this->container['is_match_query_string'];
    }

    /**
     * Sets is_match_query_string
     *
     * @param bool|null $is_match_query_string is_match_query_string
     *
     * @return self
     */
    public function setIsMatchQueryString($is_match_query_string)
    {
        if (is_null($is_match_query_string)) {
            throw new \InvalidArgumentException('non-nullable is_match_query_string cannot be null');
        }
        $this->container['is_match_query_string'] = $is_match_query_string;

        return $this;
    }

    /**
     * Gets redirect_style
     *
     * @return int
     */
    public function getRedirectStyle()
    {
        return $this->container['redirect_style'];
    }

    /**
     * Sets redirect_style
     *
     * @param int $redirect_style redirect_style
     *
     * @return self
     */
    public function setRedirectStyle($redirect_style)
    {
        if (is_null($redirect_style)) {
            throw new \InvalidArgumentException('non-nullable redirect_style cannot be null');
        }
        $this->container['redirect_style'] = $redirect_style;

        return $this;
    }

    /**
     * Gets route_prefix
     *
     * @return string
     */
    public function getRoutePrefix()
    {
        return $this->container['route_prefix'];
    }

    /**
     * Sets route_prefix
     *
     * @param string $route_prefix route_prefix
     *
     * @return self
     */
    public function setRoutePrefix($route_prefix)
    {
        if (is_null($route_prefix)) {
            throw new \InvalidArgumentException('non-nullable route_prefix cannot be null');
        }
        $this->container['route_prefix'] = $route_prefix;

        return $this;
    }

    /**
     * Gets is_match_full_url
     *
     * @return bool|null
     */
    public function getIsMatchFullUrl()
    {
        return $this->container['is_match_full_url'];
    }

    /**
     * Sets is_match_full_url
     *
     * @param bool|null $is_match_full_url is_match_full_url
     *
     * @return self
     */
    public function setIsMatchFullUrl($is_match_full_url)
    {
        if (is_null($is_match_full_url)) {
            throw new \InvalidArgumentException('non-nullable is_match_full_url cannot be null');
        }
        $this->container['is_match_full_url'] = $is_match_full_url;

        return $this;
    }

    /**
     * Gets is_protocol_agnostic
     *
     * @return bool|null
     */
    public function getIsProtocolAgnostic()
    {
        return $this->container['is_protocol_agnostic'];
    }

    /**
     * Sets is_protocol_agnostic
     *
     * @param bool|null $is_protocol_agnostic is_protocol_agnostic
     *
     * @return self
     */
    public function setIsProtocolAgnostic($is_protocol_agnostic)
    {
        if (is_null($is_protocol_agnostic)) {
            throw new \InvalidArgumentException('non-nullable is_protocol_agnostic cannot be null');
        }
        $this->container['is_protocol_agnostic'] = $is_protocol_agnostic;

        return $this;
    }

    /**
     * Gets destination
     *
     * @return string
     */
    public function getDestination()
    {
        return $this->container['destination'];
    }

    /**
     * Sets destination
     *
     * @param string $destination destination
     *
     * @return self
     */
    public function setDestination($destination)
    {
        if (is_null($destination)) {
            throw new \InvalidArgumentException('non-nullable destination cannot be null');
        }
        $this->container['destination'] = $destination;

        return $this;
    }

    /**
     * Gets is_only_after_not_found
     *
     * @return bool|null
     */
    public function getIsOnlyAfterNotFound()
    {
        return $this->container['is_only_after_not_found'];
    }

    /**
     * Sets is_only_after_not_found
     *
     * @param bool|null $is_only_after_not_found is_only_after_not_found
     *
     * @return self
     */
    public function setIsOnlyAfterNotFound($is_only_after_not_found)
    {
        if (is_null($is_only_after_not_found)) {
            throw new \InvalidArgumentException('non-nullable is_only_after_not_found cannot be null');
        }
        $this->container['is_only_after_not_found'] = $is_only_after_not_found;

        return $this;
    }

    /**
     * Gets is_pattern
     *
     * @return bool|null
     */
    public function getIsPattern()
    {
        return $this->container['is_pattern'];
    }

    /**
     * Sets is_pattern
     *
     * @param bool|null $is_pattern is_pattern
     *
     * @return self
     */
    public function setIsPattern($is_pattern)
    {
        if (is_null($is_pattern)) {
            throw new \InvalidArgumentException('non-nullable is_pattern cannot be null');
        }
        $this->container['is_pattern'] = $is_pattern;

        return $this;
    }

    /**
     * Gets precedence
     *
     * @return int|null
     */
    public function getPrecedence()
    {
        return $this->container['precedence'];
    }

    /**
     * Sets precedence
     *
     * @param int|null $precedence precedence
     *
     * @return self
     */
    public function setPrecedence($precedence)
    {
        if (is_null($precedence)) {
            throw new \InvalidArgumentException('non-nullable precedence cannot be null');
        }
        $this->container['precedence'] = $precedence;

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


