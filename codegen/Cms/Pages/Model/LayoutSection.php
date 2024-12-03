<?php
/**
 * LayoutSection
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  HubSpot\Client\Cms\Pages
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Pages
 *
 * Use these endpoints for interacting with Landing Pages and Site Pages
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

namespace HubSpot\Client\Cms\Pages\Model;

use \ArrayAccess;
use \HubSpot\Client\Cms\Pages\ObjectSerializer;

/**
 * LayoutSection Class Doc Comment
 *
 * @category Class
 * @package  HubSpot\Client\Cms\Pages
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class LayoutSection implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LayoutSection';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'css_style' => 'string',
        'label' => 'string',
        'type' => 'string',
        'params' => 'array<string,object>',
        'rows' => 'array<string,\HubSpot\Client\Cms\Pages\Model\LayoutSection>[]',
        'row_meta_data' => '\HubSpot\Client\Cms\Pages\Model\RowMetaData[]',
        'cells' => '\HubSpot\Client\Cms\Pages\Model\LayoutSection[]',
        'css_class' => 'string',
        'w' => 'int',
        'css_id' => 'string',
        'x' => 'int',
        'name' => 'string',
        'styles' => '\HubSpot\Client\Cms\Pages\Model\Styles'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'css_style' => null,
        'label' => null,
        'type' => null,
        'params' => null,
        'rows' => null,
        'row_meta_data' => null,
        'cells' => null,
        'css_class' => null,
        'w' => 'int32',
        'css_id' => null,
        'x' => 'int32',
        'name' => null,
        'styles' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'css_style' => false,
        'label' => false,
        'type' => false,
        'params' => false,
        'rows' => false,
        'row_meta_data' => false,
        'cells' => false,
        'css_class' => false,
        'w' => false,
        'css_id' => false,
        'x' => false,
        'name' => false,
        'styles' => false
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
        'css_style' => 'cssStyle',
        'label' => 'label',
        'type' => 'type',
        'params' => 'params',
        'rows' => 'rows',
        'row_meta_data' => 'rowMetaData',
        'cells' => 'cells',
        'css_class' => 'cssClass',
        'w' => 'w',
        'css_id' => 'cssId',
        'x' => 'x',
        'name' => 'name',
        'styles' => 'styles'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'css_style' => 'setCssStyle',
        'label' => 'setLabel',
        'type' => 'setType',
        'params' => 'setParams',
        'rows' => 'setRows',
        'row_meta_data' => 'setRowMetaData',
        'cells' => 'setCells',
        'css_class' => 'setCssClass',
        'w' => 'setW',
        'css_id' => 'setCssId',
        'x' => 'setX',
        'name' => 'setName',
        'styles' => 'setStyles'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'css_style' => 'getCssStyle',
        'label' => 'getLabel',
        'type' => 'getType',
        'params' => 'getParams',
        'rows' => 'getRows',
        'row_meta_data' => 'getRowMetaData',
        'cells' => 'getCells',
        'css_class' => 'getCssClass',
        'w' => 'getW',
        'css_id' => 'getCssId',
        'x' => 'getX',
        'name' => 'getName',
        'styles' => 'getStyles'
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
        $this->setIfExists('css_style', $data ?? [], null);
        $this->setIfExists('label', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('params', $data ?? [], null);
        $this->setIfExists('rows', $data ?? [], null);
        $this->setIfExists('row_meta_data', $data ?? [], null);
        $this->setIfExists('cells', $data ?? [], null);
        $this->setIfExists('css_class', $data ?? [], null);
        $this->setIfExists('w', $data ?? [], null);
        $this->setIfExists('css_id', $data ?? [], null);
        $this->setIfExists('x', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('styles', $data ?? [], null);
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

        if ($this->container['css_style'] === null) {
            $invalidProperties[] = "'css_style' can't be null";
        }
        if ($this->container['label'] === null) {
            $invalidProperties[] = "'label' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['params'] === null) {
            $invalidProperties[] = "'params' can't be null";
        }
        if ($this->container['rows'] === null) {
            $invalidProperties[] = "'rows' can't be null";
        }
        if ($this->container['row_meta_data'] === null) {
            $invalidProperties[] = "'row_meta_data' can't be null";
        }
        if ($this->container['cells'] === null) {
            $invalidProperties[] = "'cells' can't be null";
        }
        if ($this->container['css_class'] === null) {
            $invalidProperties[] = "'css_class' can't be null";
        }
        if ($this->container['w'] === null) {
            $invalidProperties[] = "'w' can't be null";
        }
        if ($this->container['css_id'] === null) {
            $invalidProperties[] = "'css_id' can't be null";
        }
        if ($this->container['x'] === null) {
            $invalidProperties[] = "'x' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['styles'] === null) {
            $invalidProperties[] = "'styles' can't be null";
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
     * Gets css_style
     *
     * @return string
     */
    public function getCssStyle()
    {
        return $this->container['css_style'];
    }

    /**
     * Sets css_style
     *
     * @param string $css_style 
     *
     * @return self
     */
    public function setCssStyle($css_style)
    {
        if (is_null($css_style)) {
            throw new \InvalidArgumentException('non-nullable css_style cannot be null');
        }
        $this->container['css_style'] = $css_style;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string $label 
     *
     * @return self
     */
    public function setLabel($label)
    {
        if (is_null($label)) {
            throw new \InvalidArgumentException('non-nullable label cannot be null');
        }
        $this->container['label'] = $label;

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
     * @param string $type 
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
     * Gets params
     *
     * @return array<string,object>
     */
    public function getParams()
    {
        return $this->container['params'];
    }

    /**
     * Sets params
     *
     * @param array<string,object> $params 
     *
     * @return self
     */
    public function setParams($params)
    {
        if (is_null($params)) {
            throw new \InvalidArgumentException('non-nullable params cannot be null');
        }
        $this->container['params'] = $params;

        return $this;
    }

    /**
     * Gets rows
     *
     * @return array<string,\HubSpot\Client\Cms\Pages\Model\LayoutSection>[]
     */
    public function getRows()
    {
        return $this->container['rows'];
    }

    /**
     * Sets rows
     *
     * @param array<string,\HubSpot\Client\Cms\Pages\Model\LayoutSection>[] $rows 
     *
     * @return self
     */
    public function setRows($rows)
    {
        if (is_null($rows)) {
            throw new \InvalidArgumentException('non-nullable rows cannot be null');
        }
        $this->container['rows'] = $rows;

        return $this;
    }

    /**
     * Gets row_meta_data
     *
     * @return \HubSpot\Client\Cms\Pages\Model\RowMetaData[]
     */
    public function getRowMetaData()
    {
        return $this->container['row_meta_data'];
    }

    /**
     * Sets row_meta_data
     *
     * @param \HubSpot\Client\Cms\Pages\Model\RowMetaData[] $row_meta_data 
     *
     * @return self
     */
    public function setRowMetaData($row_meta_data)
    {
        if (is_null($row_meta_data)) {
            throw new \InvalidArgumentException('non-nullable row_meta_data cannot be null');
        }
        $this->container['row_meta_data'] = $row_meta_data;

        return $this;
    }

    /**
     * Gets cells
     *
     * @return \HubSpot\Client\Cms\Pages\Model\LayoutSection[]
     */
    public function getCells()
    {
        return $this->container['cells'];
    }

    /**
     * Sets cells
     *
     * @param \HubSpot\Client\Cms\Pages\Model\LayoutSection[] $cells 
     *
     * @return self
     */
    public function setCells($cells)
    {
        if (is_null($cells)) {
            throw new \InvalidArgumentException('non-nullable cells cannot be null');
        }
        $this->container['cells'] = $cells;

        return $this;
    }

    /**
     * Gets css_class
     *
     * @return string
     */
    public function getCssClass()
    {
        return $this->container['css_class'];
    }

    /**
     * Sets css_class
     *
     * @param string $css_class 
     *
     * @return self
     */
    public function setCssClass($css_class)
    {
        if (is_null($css_class)) {
            throw new \InvalidArgumentException('non-nullable css_class cannot be null');
        }
        $this->container['css_class'] = $css_class;

        return $this;
    }

    /**
     * Gets w
     *
     * @return int
     */
    public function getW()
    {
        return $this->container['w'];
    }

    /**
     * Sets w
     *
     * @param int $w 
     *
     * @return self
     */
    public function setW($w)
    {
        if (is_null($w)) {
            throw new \InvalidArgumentException('non-nullable w cannot be null');
        }
        $this->container['w'] = $w;

        return $this;
    }

    /**
     * Gets css_id
     *
     * @return string
     */
    public function getCssId()
    {
        return $this->container['css_id'];
    }

    /**
     * Sets css_id
     *
     * @param string $css_id 
     *
     * @return self
     */
    public function setCssId($css_id)
    {
        if (is_null($css_id)) {
            throw new \InvalidArgumentException('non-nullable css_id cannot be null');
        }
        $this->container['css_id'] = $css_id;

        return $this;
    }

    /**
     * Gets x
     *
     * @return int
     */
    public function getX()
    {
        return $this->container['x'];
    }

    /**
     * Sets x
     *
     * @param int $x 
     *
     * @return self
     */
    public function setX($x)
    {
        if (is_null($x)) {
            throw new \InvalidArgumentException('non-nullable x cannot be null');
        }
        $this->container['x'] = $x;

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
     * @param string $name 
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
     * Gets styles
     *
     * @return \HubSpot\Client\Cms\Pages\Model\Styles
     */
    public function getStyles()
    {
        return $this->container['styles'];
    }

    /**
     * Sets styles
     *
     * @param \HubSpot\Client\Cms\Pages\Model\Styles $styles styles
     *
     * @return self
     */
    public function setStyles($styles)
    {
        if (is_null($styles)) {
            throw new \InvalidArgumentException('non-nullable styles cannot be null');
        }
        $this->container['styles'] = $styles;

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


