<?php
/**
 * PublicCalendarDatePropertyOperation
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

namespace HubSpot\Client\Crm\Lists\Model;

use \ArrayAccess;
use \HubSpot\Client\Crm\Lists\ObjectSerializer;

/**
 * PublicCalendarDatePropertyOperation Class Doc Comment
 *
 * @category Class
 * @package  HubSpot\Client\Crm\Lists
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PublicCalendarDatePropertyOperation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PublicCalendarDatePropertyOperation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'use_fiscal_year' => 'bool',
        'fiscal_year_start' => 'string',
        'include_objects_with_no_value_set' => 'bool',
        'operation_type' => 'string',
        'time_unit_count' => 'int',
        'operator' => 'string',
        'time_unit' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'use_fiscal_year' => null,
        'fiscal_year_start' => null,
        'include_objects_with_no_value_set' => null,
        'operation_type' => null,
        'time_unit_count' => 'int32',
        'operator' => null,
        'time_unit' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'use_fiscal_year' => false,
        'fiscal_year_start' => false,
        'include_objects_with_no_value_set' => false,
        'operation_type' => false,
        'time_unit_count' => false,
        'operator' => false,
        'time_unit' => false
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
        'use_fiscal_year' => 'useFiscalYear',
        'fiscal_year_start' => 'fiscalYearStart',
        'include_objects_with_no_value_set' => 'includeObjectsWithNoValueSet',
        'operation_type' => 'operationType',
        'time_unit_count' => 'timeUnitCount',
        'operator' => 'operator',
        'time_unit' => 'timeUnit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'use_fiscal_year' => 'setUseFiscalYear',
        'fiscal_year_start' => 'setFiscalYearStart',
        'include_objects_with_no_value_set' => 'setIncludeObjectsWithNoValueSet',
        'operation_type' => 'setOperationType',
        'time_unit_count' => 'setTimeUnitCount',
        'operator' => 'setOperator',
        'time_unit' => 'setTimeUnit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'use_fiscal_year' => 'getUseFiscalYear',
        'fiscal_year_start' => 'getFiscalYearStart',
        'include_objects_with_no_value_set' => 'getIncludeObjectsWithNoValueSet',
        'operation_type' => 'getOperationType',
        'time_unit_count' => 'getTimeUnitCount',
        'operator' => 'getOperator',
        'time_unit' => 'getTimeUnit'
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

    public const FISCAL_YEAR_START_JANUARY = 'JANUARY';
    public const FISCAL_YEAR_START_FEBRUARY = 'FEBRUARY';
    public const FISCAL_YEAR_START_MARCH = 'MARCH';
    public const FISCAL_YEAR_START_APRIL = 'APRIL';
    public const FISCAL_YEAR_START_MAY = 'MAY';
    public const FISCAL_YEAR_START_JUNE = 'JUNE';
    public const FISCAL_YEAR_START_JULY = 'JULY';
    public const FISCAL_YEAR_START_AUGUST = 'AUGUST';
    public const FISCAL_YEAR_START_SEPTEMBER = 'SEPTEMBER';
    public const FISCAL_YEAR_START_OCTOBER = 'OCTOBER';
    public const FISCAL_YEAR_START_NOVEMBER = 'NOVEMBER';
    public const FISCAL_YEAR_START_DECEMBER = 'DECEMBER';
    public const OPERATION_TYPE_CALENDAR_DATE = 'CALENDAR_DATE';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFiscalYearStartAllowableValues()
    {
        return [
            self::FISCAL_YEAR_START_JANUARY,
            self::FISCAL_YEAR_START_FEBRUARY,
            self::FISCAL_YEAR_START_MARCH,
            self::FISCAL_YEAR_START_APRIL,
            self::FISCAL_YEAR_START_MAY,
            self::FISCAL_YEAR_START_JUNE,
            self::FISCAL_YEAR_START_JULY,
            self::FISCAL_YEAR_START_AUGUST,
            self::FISCAL_YEAR_START_SEPTEMBER,
            self::FISCAL_YEAR_START_OCTOBER,
            self::FISCAL_YEAR_START_NOVEMBER,
            self::FISCAL_YEAR_START_DECEMBER,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOperationTypeAllowableValues()
    {
        return [
            self::OPERATION_TYPE_CALENDAR_DATE,
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
        $this->setIfExists('use_fiscal_year', $data ?? [], null);
        $this->setIfExists('fiscal_year_start', $data ?? [], null);
        $this->setIfExists('include_objects_with_no_value_set', $data ?? [], null);
        $this->setIfExists('operation_type', $data ?? [], 'CALENDAR_DATE');
        $this->setIfExists('time_unit_count', $data ?? [], null);
        $this->setIfExists('operator', $data ?? [], null);
        $this->setIfExists('time_unit', $data ?? [], null);
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

        $allowedValues = $this->getFiscalYearStartAllowableValues();
        if (!is_null($this->container['fiscal_year_start']) && !in_array($this->container['fiscal_year_start'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'fiscal_year_start', must be one of '%s'",
                $this->container['fiscal_year_start'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['include_objects_with_no_value_set'] === null) {
            $invalidProperties[] = "'include_objects_with_no_value_set' can't be null";
        }
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
        if ($this->container['time_unit'] === null) {
            $invalidProperties[] = "'time_unit' can't be null";
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
     * Gets use_fiscal_year
     *
     * @return bool|null
     */
    public function getUseFiscalYear()
    {
        return $this->container['use_fiscal_year'];
    }

    /**
     * Sets use_fiscal_year
     *
     * @param bool|null $use_fiscal_year use_fiscal_year
     *
     * @return self
     */
    public function setUseFiscalYear($use_fiscal_year)
    {
        if (is_null($use_fiscal_year)) {
            throw new \InvalidArgumentException('non-nullable use_fiscal_year cannot be null');
        }
        $this->container['use_fiscal_year'] = $use_fiscal_year;

        return $this;
    }

    /**
     * Gets fiscal_year_start
     *
     * @return string|null
     */
    public function getFiscalYearStart()
    {
        return $this->container['fiscal_year_start'];
    }

    /**
     * Sets fiscal_year_start
     *
     * @param string|null $fiscal_year_start fiscal_year_start
     *
     * @return self
     */
    public function setFiscalYearStart($fiscal_year_start)
    {
        if (is_null($fiscal_year_start)) {
            throw new \InvalidArgumentException('non-nullable fiscal_year_start cannot be null');
        }
        $allowedValues = $this->getFiscalYearStartAllowableValues();
        if (!in_array($fiscal_year_start, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'fiscal_year_start', must be one of '%s'",
                    $fiscal_year_start,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['fiscal_year_start'] = $fiscal_year_start;

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
     * Gets time_unit_count
     *
     * @return int|null
     */
    public function getTimeUnitCount()
    {
        return $this->container['time_unit_count'];
    }

    /**
     * Sets time_unit_count
     *
     * @param int|null $time_unit_count time_unit_count
     *
     * @return self
     */
    public function setTimeUnitCount($time_unit_count)
    {
        if (is_null($time_unit_count)) {
            throw new \InvalidArgumentException('non-nullable time_unit_count cannot be null');
        }
        $this->container['time_unit_count'] = $time_unit_count;

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
     * Gets time_unit
     *
     * @return string
     */
    public function getTimeUnit()
    {
        return $this->container['time_unit'];
    }

    /**
     * Sets time_unit
     *
     * @param string $time_unit time_unit
     *
     * @return self
     */
    public function setTimeUnit($time_unit)
    {
        if (is_null($time_unit)) {
            throw new \InvalidArgumentException('non-nullable time_unit cannot be null');
        }
        $this->container['time_unit'] = $time_unit;

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


