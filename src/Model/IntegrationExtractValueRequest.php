<?php
/**
 * IntegrationExtractValueRequest
 *
 * PHP version 8.1
 *
 * @package  ClientAPI\Semaphore
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Semaphore API
 *
 * Semaphore API provides endpoints for managing and interacting with the Semaphore UI. This documentation outlines the available operations and data models.
 *
 * The version of the OpenAPI document: 2.13.0
 * @generated Generated by: https://openapi-generator.tech
 * Generator version: 7.12.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace ClientAPI\Semaphore\Model;

use ArrayAccess;
use JsonSerializable;
use InvalidArgumentException;
use ReturnTypeWillChange;
use ClientAPI\Semaphore\ObjectSerializer;

/**
 * IntegrationExtractValueRequest Class Doc Comment
 *
 * @package  ClientAPI\Semaphore
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class IntegrationExtractValueRequest implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'IntegrationExtractValueRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'name' => 'string',
        'valueSource' => 'string',
        'bodyDataType' => 'string',
        'key' => 'string',
        'variable' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'name' => null,
        'valueSource' => null,
        'bodyDataType' => null,
        'key' => null,
        'variable' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'name' => false,
        'valueSource' => false,
        'bodyDataType' => false,
        'key' => false,
        'variable' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var array<string, bool>
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPITypes(): array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPIFormats(): array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array<string, bool>
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return array<string, bool>
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param array<string, bool> $openAPINullablesSetToNull
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
     * @var array<string, string>
     */
    protected static array $attributeMap = [
        'name' => 'name',
        'valueSource' => 'value_source',
        'bodyDataType' => 'body_data_type',
        'key' => 'key',
        'variable' => 'variable'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'name' => 'setName',
        'valueSource' => 'setValueSource',
        'bodyDataType' => 'setBodyDataType',
        'key' => 'setKey',
        'variable' => 'setVariable'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'name' => 'getName',
        'valueSource' => 'getValueSource',
        'bodyDataType' => 'getBodyDataType',
        'key' => 'getKey',
        'variable' => 'getVariable'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array<string, string>
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array<string, string>
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array<string, string>
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName(): string
    {
        return self::$openAPIModelName;
    }

    public const VALUE_SOURCE_BODY = 'body';
    public const VALUE_SOURCE_HEADER = 'header';
    public const BODY_DATA_TYPE_JSON = 'json';
    public const BODY_DATA_TYPE_XML = 'xml';
    public const BODY_DATA_TYPE_STRING = 'string';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getValueSourceAllowableValues()
    {
        return [
            self::VALUE_SOURCE_BODY,
            self::VALUE_SOURCE_HEADER,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBodyDataTypeAllowableValues()
    {
        return [
            self::BODY_DATA_TYPE_JSON,
            self::BODY_DATA_TYPE_XML,
            self::BODY_DATA_TYPE_STRING,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var array
     */
    protected array $container = [];

    /**
     * Constructor
     *
     * @param array $data Associated array of property values initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('valueSource', $data ?? [], null);
        $this->setIfExists('bodyDataType', $data ?? [], null);
        $this->setIfExists('key', $data ?? [], null);
        $this->setIfExists('variable', $data ?? [], null);
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
    private function setIfExists(string $variableName, array $fields, mixed $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return string[] invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        $allowedValues = $this->getValueSourceAllowableValues();
        if (!is_null($this->container['valueSource']) && !in_array($this->container['valueSource'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'valueSource', must be one of '%s'",
                $this->container['valueSource'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getBodyDataTypeAllowableValues();
        if (!is_null($this->container['bodyDataType']) && !in_array($this->container['bodyDataType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'bodyDataType', must be one of '%s'",
                $this->container['bodyDataType'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return $this
     */
    public function setName(?string $name): static
    {
        if (is_null($name)) {
            throw new InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets valueSource
     *
     * @return string|null
     */
    public function getValueSource(): ?string
    {
        return $this->container['valueSource'];
    }

    /**
     * Sets valueSource
     *
     * @param string|null $valueSource valueSource
     *
     * @return $this
     */
    public function setValueSource(?string $valueSource): static
    {
        if (is_null($valueSource)) {
            throw new InvalidArgumentException('non-nullable valueSource cannot be null');
        }
        $allowedValues = $this->getValueSourceAllowableValues();
        if (!in_array($valueSource, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'valueSource', must be one of '%s'",
                    $valueSource,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['valueSource'] = $valueSource;

        return $this;
    }

    /**
     * Gets bodyDataType
     *
     * @return string|null
     */
    public function getBodyDataType(): ?string
    {
        return $this->container['bodyDataType'];
    }

    /**
     * Sets bodyDataType
     *
     * @param string|null $bodyDataType bodyDataType
     *
     * @return $this
     */
    public function setBodyDataType(?string $bodyDataType): static
    {
        if (is_null($bodyDataType)) {
            throw new InvalidArgumentException('non-nullable bodyDataType cannot be null');
        }
        $allowedValues = $this->getBodyDataTypeAllowableValues();
        if (!in_array($bodyDataType, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'bodyDataType', must be one of '%s'",
                    $bodyDataType,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['bodyDataType'] = $bodyDataType;

        return $this;
    }

    /**
     * Gets key
     *
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->container['key'];
    }

    /**
     * Sets key
     *
     * @param string|null $key key
     *
     * @return $this
     */
    public function setKey(?string $key): static
    {
        if (is_null($key)) {
            throw new InvalidArgumentException('non-nullable key cannot be null');
        }
        $this->container['key'] = $key;

        return $this;
    }

    /**
     * Gets variable
     *
     * @return string|null
     */
    public function getVariable(): ?string
    {
        return $this->container['variable'];
    }

    /**
     * Sets variable
     *
     * @param string|null $variable variable
     *
     * @return $this
     */
    public function setVariable(?string $variable): static
    {
        if (is_null($variable)) {
            throw new InvalidArgumentException('non-nullable variable cannot be null');
        }
        $this->container['variable'] = $variable;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists(mixed $offset): bool
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
    #[ReturnTypeWillChange]
    public function offsetGet(mixed $offset): mixed
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
    public function offsetSet(mixed $offset, mixed $value): void
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
    public function offsetUnset(mixed $offset): void
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
    #[ReturnTypeWillChange]
    public function jsonSerialize(): mixed
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString(): string
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
    public function toHeaderValue(): string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


