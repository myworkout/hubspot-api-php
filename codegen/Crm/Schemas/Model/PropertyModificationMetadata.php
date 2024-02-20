<?php
/**
 * PropertyModificationMetadata
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  HubSpot\Client\Crm\Schemas
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Schemas
 *
 * The CRM uses schemas to define how custom objects should store and represent information in the HubSpot CRM. Schemas define details about an object's type, properties, and associations. The schema can be uniquely identified by its **object type ID**.
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

namespace HubSpot\Client\Crm\Schemas\Model;

use \ArrayAccess;
use \HubSpot\Client\Crm\Schemas\ObjectSerializer;

/**
 * PropertyModificationMetadata Class Doc Comment
 *
 * @category Class
 * @package  HubSpot\Client\Crm\Schemas
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PropertyModificationMetadata implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PropertyModificationMetadata';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'read_only_options' => 'bool',
        'read_only_value' => 'bool',
        'read_only_definition' => 'bool',
        'archivable' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'read_only_options' => null,
        'read_only_value' => null,
        'read_only_definition' => null,
        'archivable' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'read_only_options' => false,
        'read_only_value' => false,
        'read_only_definition' => false,
        'archivable' => false
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
        'read_only_options' => 'readOnlyOptions',
        'read_only_value' => 'readOnlyValue',
        'read_only_definition' => 'readOnlyDefinition',
        'archivable' => 'archivable'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'read_only_options' => 'setReadOnlyOptions',
        'read_only_value' => 'setReadOnlyValue',
        'read_only_definition' => 'setReadOnlyDefinition',
        'archivable' => 'setArchivable'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'read_only_options' => 'getReadOnlyOptions',
        'read_only_value' => 'getReadOnlyValue',
        'read_only_definition' => 'getReadOnlyDefinition',
        'archivable' => 'getArchivable'
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
        $this->setIfExists('read_only_options', $data ?? [], null);
        $this->setIfExists('read_only_value', $data ?? [], null);
        $this->setIfExists('read_only_definition', $data ?? [], null);
        $this->setIfExists('archivable', $data ?? [], null);
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

        if ($this->container['read_only_value'] === null) {
            $invalidProperties[] = "'read_only_value' can't be null";
        }
        if ($this->container['read_only_definition'] === null) {
            $invalidProperties[] = "'read_only_definition' can't be null";
        }
        if ($this->container['archivable'] === null) {
            $invalidProperties[] = "'archivable' can't be null";
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
     * Gets read_only_options
     *
     * @return bool|null
     */
    public function getReadOnlyOptions()
    {
        return $this->container['read_only_options'];
    }

    /**
     * Sets read_only_options
     *
     * @param bool|null $read_only_options 
     *
     * @return self
     */
    public function setReadOnlyOptions($read_only_options)
    {
        if (is_null($read_only_options)) {
            throw new \InvalidArgumentException('non-nullable read_only_options cannot be null');
        }
        $this->container['read_only_options'] = $read_only_options;

        return $this;
    }

    /**
     * Gets read_only_value
     *
     * @return bool
     */
    public function getReadOnlyValue()
    {
        return $this->container['read_only_value'];
    }

    /**
     * Sets read_only_value
     *
     * @param bool $read_only_value 
     *
     * @return self
     */
    public function setReadOnlyValue($read_only_value)
    {
        if (is_null($read_only_value)) {
            throw new \InvalidArgumentException('non-nullable read_only_value cannot be null');
        }
        $this->container['read_only_value'] = $read_only_value;

        return $this;
    }

    /**
     * Gets read_only_definition
     *
     * @return bool
     */
    public function getReadOnlyDefinition()
    {
        return $this->container['read_only_definition'];
    }

    /**
     * Sets read_only_definition
     *
     * @param bool $read_only_definition 
     *
     * @return self
     */
    public function setReadOnlyDefinition($read_only_definition)
    {
        if (is_null($read_only_definition)) {
            throw new \InvalidArgumentException('non-nullable read_only_definition cannot be null');
        }
        $this->container['read_only_definition'] = $read_only_definition;

        return $this;
    }

    /**
     * Gets archivable
     *
     * @return bool
     */
    public function getArchivable()
    {
        return $this->container['archivable'];
    }

    /**
     * Sets archivable
     *
     * @param bool $archivable 
     *
     * @return self
     */
    public function setArchivable($archivable)
    {
        if (is_null($archivable)) {
            throw new \InvalidArgumentException('non-nullable archivable cannot be null');
        }
        $this->container['archivable'] = $archivable;

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


