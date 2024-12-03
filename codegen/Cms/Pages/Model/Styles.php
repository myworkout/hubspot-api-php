<?php
/**
 * Styles
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
 * Styles Class Doc Comment
 *
 * @category Class
 * @package  HubSpot\Client\Cms\Pages
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Styles implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Styles';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'background_color' => '\HubSpot\Client\Cms\Pages\Model\RGBAColor',
        'flexbox_positioning' => 'string',
        'background_image' => '\HubSpot\Client\Cms\Pages\Model\BackgroundImage',
        'force_full_width_section' => 'bool',
        'vertical_alignment' => 'string',
        'max_width_section_centering' => 'int',
        'background_gradient' => '\HubSpot\Client\Cms\Pages\Model\Gradient'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'background_color' => null,
        'flexbox_positioning' => null,
        'background_image' => null,
        'force_full_width_section' => null,
        'vertical_alignment' => null,
        'max_width_section_centering' => 'int32',
        'background_gradient' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'background_color' => false,
        'flexbox_positioning' => false,
        'background_image' => false,
        'force_full_width_section' => false,
        'vertical_alignment' => false,
        'max_width_section_centering' => false,
        'background_gradient' => false
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
        'background_color' => 'backgroundColor',
        'flexbox_positioning' => 'flexboxPositioning',
        'background_image' => 'backgroundImage',
        'force_full_width_section' => 'forceFullWidthSection',
        'vertical_alignment' => 'verticalAlignment',
        'max_width_section_centering' => 'maxWidthSectionCentering',
        'background_gradient' => 'backgroundGradient'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'background_color' => 'setBackgroundColor',
        'flexbox_positioning' => 'setFlexboxPositioning',
        'background_image' => 'setBackgroundImage',
        'force_full_width_section' => 'setForceFullWidthSection',
        'vertical_alignment' => 'setVerticalAlignment',
        'max_width_section_centering' => 'setMaxWidthSectionCentering',
        'background_gradient' => 'setBackgroundGradient'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'background_color' => 'getBackgroundColor',
        'flexbox_positioning' => 'getFlexboxPositioning',
        'background_image' => 'getBackgroundImage',
        'force_full_width_section' => 'getForceFullWidthSection',
        'vertical_alignment' => 'getVerticalAlignment',
        'max_width_section_centering' => 'getMaxWidthSectionCentering',
        'background_gradient' => 'getBackgroundGradient'
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
        $this->setIfExists('background_color', $data ?? [], null);
        $this->setIfExists('flexbox_positioning', $data ?? [], null);
        $this->setIfExists('background_image', $data ?? [], null);
        $this->setIfExists('force_full_width_section', $data ?? [], null);
        $this->setIfExists('vertical_alignment', $data ?? [], null);
        $this->setIfExists('max_width_section_centering', $data ?? [], null);
        $this->setIfExists('background_gradient', $data ?? [], null);
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

        if ($this->container['background_color'] === null) {
            $invalidProperties[] = "'background_color' can't be null";
        }
        if ($this->container['flexbox_positioning'] === null) {
            $invalidProperties[] = "'flexbox_positioning' can't be null";
        }
        if ($this->container['background_image'] === null) {
            $invalidProperties[] = "'background_image' can't be null";
        }
        if ($this->container['force_full_width_section'] === null) {
            $invalidProperties[] = "'force_full_width_section' can't be null";
        }
        if ($this->container['vertical_alignment'] === null) {
            $invalidProperties[] = "'vertical_alignment' can't be null";
        }
        if ($this->container['max_width_section_centering'] === null) {
            $invalidProperties[] = "'max_width_section_centering' can't be null";
        }
        if ($this->container['background_gradient'] === null) {
            $invalidProperties[] = "'background_gradient' can't be null";
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
     * Gets background_color
     *
     * @return \HubSpot\Client\Cms\Pages\Model\RGBAColor
     */
    public function getBackgroundColor()
    {
        return $this->container['background_color'];
    }

    /**
     * Sets background_color
     *
     * @param \HubSpot\Client\Cms\Pages\Model\RGBAColor $background_color background_color
     *
     * @return self
     */
    public function setBackgroundColor($background_color)
    {
        if (is_null($background_color)) {
            throw new \InvalidArgumentException('non-nullable background_color cannot be null');
        }
        $this->container['background_color'] = $background_color;

        return $this;
    }

    /**
     * Gets flexbox_positioning
     *
     * @return string
     */
    public function getFlexboxPositioning()
    {
        return $this->container['flexbox_positioning'];
    }

    /**
     * Sets flexbox_positioning
     *
     * @param string $flexbox_positioning 
     *
     * @return self
     */
    public function setFlexboxPositioning($flexbox_positioning)
    {
        if (is_null($flexbox_positioning)) {
            throw new \InvalidArgumentException('non-nullable flexbox_positioning cannot be null');
        }
        $this->container['flexbox_positioning'] = $flexbox_positioning;

        return $this;
    }

    /**
     * Gets background_image
     *
     * @return \HubSpot\Client\Cms\Pages\Model\BackgroundImage
     */
    public function getBackgroundImage()
    {
        return $this->container['background_image'];
    }

    /**
     * Sets background_image
     *
     * @param \HubSpot\Client\Cms\Pages\Model\BackgroundImage $background_image background_image
     *
     * @return self
     */
    public function setBackgroundImage($background_image)
    {
        if (is_null($background_image)) {
            throw new \InvalidArgumentException('non-nullable background_image cannot be null');
        }
        $this->container['background_image'] = $background_image;

        return $this;
    }

    /**
     * Gets force_full_width_section
     *
     * @return bool
     */
    public function getForceFullWidthSection()
    {
        return $this->container['force_full_width_section'];
    }

    /**
     * Sets force_full_width_section
     *
     * @param bool $force_full_width_section 
     *
     * @return self
     */
    public function setForceFullWidthSection($force_full_width_section)
    {
        if (is_null($force_full_width_section)) {
            throw new \InvalidArgumentException('non-nullable force_full_width_section cannot be null');
        }
        $this->container['force_full_width_section'] = $force_full_width_section;

        return $this;
    }

    /**
     * Gets vertical_alignment
     *
     * @return string
     */
    public function getVerticalAlignment()
    {
        return $this->container['vertical_alignment'];
    }

    /**
     * Sets vertical_alignment
     *
     * @param string $vertical_alignment 
     *
     * @return self
     */
    public function setVerticalAlignment($vertical_alignment)
    {
        if (is_null($vertical_alignment)) {
            throw new \InvalidArgumentException('non-nullable vertical_alignment cannot be null');
        }
        $this->container['vertical_alignment'] = $vertical_alignment;

        return $this;
    }

    /**
     * Gets max_width_section_centering
     *
     * @return int
     */
    public function getMaxWidthSectionCentering()
    {
        return $this->container['max_width_section_centering'];
    }

    /**
     * Sets max_width_section_centering
     *
     * @param int $max_width_section_centering 
     *
     * @return self
     */
    public function setMaxWidthSectionCentering($max_width_section_centering)
    {
        if (is_null($max_width_section_centering)) {
            throw new \InvalidArgumentException('non-nullable max_width_section_centering cannot be null');
        }
        $this->container['max_width_section_centering'] = $max_width_section_centering;

        return $this;
    }

    /**
     * Gets background_gradient
     *
     * @return \HubSpot\Client\Cms\Pages\Model\Gradient
     */
    public function getBackgroundGradient()
    {
        return $this->container['background_gradient'];
    }

    /**
     * Sets background_gradient
     *
     * @param \HubSpot\Client\Cms\Pages\Model\Gradient $background_gradient background_gradient
     *
     * @return self
     */
    public function setBackgroundGradient($background_gradient)
    {
        if (is_null($background_gradient)) {
            throw new \InvalidArgumentException('non-nullable background_gradient cannot be null');
        }
        $this->container['background_gradient'] = $background_gradient;

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


