<?php
/**
 * PublicList
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  HubSpot\Client\Marketing\Events
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Marketing Events
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

namespace HubSpot\Client\Marketing\Events\Model;

use \ArrayAccess;
use \HubSpot\Client\Marketing\Events\ObjectSerializer;

/**
 * PublicList Class Doc Comment
 *
 * @category Class
 * @package  HubSpot\Client\Marketing\Events
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PublicList implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PublicList';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'processing_type' => 'string',
        'object_type_id' => 'string',
        'updated_by_id' => 'string',
        'filters_updated_at' => '\DateTime',
        'list_id' => 'string',
        'created_at' => '\DateTime',
        'processing_status' => 'string',
        'deleted_at' => '\DateTime',
        'list_version' => 'int',
        'size' => 'int',
        'name' => 'string',
        'created_by_id' => 'string',
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
        'processing_type' => null,
        'object_type_id' => null,
        'updated_by_id' => null,
        'filters_updated_at' => 'date-time',
        'list_id' => null,
        'created_at' => 'date-time',
        'processing_status' => null,
        'deleted_at' => 'date-time',
        'list_version' => 'int32',
        'size' => 'int64',
        'name' => null,
        'created_by_id' => null,
        'updated_at' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'processing_type' => false,
        'object_type_id' => false,
        'updated_by_id' => false,
        'filters_updated_at' => false,
        'list_id' => false,
        'created_at' => false,
        'processing_status' => false,
        'deleted_at' => false,
        'list_version' => false,
        'size' => false,
        'name' => false,
        'created_by_id' => false,
        'updated_at' => false
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
        'processing_type' => 'processingType',
        'object_type_id' => 'objectTypeId',
        'updated_by_id' => 'updatedById',
        'filters_updated_at' => 'filtersUpdatedAt',
        'list_id' => 'listId',
        'created_at' => 'createdAt',
        'processing_status' => 'processingStatus',
        'deleted_at' => 'deletedAt',
        'list_version' => 'listVersion',
        'size' => 'size',
        'name' => 'name',
        'created_by_id' => 'createdById',
        'updated_at' => 'updatedAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'processing_type' => 'setProcessingType',
        'object_type_id' => 'setObjectTypeId',
        'updated_by_id' => 'setUpdatedById',
        'filters_updated_at' => 'setFiltersUpdatedAt',
        'list_id' => 'setListId',
        'created_at' => 'setCreatedAt',
        'processing_status' => 'setProcessingStatus',
        'deleted_at' => 'setDeletedAt',
        'list_version' => 'setListVersion',
        'size' => 'setSize',
        'name' => 'setName',
        'created_by_id' => 'setCreatedById',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'processing_type' => 'getProcessingType',
        'object_type_id' => 'getObjectTypeId',
        'updated_by_id' => 'getUpdatedById',
        'filters_updated_at' => 'getFiltersUpdatedAt',
        'list_id' => 'getListId',
        'created_at' => 'getCreatedAt',
        'processing_status' => 'getProcessingStatus',
        'deleted_at' => 'getDeletedAt',
        'list_version' => 'getListVersion',
        'size' => 'getSize',
        'name' => 'getName',
        'created_by_id' => 'getCreatedById',
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
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('processing_type', $data ?? [], null);
        $this->setIfExists('object_type_id', $data ?? [], null);
        $this->setIfExists('updated_by_id', $data ?? [], null);
        $this->setIfExists('filters_updated_at', $data ?? [], null);
        $this->setIfExists('list_id', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('processing_status', $data ?? [], null);
        $this->setIfExists('deleted_at', $data ?? [], null);
        $this->setIfExists('list_version', $data ?? [], null);
        $this->setIfExists('size', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('created_by_id', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
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

        if ($this->container['processing_type'] === null) {
            $invalidProperties[] = "'processing_type' can't be null";
        }
        if ($this->container['object_type_id'] === null) {
            $invalidProperties[] = "'object_type_id' can't be null";
        }
        if ($this->container['list_id'] === null) {
            $invalidProperties[] = "'list_id' can't be null";
        }
        if ($this->container['processing_status'] === null) {
            $invalidProperties[] = "'processing_status' can't be null";
        }
        if ($this->container['list_version'] === null) {
            $invalidProperties[] = "'list_version' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
     * Gets processing_type
     *
     * @return string
     */
    public function getProcessingType()
    {
        return $this->container['processing_type'];
    }

    /**
     * Sets processing_type
     *
     * @param string $processing_type processing_type
     *
     * @return self
     */
    public function setProcessingType($processing_type)
    {
        if (is_null($processing_type)) {
            throw new \InvalidArgumentException('non-nullable processing_type cannot be null');
        }
        $this->container['processing_type'] = $processing_type;

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
     * Gets updated_by_id
     *
     * @return string|null
     */
    public function getUpdatedById()
    {
        return $this->container['updated_by_id'];
    }

    /**
     * Sets updated_by_id
     *
     * @param string|null $updated_by_id updated_by_id
     *
     * @return self
     */
    public function setUpdatedById($updated_by_id)
    {
        if (is_null($updated_by_id)) {
            throw new \InvalidArgumentException('non-nullable updated_by_id cannot be null');
        }
        $this->container['updated_by_id'] = $updated_by_id;

        return $this;
    }

    /**
     * Gets filters_updated_at
     *
     * @return \DateTime|null
     */
    public function getFiltersUpdatedAt()
    {
        return $this->container['filters_updated_at'];
    }

    /**
     * Sets filters_updated_at
     *
     * @param \DateTime|null $filters_updated_at filters_updated_at
     *
     * @return self
     */
    public function setFiltersUpdatedAt($filters_updated_at)
    {
        if (is_null($filters_updated_at)) {
            throw new \InvalidArgumentException('non-nullable filters_updated_at cannot be null');
        }
        $this->container['filters_updated_at'] = $filters_updated_at;

        return $this;
    }

    /**
     * Gets list_id
     *
     * @return string
     */
    public function getListId()
    {
        return $this->container['list_id'];
    }

    /**
     * Sets list_id
     *
     * @param string $list_id list_id
     *
     * @return self
     */
    public function setListId($list_id)
    {
        if (is_null($list_id)) {
            throw new \InvalidArgumentException('non-nullable list_id cannot be null');
        }
        $this->container['list_id'] = $list_id;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at created_at
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets processing_status
     *
     * @return string
     */
    public function getProcessingStatus()
    {
        return $this->container['processing_status'];
    }

    /**
     * Sets processing_status
     *
     * @param string $processing_status processing_status
     *
     * @return self
     */
    public function setProcessingStatus($processing_status)
    {
        if (is_null($processing_status)) {
            throw new \InvalidArgumentException('non-nullable processing_status cannot be null');
        }
        $this->container['processing_status'] = $processing_status;

        return $this;
    }

    /**
     * Gets deleted_at
     *
     * @return \DateTime|null
     */
    public function getDeletedAt()
    {
        return $this->container['deleted_at'];
    }

    /**
     * Sets deleted_at
     *
     * @param \DateTime|null $deleted_at deleted_at
     *
     * @return self
     */
    public function setDeletedAt($deleted_at)
    {
        if (is_null($deleted_at)) {
            throw new \InvalidArgumentException('non-nullable deleted_at cannot be null');
        }
        $this->container['deleted_at'] = $deleted_at;

        return $this;
    }

    /**
     * Gets list_version
     *
     * @return int
     */
    public function getListVersion()
    {
        return $this->container['list_version'];
    }

    /**
     * Sets list_version
     *
     * @param int $list_version list_version
     *
     * @return self
     */
    public function setListVersion($list_version)
    {
        if (is_null($list_version)) {
            throw new \InvalidArgumentException('non-nullable list_version cannot be null');
        }
        $this->container['list_version'] = $list_version;

        return $this;
    }

    /**
     * Gets size
     *
     * @return int|null
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param int|null $size size
     *
     * @return self
     */
    public function setSize($size)
    {
        if (is_null($size)) {
            throw new \InvalidArgumentException('non-nullable size cannot be null');
        }
        $this->container['size'] = $size;

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
     * @param string $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets created_by_id
     *
     * @return string|null
     */
    public function getCreatedById()
    {
        return $this->container['created_by_id'];
    }

    /**
     * Sets created_by_id
     *
     * @param string|null $created_by_id created_by_id
     *
     * @return self
     */
    public function setCreatedById($created_by_id)
    {
        if (is_null($created_by_id)) {
            throw new \InvalidArgumentException('non-nullable created_by_id cannot be null');
        }
        $this->container['created_by_id'] = $created_by_id;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime|null $updated_at updated_at
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        if (is_null($updated_at)) {
            throw new \InvalidArgumentException('non-nullable updated_at cannot be null');
        }
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


