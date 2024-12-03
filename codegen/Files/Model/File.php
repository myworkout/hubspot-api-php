<?php
/**
 * File
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  HubSpot\Client\Files
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Files Files
 *
 * Upload and manage files.
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

namespace HubSpot\Client\Files\Model;

use \ArrayAccess;
use \HubSpot\Client\Files\ObjectSerializer;

/**
 * File Class Doc Comment
 *
 * @category Class
 * @description File
 * @package  HubSpot\Client\Files
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class File implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'File';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'extension' => 'string',
        'access' => 'string',
        'parent_folder_id' => 'string',
        'encoding' => 'string',
        'type' => 'string',
        'is_usable_in_content' => 'bool',
        'url' => 'string',
        'expires_at' => 'int',
        'created_at' => '\DateTime',
        'archived_at' => '\DateTime',
        'archived' => 'bool',
        'path' => 'string',
        'size' => 'int',
        'name' => 'string',
        'width' => 'int',
        'id' => 'string',
        'default_hosting_url' => 'string',
        'updated_at' => '\DateTime',
        'height' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'extension' => null,
        'access' => null,
        'parent_folder_id' => null,
        'encoding' => null,
        'type' => null,
        'is_usable_in_content' => null,
        'url' => null,
        'expires_at' => 'int64',
        'created_at' => 'date-time',
        'archived_at' => 'date-time',
        'archived' => null,
        'path' => null,
        'size' => 'int64',
        'name' => null,
        'width' => 'int32',
        'id' => null,
        'default_hosting_url' => null,
        'updated_at' => 'date-time',
        'height' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'extension' => false,
        'access' => false,
        'parent_folder_id' => false,
        'encoding' => false,
        'type' => false,
        'is_usable_in_content' => false,
        'url' => false,
        'expires_at' => false,
        'created_at' => false,
        'archived_at' => false,
        'archived' => false,
        'path' => false,
        'size' => false,
        'name' => false,
        'width' => false,
        'id' => false,
        'default_hosting_url' => false,
        'updated_at' => false,
        'height' => false
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
        'extension' => 'extension',
        'access' => 'access',
        'parent_folder_id' => 'parentFolderId',
        'encoding' => 'encoding',
        'type' => 'type',
        'is_usable_in_content' => 'isUsableInContent',
        'url' => 'url',
        'expires_at' => 'expiresAt',
        'created_at' => 'createdAt',
        'archived_at' => 'archivedAt',
        'archived' => 'archived',
        'path' => 'path',
        'size' => 'size',
        'name' => 'name',
        'width' => 'width',
        'id' => 'id',
        'default_hosting_url' => 'defaultHostingUrl',
        'updated_at' => 'updatedAt',
        'height' => 'height'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'extension' => 'setExtension',
        'access' => 'setAccess',
        'parent_folder_id' => 'setParentFolderId',
        'encoding' => 'setEncoding',
        'type' => 'setType',
        'is_usable_in_content' => 'setIsUsableInContent',
        'url' => 'setUrl',
        'expires_at' => 'setExpiresAt',
        'created_at' => 'setCreatedAt',
        'archived_at' => 'setArchivedAt',
        'archived' => 'setArchived',
        'path' => 'setPath',
        'size' => 'setSize',
        'name' => 'setName',
        'width' => 'setWidth',
        'id' => 'setId',
        'default_hosting_url' => 'setDefaultHostingUrl',
        'updated_at' => 'setUpdatedAt',
        'height' => 'setHeight'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'extension' => 'getExtension',
        'access' => 'getAccess',
        'parent_folder_id' => 'getParentFolderId',
        'encoding' => 'getEncoding',
        'type' => 'getType',
        'is_usable_in_content' => 'getIsUsableInContent',
        'url' => 'getUrl',
        'expires_at' => 'getExpiresAt',
        'created_at' => 'getCreatedAt',
        'archived_at' => 'getArchivedAt',
        'archived' => 'getArchived',
        'path' => 'getPath',
        'size' => 'getSize',
        'name' => 'getName',
        'width' => 'getWidth',
        'id' => 'getId',
        'default_hosting_url' => 'getDefaultHostingUrl',
        'updated_at' => 'getUpdatedAt',
        'height' => 'getHeight'
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

    public const ACCESS_PUBLIC_INDEXABLE = 'PUBLIC_INDEXABLE';
    public const ACCESS_PUBLIC_NOT_INDEXABLE = 'PUBLIC_NOT_INDEXABLE';
    public const ACCESS_HIDDEN_INDEXABLE = 'HIDDEN_INDEXABLE';
    public const ACCESS_HIDDEN_NOT_INDEXABLE = 'HIDDEN_NOT_INDEXABLE';
    public const ACCESS_HIDDEN_PRIVATE = 'HIDDEN_PRIVATE';
    public const ACCESS__PRIVATE = 'PRIVATE';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAccessAllowableValues()
    {
        return [
            self::ACCESS_PUBLIC_INDEXABLE,
            self::ACCESS_PUBLIC_NOT_INDEXABLE,
            self::ACCESS_HIDDEN_INDEXABLE,
            self::ACCESS_HIDDEN_NOT_INDEXABLE,
            self::ACCESS_HIDDEN_PRIVATE,
            self::ACCESS__PRIVATE,
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
        $this->setIfExists('extension', $data ?? [], null);
        $this->setIfExists('access', $data ?? [], null);
        $this->setIfExists('parent_folder_id', $data ?? [], null);
        $this->setIfExists('encoding', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('is_usable_in_content', $data ?? [], null);
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('expires_at', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('archived_at', $data ?? [], null);
        $this->setIfExists('archived', $data ?? [], null);
        $this->setIfExists('path', $data ?? [], null);
        $this->setIfExists('size', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('width', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('default_hosting_url', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('height', $data ?? [], null);
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

        if ($this->container['access'] === null) {
            $invalidProperties[] = "'access' can't be null";
        }
        $allowedValues = $this->getAccessAllowableValues();
        if (!is_null($this->container['access']) && !in_array($this->container['access'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'access', must be one of '%s'",
                $this->container['access'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['archived'] === null) {
            $invalidProperties[] = "'archived' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
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
     * Gets extension
     *
     * @return string|null
     */
    public function getExtension()
    {
        return $this->container['extension'];
    }

    /**
     * Sets extension
     *
     * @param string|null $extension Extension of the file. ex: .jpg, .png, .gif, .pdf, etc.
     *
     * @return self
     */
    public function setExtension($extension)
    {
        if (is_null($extension)) {
            throw new \InvalidArgumentException('non-nullable extension cannot be null');
        }
        $this->container['extension'] = $extension;

        return $this;
    }

    /**
     * Gets access
     *
     * @return string
     */
    public function getAccess()
    {
        return $this->container['access'];
    }

    /**
     * Sets access
     *
     * @param string $access File access. Can be PUBLIC_INDEXABLE, PUBLIC_NOT_INDEXABLE, PRIVATE.
     *
     * @return self
     */
    public function setAccess($access)
    {
        if (is_null($access)) {
            throw new \InvalidArgumentException('non-nullable access cannot be null');
        }
        $allowedValues = $this->getAccessAllowableValues();
        if (!in_array($access, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'access', must be one of '%s'",
                    $access,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['access'] = $access;

        return $this;
    }

    /**
     * Gets parent_folder_id
     *
     * @return string|null
     */
    public function getParentFolderId()
    {
        return $this->container['parent_folder_id'];
    }

    /**
     * Sets parent_folder_id
     *
     * @param string|null $parent_folder_id ID of the folder the file is in.
     *
     * @return self
     */
    public function setParentFolderId($parent_folder_id)
    {
        if (is_null($parent_folder_id)) {
            throw new \InvalidArgumentException('non-nullable parent_folder_id cannot be null');
        }
        $this->container['parent_folder_id'] = $parent_folder_id;

        return $this;
    }

    /**
     * Gets encoding
     *
     * @return string|null
     */
    public function getEncoding()
    {
        return $this->container['encoding'];
    }

    /**
     * Sets encoding
     *
     * @param string|null $encoding Encoding of the file.
     *
     * @return self
     */
    public function setEncoding($encoding)
    {
        if (is_null($encoding)) {
            throw new \InvalidArgumentException('non-nullable encoding cannot be null');
        }
        $this->container['encoding'] = $encoding;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type Type of the file. Can be IMG, DOCUMENT, AUDIO, MOVIE, or OTHER.
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
     * Gets is_usable_in_content
     *
     * @return bool|null
     */
    public function getIsUsableInContent()
    {
        return $this->container['is_usable_in_content'];
    }

    /**
     * Sets is_usable_in_content
     *
     * @param bool|null $is_usable_in_content Previously \"archied\". Indicates if the file should be used when creating new content like web pages.
     *
     * @return self
     */
    public function setIsUsableInContent($is_usable_in_content)
    {
        if (is_null($is_usable_in_content)) {
            throw new \InvalidArgumentException('non-nullable is_usable_in_content cannot be null');
        }
        $this->container['is_usable_in_content'] = $is_usable_in_content;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url URL of the given file. This URL can change depending on the domain settings of the account. Will use the select file hosting domain.
     *
     * @return self
     */
    public function setUrl($url)
    {
        if (is_null($url)) {
            throw new \InvalidArgumentException('non-nullable url cannot be null');
        }
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets expires_at
     *
     * @return int|null
     */
    public function getExpiresAt()
    {
        return $this->container['expires_at'];
    }

    /**
     * Sets expires_at
     *
     * @param int|null $expires_at expires_at
     *
     * @return self
     */
    public function setExpiresAt($expires_at)
    {
        if (is_null($expires_at)) {
            throw new \InvalidArgumentException('non-nullable expires_at cannot be null');
        }
        $this->container['expires_at'] = $expires_at;

        return $this;
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
     * @param \DateTime $created_at Creation time of the file object.
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
     * Gets archived_at
     *
     * @return \DateTime|null
     */
    public function getArchivedAt()
    {
        return $this->container['archived_at'];
    }

    /**
     * Sets archived_at
     *
     * @param \DateTime|null $archived_at Deletion time of the file object.
     *
     * @return self
     */
    public function setArchivedAt($archived_at)
    {
        if (is_null($archived_at)) {
            throw new \InvalidArgumentException('non-nullable archived_at cannot be null');
        }
        $this->container['archived_at'] = $archived_at;

        return $this;
    }

    /**
     * Gets archived
     *
     * @return bool
     */
    public function getArchived()
    {
        return $this->container['archived'];
    }

    /**
     * Sets archived
     *
     * @param bool $archived If the file is deleted.
     *
     * @return self
     */
    public function setArchived($archived)
    {
        if (is_null($archived)) {
            throw new \InvalidArgumentException('non-nullable archived cannot be null');
        }
        $this->container['archived'] = $archived;

        return $this;
    }

    /**
     * Gets path
     *
     * @return string|null
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param string|null $path Path of the file in the file manager.
     *
     * @return self
     */
    public function setPath($path)
    {
        if (is_null($path)) {
            throw new \InvalidArgumentException('non-nullable path cannot be null');
        }
        $this->container['path'] = $path;

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
     * @param int|null $size Size of the file in bytes.
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
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Name of the file.
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
     * Gets width
     *
     * @return int|null
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param int|null $width For image and video files, the width of the content.
     *
     * @return self
     */
    public function setWidth($width)
    {
        if (is_null($width)) {
            throw new \InvalidArgumentException('non-nullable width cannot be null');
        }
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id File ID.
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets default_hosting_url
     *
     * @return string|null
     */
    public function getDefaultHostingUrl()
    {
        return $this->container['default_hosting_url'];
    }

    /**
     * Sets default_hosting_url
     *
     * @param string|null $default_hosting_url Default hosting URL of the file. This will use one of HubSpot's provided URLs to serve the file.
     *
     * @return self
     */
    public function setDefaultHostingUrl($default_hosting_url)
    {
        if (is_null($default_hosting_url)) {
            throw new \InvalidArgumentException('non-nullable default_hosting_url cannot be null');
        }
        $this->container['default_hosting_url'] = $default_hosting_url;

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
     * @param \DateTime $updated_at Timestamp of the latest update to the file.
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
     * Gets height
     *
     * @return int|null
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param int|null $height For image and video files, the height of the content.
     *
     * @return self
     */
    public function setHeight($height)
    {
        if (is_null($height)) {
            throw new \InvalidArgumentException('non-nullable height cannot be null');
        }
        $this->container['height'] = $height;

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


