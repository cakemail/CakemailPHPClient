<?php
/**
 * ListWebhookResponse
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
 * ListWebhookResponse Class Doc Comment
 *
 * @category Class
 * @package  Cakemail
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ListWebhookResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ListWebhookResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'url' => 'string',
'actions' => 'string[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'url' => null,
'actions' => null    ];

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
        'url' => 'url',
'actions' => 'actions'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'url' => 'setUrl',
'actions' => 'setActions'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'url' => 'getUrl',
'actions' => 'getActions'    ];

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

    const ACTIONS_ALL = 'all';
const ACTIONS_SUBSCRIBE = 'subscribe';
const ACTIONS_UNSUBSCRIBE = 'unsubscribe';
const ACTIONS_UPDATE = 'update';
const ACTIONS_DELETE = 'delete';
const ACTIONS_SPAM = 'spam';
const ACTIONS_BOUNCE = 'bounce';
const ACTIONS_BOUNCE_AC = 'bounce_ac';
const ACTIONS_BOUNCE_CR = 'bounce_cr';
const ACTIONS_BOUNCE_DF = 'bounce_df';
const ACTIONS_BOUNCE_FM = 'bounce_fm';
const ACTIONS_BOUNCE_HB = 'bounce_hb';
const ACTIONS_BOUNCE_MB = 'bounce_mb';
const ACTIONS_BOUNCE_SB = 'bounce_sb';
const ACTIONS_BOUNCE_TR = 'bounce_tr';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getActionsAllowableValues()
    {
        return [
            self::ACTIONS_ALL,
self::ACTIONS_SUBSCRIBE,
self::ACTIONS_UNSUBSCRIBE,
self::ACTIONS_UPDATE,
self::ACTIONS_DELETE,
self::ACTIONS_SPAM,
self::ACTIONS_BOUNCE,
self::ACTIONS_BOUNCE_AC,
self::ACTIONS_BOUNCE_CR,
self::ACTIONS_BOUNCE_DF,
self::ACTIONS_BOUNCE_FM,
self::ACTIONS_BOUNCE_HB,
self::ACTIONS_BOUNCE_MB,
self::ACTIONS_BOUNCE_SB,
self::ACTIONS_BOUNCE_TR,        ];
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
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['actions'] = isset($data['actions']) ? $data['actions'] : null;
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
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets actions
     *
     * @return string[]
     */
    public function getActions()
    {
        return $this->container['actions'];
    }

    /**
     * Sets actions
     *
     * @param string[] $actions actions
     *
     * @return $this
     */
    public function setActions($actions)
    {
        $allowedValues = $this->getActionsAllowableValues();
        if (!is_null($actions) && array_diff($actions, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'actions', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['actions'] = $actions;

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
