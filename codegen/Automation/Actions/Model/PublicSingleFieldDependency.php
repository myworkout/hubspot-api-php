<?php
/**
 * PublicSingleFieldDependency
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  HubSpot\Client\Automation\Actions
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Automation Actions V4
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v4
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace HubSpot\Client\Automation\Actions\Model;

use \ArrayAccess;
use \HubSpot\Client\Automation\Actions\ObjectSerializer;

/**
 * PublicSingleFieldDependency Class Doc Comment
 *
 * @category Class
 * @package  HubSpot\Client\Automation\Actions
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PublicSingleFieldDependency implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PublicSingleFieldDependency';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'dependency_type' => 'string',
        'dependent_field_names' => 'string[]',
        'controlling_field_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'dependency_type' => null,
        'dependent_field_names' => null,
        'controlling_field_name' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'dependency_type' => false,
        'dependent_field_names' => false,
        'controlling_field_name' => false
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
        'dependency_type' => 'dependencyType',
        'dependent_field_names' => 'dependentFieldNames',
        'controlling_field_name' => 'controllingFieldName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dependency_type' => 'setDependencyType',
        'dependent_field_names' => 'setDependentFieldNames',
        'controlling_field_name' => 'setControllingFieldName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dependency_type' => 'getDependencyType',
        'dependent_field_names' => 'getDependentFieldNames',
        'controlling_field_name' => 'getControllingFieldName'
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

    public const DEPENDENCY_TYPE_SINGLE_FIELD = 'SINGLE_FIELD';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDependencyTypeAllowableValues()
    {
        return [
            self::DEPENDENCY_TYPE_SINGLE_FIELD,
        ];
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
        $this->setIfExists('dependency_type', $data ?? [], 'SINGLE_FIELD');
        $this->setIfExists('dependent_field_names', $data ?? [], null);
        $this->setIfExists('controlling_field_name', $data ?? [], null);
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

        if ($this->container['dependency_type'] === null) {
            $invalidProperties[] = "'dependency_type' can't be null";
        }
        $allowedValues = $this->getDependencyTypeAllowableValues();
        if (!is_null($this->container['dependency_type']) && !in_array($this->container['dependency_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'dependency_type', must be one of '%s'",
                $this->container['dependency_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['dependent_field_names'] === null) {
            $invalidProperties[] = "'dependent_field_names' can't be null";
        }
        if ($this->container['controlling_field_name'] === null) {
            $invalidProperties[] = "'controlling_field_name' can't be null";
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
     * Gets dependency_type
     *
     * @return string
     */
    public function getDependencyType()
    {
        return $this->container['dependency_type'];
    }

    /**
     * Sets dependency_type
     *
     * @param string $dependency_type dependency_type
     *
     * @return self
     */
    public function setDependencyType($dependency_type)
    {
        if (is_null($dependency_type)) {
            throw new \InvalidArgumentException('non-nullable dependency_type cannot be null');
        }
        $allowedValues = $this->getDependencyTypeAllowableValues();
        if (!in_array($dependency_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'dependency_type', must be one of '%s'",
                    $dependency_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['dependency_type'] = $dependency_type;

        return $this;
    }

    /**
     * Gets dependent_field_names
     *
     * @return string[]
     */
    public function getDependentFieldNames()
    {
        return $this->container['dependent_field_names'];
    }

    /**
     * Sets dependent_field_names
     *
     * @param string[] $dependent_field_names dependent_field_names
     *
     * @return self
     */
    public function setDependentFieldNames($dependent_field_names)
    {
        if (is_null($dependent_field_names)) {
            throw new \InvalidArgumentException('non-nullable dependent_field_names cannot be null');
        }
        $this->container['dependent_field_names'] = $dependent_field_names;

        return $this;
    }

    /**
     * Gets controlling_field_name
     *
     * @return string
     */
    public function getControllingFieldName()
    {
        return $this->container['controlling_field_name'];
    }

    /**
     * Sets controlling_field_name
     *
     * @param string $controlling_field_name controlling_field_name
     *
     * @return self
     */
    public function setControllingFieldName($controlling_field_name)
    {
        if (is_null($controlling_field_name)) {
            throw new \InvalidArgumentException('non-nullable controlling_field_name cannot be null');
        }
        $this->container['controlling_field_name'] = $controlling_field_name;

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


