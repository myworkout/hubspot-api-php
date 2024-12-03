<?php
/**
 * PublicAssociationFilterBranch
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
 * PublicAssociationFilterBranch Class Doc Comment
 *
 * @category Class
 * @package  HubSpot\Client\Crm\Lists
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PublicAssociationFilterBranch implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PublicAssociationFilterBranch';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'filter_branch_type' => 'string',
        'filter_branches' => '\HubSpot\Client\Crm\Lists\Model\PublicPropertyAssociationFilterBranchFilterBranchesInner[]',
        'object_type_id' => 'string',
        'filter_branch_operator' => 'string',
        'association_type_id' => 'int',
        'association_category' => 'string',
        'filters' => '\HubSpot\Client\Crm\Lists\Model\PublicPropertyAssociationFilterBranchFiltersInner[]',
        'operator' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'filter_branch_type' => null,
        'filter_branches' => null,
        'object_type_id' => null,
        'filter_branch_operator' => null,
        'association_type_id' => 'int32',
        'association_category' => null,
        'filters' => null,
        'operator' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'filter_branch_type' => false,
        'filter_branches' => false,
        'object_type_id' => false,
        'filter_branch_operator' => false,
        'association_type_id' => false,
        'association_category' => false,
        'filters' => false,
        'operator' => false
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
        'filter_branch_type' => 'filterBranchType',
        'filter_branches' => 'filterBranches',
        'object_type_id' => 'objectTypeId',
        'filter_branch_operator' => 'filterBranchOperator',
        'association_type_id' => 'associationTypeId',
        'association_category' => 'associationCategory',
        'filters' => 'filters',
        'operator' => 'operator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'filter_branch_type' => 'setFilterBranchType',
        'filter_branches' => 'setFilterBranches',
        'object_type_id' => 'setObjectTypeId',
        'filter_branch_operator' => 'setFilterBranchOperator',
        'association_type_id' => 'setAssociationTypeId',
        'association_category' => 'setAssociationCategory',
        'filters' => 'setFilters',
        'operator' => 'setOperator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'filter_branch_type' => 'getFilterBranchType',
        'filter_branches' => 'getFilterBranches',
        'object_type_id' => 'getObjectTypeId',
        'filter_branch_operator' => 'getFilterBranchOperator',
        'association_type_id' => 'getAssociationTypeId',
        'association_category' => 'getAssociationCategory',
        'filters' => 'getFilters',
        'operator' => 'getOperator'
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

    public const FILTER_BRANCH_TYPE_ASSOCIATION = 'ASSOCIATION';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFilterBranchTypeAllowableValues()
    {
        return [
            self::FILTER_BRANCH_TYPE_ASSOCIATION,
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
        $this->setIfExists('filter_branch_type', $data ?? [], 'ASSOCIATION');
        $this->setIfExists('filter_branches', $data ?? [], null);
        $this->setIfExists('object_type_id', $data ?? [], null);
        $this->setIfExists('filter_branch_operator', $data ?? [], null);
        $this->setIfExists('association_type_id', $data ?? [], null);
        $this->setIfExists('association_category', $data ?? [], null);
        $this->setIfExists('filters', $data ?? [], null);
        $this->setIfExists('operator', $data ?? [], null);
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

        if ($this->container['filter_branch_type'] === null) {
            $invalidProperties[] = "'filter_branch_type' can't be null";
        }
        $allowedValues = $this->getFilterBranchTypeAllowableValues();
        if (!is_null($this->container['filter_branch_type']) && !in_array($this->container['filter_branch_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'filter_branch_type', must be one of '%s'",
                $this->container['filter_branch_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['filter_branches'] === null) {
            $invalidProperties[] = "'filter_branches' can't be null";
        }
        if ($this->container['object_type_id'] === null) {
            $invalidProperties[] = "'object_type_id' can't be null";
        }
        if ($this->container['filter_branch_operator'] === null) {
            $invalidProperties[] = "'filter_branch_operator' can't be null";
        }
        if ($this->container['association_type_id'] === null) {
            $invalidProperties[] = "'association_type_id' can't be null";
        }
        if ($this->container['association_category'] === null) {
            $invalidProperties[] = "'association_category' can't be null";
        }
        if ($this->container['filters'] === null) {
            $invalidProperties[] = "'filters' can't be null";
        }
        if ($this->container['operator'] === null) {
            $invalidProperties[] = "'operator' can't be null";
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
     * Gets filter_branch_type
     *
     * @return string
     */
    public function getFilterBranchType()
    {
        return $this->container['filter_branch_type'];
    }

    /**
     * Sets filter_branch_type
     *
     * @param string $filter_branch_type filter_branch_type
     *
     * @return self
     */
    public function setFilterBranchType($filter_branch_type)
    {
        if (is_null($filter_branch_type)) {
            throw new \InvalidArgumentException('non-nullable filter_branch_type cannot be null');
        }
        $allowedValues = $this->getFilterBranchTypeAllowableValues();
        if (!in_array($filter_branch_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'filter_branch_type', must be one of '%s'",
                    $filter_branch_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['filter_branch_type'] = $filter_branch_type;

        return $this;
    }

    /**
     * Gets filter_branches
     *
     * @return \HubSpot\Client\Crm\Lists\Model\PublicPropertyAssociationFilterBranchFilterBranchesInner[]
     */
    public function getFilterBranches()
    {
        return $this->container['filter_branches'];
    }

    /**
     * Sets filter_branches
     *
     * @param \HubSpot\Client\Crm\Lists\Model\PublicPropertyAssociationFilterBranchFilterBranchesInner[] $filter_branches filter_branches
     *
     * @return self
     */
    public function setFilterBranches($filter_branches)
    {
        if (is_null($filter_branches)) {
            throw new \InvalidArgumentException('non-nullable filter_branches cannot be null');
        }
        $this->container['filter_branches'] = $filter_branches;

        return $this;
    }

    /**
     * Gets object_type_id
     *
     * @return string
     */
    public function getObjectTypeId()
    {
        return $this->container['object_type_id'];
    }

    /**
     * Sets object_type_id
     *
     * @param string $object_type_id object_type_id
     *
     * @return self
     */
    public function setObjectTypeId($object_type_id)
    {
        if (is_null($object_type_id)) {
            throw new \InvalidArgumentException('non-nullable object_type_id cannot be null');
        }
        $this->container['object_type_id'] = $object_type_id;

        return $this;
    }

    /**
     * Gets filter_branch_operator
     *
     * @return string
     */
    public function getFilterBranchOperator()
    {
        return $this->container['filter_branch_operator'];
    }

    /**
     * Sets filter_branch_operator
     *
     * @param string $filter_branch_operator filter_branch_operator
     *
     * @return self
     */
    public function setFilterBranchOperator($filter_branch_operator)
    {
        if (is_null($filter_branch_operator)) {
            throw new \InvalidArgumentException('non-nullable filter_branch_operator cannot be null');
        }
        $this->container['filter_branch_operator'] = $filter_branch_operator;

        return $this;
    }

    /**
     * Gets association_type_id
     *
     * @return int
     */
    public function getAssociationTypeId()
    {
        return $this->container['association_type_id'];
    }

    /**
     * Sets association_type_id
     *
     * @param int $association_type_id association_type_id
     *
     * @return self
     */
    public function setAssociationTypeId($association_type_id)
    {
        if (is_null($association_type_id)) {
            throw new \InvalidArgumentException('non-nullable association_type_id cannot be null');
        }
        $this->container['association_type_id'] = $association_type_id;

        return $this;
    }

    /**
     * Gets association_category
     *
     * @return string
     */
    public function getAssociationCategory()
    {
        return $this->container['association_category'];
    }

    /**
     * Sets association_category
     *
     * @param string $association_category association_category
     *
     * @return self
     */
    public function setAssociationCategory($association_category)
    {
        if (is_null($association_category)) {
            throw new \InvalidArgumentException('non-nullable association_category cannot be null');
        }
        $this->container['association_category'] = $association_category;

        return $this;
    }

    /**
     * Gets filters
     *
     * @return \HubSpot\Client\Crm\Lists\Model\PublicPropertyAssociationFilterBranchFiltersInner[]
     */
    public function getFilters()
    {
        return $this->container['filters'];
    }

    /**
     * Sets filters
     *
     * @param \HubSpot\Client\Crm\Lists\Model\PublicPropertyAssociationFilterBranchFiltersInner[] $filters filters
     *
     * @return self
     */
    public function setFilters($filters)
    {
        if (is_null($filters)) {
            throw new \InvalidArgumentException('non-nullable filters cannot be null');
        }
        $this->container['filters'] = $filters;

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


