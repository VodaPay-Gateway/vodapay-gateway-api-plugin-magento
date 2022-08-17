<?php
/**
 * ErrorPaymentTokenResponseModel
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  VodaPayGatewayClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * VodaPay Gateway
 *
 * Enabling ecommerce merchants to accept online payments from customers.
 *
 * The version of the OpenAPI document: v2.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace VodaPayGatewayClient\Model;

use \ArrayAccess;
use \VodaPayGatewayClient\ObjectSerializer;

/**
 * ErrorPaymentTokenResponseModel Class Doc Comment
 *
 * @category Class
 * @package  VodaPayGatewayClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ErrorPaymentTokenResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ErrorPaymentTokenResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'response_message' => 'string',
        'response_code' => 'string',
        'was_successful' => 'bool',
        'echo_data' => 'string',
        'token_requester_id' => 'string',
        'retrieval_reference_number_extended' => 'string',
        'session_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'response_message' => null,
        'response_code' => null,
        'was_successful' => null,
        'echo_data' => null,
        'token_requester_id' => null,
        'retrieval_reference_number_extended' => null,
        'session_id' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'response_message' => 'responseMessage',
        'response_code' => 'responseCode',
        'was_successful' => 'wasSuccessful',
        'echo_data' => 'echoData',
        'token_requester_id' => 'tokenRequesterId',
        'retrieval_reference_number_extended' => 'retrievalReferenceNumberExtended',
        'session_id' => 'sessionId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'response_message' => 'setResponseMessage',
        'response_code' => 'setResponseCode',
        'was_successful' => 'setWasSuccessful',
        'echo_data' => 'setEchoData',
        'token_requester_id' => 'setTokenRequesterId',
        'retrieval_reference_number_extended' => 'setRetrievalReferenceNumberExtended',
        'session_id' => 'setSessionId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'response_message' => 'getResponseMessage',
        'response_code' => 'getResponseCode',
        'was_successful' => 'getWasSuccessful',
        'echo_data' => 'getEchoData',
        'token_requester_id' => 'getTokenRequesterId',
        'retrieval_reference_number_extended' => 'getRetrievalReferenceNumberExtended',
        'session_id' => 'getSessionId'
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
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['response_message'] = $data['response_message'] ?? null;
        $this->container['response_code'] = $data['response_code'] ?? null;
        $this->container['was_successful'] = $data['was_successful'] ?? false;
        $this->container['echo_data'] = $data['echo_data'] ?? null;
        $this->container['token_requester_id'] = $data['token_requester_id'] ?? null;
        $this->container['retrieval_reference_number_extended'] = $data['retrieval_reference_number_extended'] ?? null;
        $this->container['session_id'] = $data['session_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['was_successful'] === null) {
            $invalidProperties[] = "'was_successful' can't be null";
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
     * Gets response_message
     *
     * @return string|null
     */
    public function getResponseMessage()
    {
        return $this->container['response_message'];
    }

    /**
     * Sets response_message
     *
     * @param string|null $response_message response_message
     *
     * @return self
     */
    public function setResponseMessage($response_message)
    {
        $this->container['response_message'] = $response_message;

        return $this;
    }

    /**
     * Gets response_code
     *
     * @return string|null
     */
    public function getResponseCode()
    {
        return $this->container['response_code'];
    }

    /**
     * Sets response_code
     *
     * @param string|null $response_code response_code
     *
     * @return self
     */
    public function setResponseCode($response_code)
    {
        $this->container['response_code'] = $response_code;

        return $this;
    }

    /**
     * Gets was_successful
     *
     * @return bool
     */
    public function getWasSuccessful()
    {
        return $this->container['was_successful'];
    }

    /**
     * Sets was_successful
     *
     * @param bool $was_successful was_successful
     *
     * @return self
     */
    public function setWasSuccessful($was_successful)
    {
        $this->container['was_successful'] = $was_successful;

        return $this;
    }

    /**
     * Gets echo_data
     *
     * @return string|null
     */
    public function getEchoData()
    {
        return $this->container['echo_data'];
    }

    /**
     * Sets echo_data
     *
     * @param string|null $echo_data echo_data
     *
     * @return self
     */
    public function setEchoData($echo_data)
    {
        $this->container['echo_data'] = $echo_data;

        return $this;
    }

    /**
     * Gets token_requester_id
     *
     * @return string|null
     */
    public function getTokenRequesterId()
    {
        return $this->container['token_requester_id'];
    }

    /**
     * Sets token_requester_id
     *
     * @param string|null $token_requester_id token_requester_id
     *
     * @return self
     */
    public function setTokenRequesterId($token_requester_id)
    {
        $this->container['token_requester_id'] = $token_requester_id;

        return $this;
    }

    /**
     * Gets retrieval_reference_number_extended
     *
     * @return string|null
     */
    public function getRetrievalReferenceNumberExtended()
    {
        return $this->container['retrieval_reference_number_extended'];
    }

    /**
     * Sets retrieval_reference_number_extended
     *
     * @param string|null $retrieval_reference_number_extended retrieval_reference_number_extended
     *
     * @return self
     */
    public function setRetrievalReferenceNumberExtended($retrieval_reference_number_extended)
    {
        $this->container['retrieval_reference_number_extended'] = $retrieval_reference_number_extended;

        return $this;
    }

    /**
     * Gets session_id
     *
     * @return string|null
     */
    public function getSessionId()
    {
        return $this->container['session_id'];
    }

    /**
     * Sets session_id
     *
     * @param string|null $session_id session_id
     *
     * @return self
     */
    public function setSessionId($session_id)
    {
        $this->container['session_id'] = $session_id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
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


