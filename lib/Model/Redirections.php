<?php
/**
 * Redirections
 *
 * PHP version 5
 *
 * @category Class
 * @package  Cakemail
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Cakemail API
 *
 * The Cakemail API exposes multiple APIs including Authentication, Marketing, Contact, Transactional, Analytic, Content, Account and Partner.
 *
 * OpenAPI spec version: 1.0.0-rc1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.20
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Cakemail\Model;

use \ArrayAccess;
use \Cakemail\ObjectSerializer;

/**
 * Redirections Class Doc Comment
 *
 * @category Class
 * @package  Cakemail
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Redirections implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Redirections';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'after_opt_in' => 'string',
'after_double_opt_in' => 'string',
'after_opt_out' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'after_opt_in' => 'uri',
'after_double_opt_in' => 'uri',
'after_opt_out' => 'uri'    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'after_opt_in' => 'after_opt_in',
'after_double_opt_in' => 'after_double_opt_in',
'after_opt_out' => 'after_opt_out'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'after_opt_in' => 'setAfterOptIn',
'after_double_opt_in' => 'setAfterDoubleOptIn',
'after_opt_out' => 'setAfterOptOut'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'after_opt_in' => 'getAfterOptIn',
'after_double_opt_in' => 'getAfterDoubleOptIn',
'after_opt_out' => 'getAfterOptOut'    ];

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
        return self::$swaggerModelName;
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
        $this->container['after_opt_in'] = isset($data['after_opt_in']) ? $data['after_opt_in'] : null;
        $this->container['after_double_opt_in'] = isset($data['after_double_opt_in']) ? $data['after_double_opt_in'] : null;
        $this->container['after_opt_out'] = isset($data['after_opt_out']) ? $data['after_opt_out'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets after_opt_in
     *
     * @return string
     */
    public function getAfterOptIn()
    {
        return $this->container['after_opt_in'];
    }

    /**
     * Sets after_opt_in
     *
     * @param string $after_opt_in after_opt_in
     *
     * @return $this
     */
    public function setAfterOptIn($after_opt_in)
    {
        $this->container['after_opt_in'] = $after_opt_in;

        return $this;
    }

    /**
     * Gets after_double_opt_in
     *
     * @return string
     */
    public function getAfterDoubleOptIn()
    {
        return $this->container['after_double_opt_in'];
    }

    /**
     * Sets after_double_opt_in
     *
     * @param string $after_double_opt_in after_double_opt_in
     *
     * @return $this
     */
    public function setAfterDoubleOptIn($after_double_opt_in)
    {
        $this->container['after_double_opt_in'] = $after_double_opt_in;

        return $this;
    }

    /**
     * Gets after_opt_out
     *
     * @return string
     */
    public function getAfterOptOut()
    {
        return $this->container['after_opt_out'];
    }

    /**
     * Sets after_opt_out
     *
     * @param string $after_opt_out after_opt_out
     *
     * @return $this
     */
    public function setAfterOptOut($after_opt_out)
    {
        $this->container['after_opt_out'] = $after_opt_out;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
