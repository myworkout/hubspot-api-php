<?php
/**
 * PublicTimePointOperation
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  HubSpot\Client\Crm\Lists
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Lists
 *
 * CRUD operations to manage lists and list memberships
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

namespace HubSpot\Client\Crm\Lists\Model;

use \ArrayAccess;
use \HubSpot\Client\Crm\Lists\ObjectSerializer;

/**
 * PublicTimePointOperation Class Doc Comment
 *
 * @category Class
 * @package  HubSpot\Client\Crm\Lists
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PublicTimePointOperation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PublicTimePointOperation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'operation_type' => 'string',
        'operator' => 'string',
        'include_objects_with_no_value_set' => 'bool',
        'time_point' => '\HubSpot\Client\Crm\Lists\Model\PublicTimePointOperationTimePoint',
        'endpoint_behavior' => 'string',
        'property_parser' => 'string',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'operation_type' => null,
        'operator' => null,
        'include_objects_with_no_value_set' => null,
        'time_point' => null,
        'endpoint_behavior' => null,
        'property_parser' => null,
        'type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'operation_type' => false,
        'operator' => false,
        'include_objects_with_no_value_set' => false,
        'time_point' => false,
        'endpoint_behavior' => false,
        'property_parser' => false,
        'type' => false
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
        'operation_type' => 'operationType',
        'operator' => 'operator',
        'include_objects_with_no_value_set' => 'includeObjectsWithNoValueSet',
        'time_point' => 'timePoint',
        'endpoint_behavior' => 'endpointBehavior',
        'property_parser' => 'propertyParser',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'operation_type' => 'setOperationType',
        'operator' => 'setOperator',
        'include_objects_with_no_value_set' => 'setIncludeObjectsWithNoValueSet',
        'time_point' => 'setTimePoint',
        'endpoint_behavior' => 'setEndpointBehavior',
        'property_parser' => 'setPropertyParser',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'operation_type' => 'getOperationType',
        'operator' => 'getOperator',
        'include_objects_with_no_value_set' => 'getIncludeObjectsWithNoValueSet',
        'time_point' => 'getTimePoint',
        'endpoint_behavior' => 'getEndpointBehavior',
        'property_parser' => 'getPropertyParser',
        'type' => 'getType'
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

    public const OPERATION_TYPE_TIME_POINT = 'TIME_POINT';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOperationTypeAllowableValues()
    {
        return [
            self::OPERATION_TYPE_TIME_POINT,
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
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('operation_type', $data ?? [], 'TIME_POINT');
        $this->setIfExists('operator', $data ?? [], null);
        $this->setIfExists('include_objects_with_no_value_set', $data ?? [], null);
        $this->setIfExists('time_point', $data ?? [], null);
        $this->setIfExists('endpoint_behavior', $data ?? [], null);
        $this->setIfExists('property_parser', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
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

        if ($this->container['operation_type'] === null) {
            $invalidProperties[] = "'operation_type' can't be null";
        }
        $allowedValues = $this->getOperationTypeAllowableValues();
        if (!is_null($this->container['operation_type']) && !in_array($this->container['operation_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'operation_type', must be one of '%s'",
                $this->container['operation_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['operator'] === null) {
            $invalidProperties[] = "'operator' can't be null";
        }
        if ($this->container['include_objects_with_no_value_set'] === null) {
            $invalidProperties[] = "'include_objects_with_no_value_set' can't be null";
        }
        if ($this->container['time_point'] === null) {
            $invalidProperties[] = "'time_point' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
     * Gets operation_type
     *
     * @return string
     */
    public function getOperationType()
    {
        return $this->container['operation_type'];
    }

    /**
     * Sets operation_type
     *
     * @param string $operation_type operation_type
     *
     * @return self
     */
    public function setOperationType($operation_type)
    {
        if (is_null($operation_type)) {
            throw new \InvalidArgumentException('non-nullable operation_type cannot be null');
        }
        $allowedValues = $this->getOperationTypeAllowableValues();
        if (!in_array($operation_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'operation_type', must be one of '%s'",
                    $operation_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['operation_type'] = $operation_type;

        return $this;
    }

    /**
     * Gets operator
     *
     * @return string
     */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
     * Sets operator
     *
     * @param string $operator operator
     *
     * @return self
     */
    public function setOperator($operator)
    {
        if (is_null($operator)) {
            throw new \InvalidArgumentException('non-nullable operator cannot be null');
        }
        $this->container['operator'] = $operator;

        return $this;
    }

    /**
     * Gets include_objects_with_no_value_set
     *
     * @return bool
     */
    public function getIncludeObjectsWithNoValueSet()
    {
        return $this->container['include_objects_with_no_value_set'];
    }

    /**
     * Sets include_objects_with_no_value_set
     *
     * @param bool $include_objects_with_no_value_set include_objects_with_no_value_set
     *
     * @return self
     */
    public function setIncludeObjectsWithNoValueSet($include_objects_with_no_value_set)
    {
        if (is_null($include_objects_with_no_value_set)) {
            throw new \InvalidArgumentException('non-nullable include_objects_with_no_value_set cannot be null');
        }
        $this->container['include_objects_with_no_value_set'] = $include_objects_with_no_value_set;

        return $this;
    }

    /**
     * Gets time_point
     *
     * @return \HubSpot\Client\Crm\Lists\Model\PublicTimePointOperationTimePoint
     */
    public function getTimePoint()
    {
        return $this->container['time_point'];
    }

    /**
     * Sets time_point
     *
     * @param \HubSpot\Client\Crm\Lists\Model\PublicTimePointOperationTimePoint $time_point time_point
     *
     * @return self
     */
    public function setTimePoint($time_point)
    {
        if (is_null($time_point)) {
            throw new \InvalidArgumentException('non-nullable time_point cannot be null');
        }
        $this->container['time_point'] = $time_point;

        return $this;
    }

    /**
     * Gets endpoint_behavior
     *
     * @return string|null
     */
    public function getEndpointBehavior()
    {
        return $this->container['endpoint_behavior'];
    }

    /**
     * Sets endpoint_behavior
     *
     * @param string|null $endpoint_behavior endpoint_behavior
     *
     * @return self
     */
    public function setEndpointBehavior($endpoint_behavior)
    {
        if (is_null($endpoint_behavior)) {
            throw new \InvalidArgumentException('non-nullable endpoint_behavior cannot be null');
        }
        $this->container['endpoint_behavior'] = $endpoint_behavior;

        return $this;
    }

    /**
     * Gets property_parser
     *
     * @return string|null
     */
    public function getPropertyParser()
    {
        return $this->container['property_parser'];
    }

    /**
     * Sets property_parser
     *
     * @param string|null $property_parser property_parser
     *
     * @return self
     */
    public function setPropertyParser($property_parser)
    {
        if (is_null($property_parser)) {
            throw new \InvalidArgumentException('non-nullable property_parser cannot be null');
        }
        $this->container['property_parser'] = $property_parser;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

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


