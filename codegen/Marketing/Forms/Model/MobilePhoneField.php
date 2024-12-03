<?php
/**
 * MobilePhoneField
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  HubSpot\Client\Marketing\Forms
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Forms
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

namespace HubSpot\Client\Marketing\Forms\Model;

use \ArrayAccess;
use \HubSpot\Client\Marketing\Forms\ObjectSerializer;

/**
 * MobilePhoneField Class Doc Comment
 *
 * @category Class
 * @description A form field used for collecting a mobile phone number.
 * @package  HubSpot\Client\Marketing\Forms
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MobilePhoneField implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MobilePhoneField';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'field_type' => 'string',
        'object_type_id' => 'string',
        'name' => 'string',
        'label' => 'string',
        'description' => 'string',
        'required' => 'bool',
        'hidden' => 'bool',
        'dependent_fields' => '\HubSpot\Client\Marketing\Forms\Model\DependentField[]',
        'placeholder' => 'string',
        'default_value' => 'string',
        'validation' => '\HubSpot\Client\Marketing\Forms\Model\PhoneFieldValidation'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'field_type' => null,
        'object_type_id' => null,
        'name' => null,
        'label' => null,
        'description' => null,
        'required' => null,
        'hidden' => null,
        'dependent_fields' => null,
        'placeholder' => null,
        'default_value' => null,
        'validation' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'field_type' => false,
        'object_type_id' => false,
        'name' => false,
        'label' => false,
        'description' => false,
        'required' => false,
        'hidden' => false,
        'dependent_fields' => false,
        'placeholder' => false,
        'default_value' => false,
        'validation' => false
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
        'field_type' => 'fieldType',
        'object_type_id' => 'objectTypeId',
        'name' => 'name',
        'label' => 'label',
        'description' => 'description',
        'required' => 'required',
        'hidden' => 'hidden',
        'dependent_fields' => 'dependentFields',
        'placeholder' => 'placeholder',
        'default_value' => 'defaultValue',
        'validation' => 'validation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'field_type' => 'setFieldType',
        'object_type_id' => 'setObjectTypeId',
        'name' => 'setName',
        'label' => 'setLabel',
        'description' => 'setDescription',
        'required' => 'setRequired',
        'hidden' => 'setHidden',
        'dependent_fields' => 'setDependentFields',
        'placeholder' => 'setPlaceholder',
        'default_value' => 'setDefaultValue',
        'validation' => 'setValidation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'field_type' => 'getFieldType',
        'object_type_id' => 'getObjectTypeId',
        'name' => 'getName',
        'label' => 'getLabel',
        'description' => 'getDescription',
        'required' => 'getRequired',
        'hidden' => 'getHidden',
        'dependent_fields' => 'getDependentFields',
        'placeholder' => 'getPlaceholder',
        'default_value' => 'getDefaultValue',
        'validation' => 'getValidation'
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

    public const FIELD_TYPE_MOBILE_PHONE = 'mobile_phone';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFieldTypeAllowableValues()
    {
        return [
            self::FIELD_TYPE_MOBILE_PHONE,
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
        $this->setIfExists('field_type', $data ?? [], 'mobile_phone');
        $this->setIfExists('object_type_id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('label', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('required', $data ?? [], null);
        $this->setIfExists('hidden', $data ?? [], null);
        $this->setIfExists('dependent_fields', $data ?? [], null);
        $this->setIfExists('placeholder', $data ?? [], null);
        $this->setIfExists('default_value', $data ?? [], null);
        $this->setIfExists('validation', $data ?? [], null);
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

        if ($this->container['field_type'] === null) {
            $invalidProperties[] = "'field_type' can't be null";
        }
        $allowedValues = $this->getFieldTypeAllowableValues();
        if (!is_null($this->container['field_type']) && !in_array($this->container['field_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'field_type', must be one of '%s'",
                $this->container['field_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['object_type_id'] === null) {
            $invalidProperties[] = "'object_type_id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['label'] === null) {
            $invalidProperties[] = "'label' can't be null";
        }
        if ($this->container['required'] === null) {
            $invalidProperties[] = "'required' can't be null";
        }
        if ($this->container['hidden'] === null) {
            $invalidProperties[] = "'hidden' can't be null";
        }
        if ($this->container['dependent_fields'] === null) {
            $invalidProperties[] = "'dependent_fields' can't be null";
        }
        if ($this->container['validation'] === null) {
            $invalidProperties[] = "'validation' can't be null";
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
     * Gets field_type
     *
     * @return string
     */
    public function getFieldType()
    {
        return $this->container['field_type'];
    }

    /**
     * Sets field_type
     *
     * @param string $field_type Determines how the field will be displayed and validated.
     *
     * @return self
     */
    public function setFieldType($field_type)
    {
        if (is_null($field_type)) {
            throw new \InvalidArgumentException('non-nullable field_type cannot be null');
        }
        $allowedValues = $this->getFieldTypeAllowableValues();
        if (!in_array($field_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'field_type', must be one of '%s'",
                    $field_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['field_type'] = $field_type;

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
     * @param string $object_type_id A unique ID for this field's CRM object type. For example a CONTACT field will have the object type ID 0-1.
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
     * @param string $name The identifier of the field. In combination with the object type ID, it must be unique.
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
     * @param string $label The main label for the form field.
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
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Additional text helping the customer to complete the field.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets required
     *
     * @return bool
     */
    public function getRequired()
    {
        return $this->container['required'];
    }

    /**
     * Sets required
     *
     * @param bool $required Whether a value for this field is required when submitting the form.
     *
     * @return self
     */
    public function setRequired($required)
    {
        if (is_null($required)) {
            throw new \InvalidArgumentException('non-nullable required cannot be null');
        }
        $this->container['required'] = $required;

        return $this;
    }

    /**
     * Gets hidden
     *
     * @return bool
     */
    public function getHidden()
    {
        return $this->container['hidden'];
    }

    /**
     * Sets hidden
     *
     * @param bool $hidden Whether a field should be hidden or not. Hidden fields won't appear on the form, but can be used to pass a value to a property without requiring the customer to fill it in.
     *
     * @return self
     */
    public function setHidden($hidden)
    {
        if (is_null($hidden)) {
            throw new \InvalidArgumentException('non-nullable hidden cannot be null');
        }
        $this->container['hidden'] = $hidden;

        return $this;
    }

    /**
     * Gets dependent_fields
     *
     * @return \HubSpot\Client\Marketing\Forms\Model\DependentField[]
     */
    public function getDependentFields()
    {
        return $this->container['dependent_fields'];
    }

    /**
     * Sets dependent_fields
     *
     * @param \HubSpot\Client\Marketing\Forms\Model\DependentField[] $dependent_fields A list of other fields to make visible based on the value filled in for this field.
     *
     * @return self
     */
    public function setDependentFields($dependent_fields)
    {
        if (is_null($dependent_fields)) {
            throw new \InvalidArgumentException('non-nullable dependent_fields cannot be null');
        }
        $this->container['dependent_fields'] = $dependent_fields;

        return $this;
    }

    /**
     * Gets placeholder
     *
     * @return string|null
     */
    public function getPlaceholder()
    {
        return $this->container['placeholder'];
    }

    /**
     * Sets placeholder
     *
     * @param string|null $placeholder The prompt text showing when the field isn't filled in.
     *
     * @return self
     */
    public function setPlaceholder($placeholder)
    {
        if (is_null($placeholder)) {
            throw new \InvalidArgumentException('non-nullable placeholder cannot be null');
        }
        $this->container['placeholder'] = $placeholder;

        return $this;
    }

    /**
     * Gets default_value
     *
     * @return string|null
     */
    public function getDefaultValue()
    {
        return $this->container['default_value'];
    }

    /**
     * Sets default_value
     *
     * @param string|null $default_value The value filled in by default. This value will be submitted unless the customer modifies it.
     *
     * @return self
     */
    public function setDefaultValue($default_value)
    {
        if (is_null($default_value)) {
            throw new \InvalidArgumentException('non-nullable default_value cannot be null');
        }
        $this->container['default_value'] = $default_value;

        return $this;
    }

    /**
     * Gets validation
     *
     * @return \HubSpot\Client\Marketing\Forms\Model\PhoneFieldValidation
     */
    public function getValidation()
    {
        return $this->container['validation'];
    }

    /**
     * Sets validation
     *
     * @param \HubSpot\Client\Marketing\Forms\Model\PhoneFieldValidation $validation validation
     *
     * @return self
     */
    public function setValidation($validation)
    {
        if (is_null($validation)) {
            throw new \InvalidArgumentException('non-nullable validation cannot be null');
        }
        $this->container['validation'] = $validation;

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


