<?php
/**
 * PatchCampaign
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
 * PatchCampaign Class Doc Comment
 *
 * @category Class
 * @package  Cakemail
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PatchCampaign implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PatchCampaign';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
'audience' => 'AllOfPatchCampaignAudience',
'tracking' => 'AllOfPatchCampaignTracking',
'sender' => '\Cakemail\Model\Sender',
'reply_to_email' => 'string',
'content' => 'AllOfPatchCampaignContent',
'editor' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
'audience' => null,
'tracking' => null,
'sender' => null,
'reply_to_email' => null,
'content' => null,
'editor' => null    ];

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
        'name' => 'name',
'audience' => 'audience',
'tracking' => 'tracking',
'sender' => 'sender',
'reply_to_email' => 'reply_to_email',
'content' => 'content',
'editor' => 'editor'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
'audience' => 'setAudience',
'tracking' => 'setTracking',
'sender' => 'setSender',
'reply_to_email' => 'setReplyToEmail',
'content' => 'setContent',
'editor' => 'setEditor'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
'audience' => 'getAudience',
'tracking' => 'getTracking',
'sender' => 'getSender',
'reply_to_email' => 'getReplyToEmail',
'content' => 'getContent',
'editor' => 'getEditor'    ];

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

    const EDITOR_HTML = 'html';
const EDITOR_BEE = 'bee';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEditorAllowableValues()
    {
        return [
            self::EDITOR_HTML,
self::EDITOR_BEE,        ];
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['audience'] = isset($data['audience']) ? $data['audience'] : null;
        $this->container['tracking'] = isset($data['tracking']) ? $data['tracking'] : null;
        $this->container['sender'] = isset($data['sender']) ? $data['sender'] : null;
        $this->container['reply_to_email'] = isset($data['reply_to_email']) ? $data['reply_to_email'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['editor'] = isset($data['editor']) ? $data['editor'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getEditorAllowableValues();
        if (!is_null($this->container['editor']) && !in_array($this->container['editor'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'editor', must be one of '%s'",
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
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
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
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets audience
     *
     * @return AllOfPatchCampaignAudience
     */
    public function getAudience()
    {
        return $this->container['audience'];
    }

    /**
     * Sets audience
     *
     * @param AllOfPatchCampaignAudience $audience audience
     *
     * @return $this
     */
    public function setAudience($audience)
    {
        $this->container['audience'] = $audience;

        return $this;
    }

    /**
     * Gets tracking
     *
     * @return AllOfPatchCampaignTracking
     */
    public function getTracking()
    {
        return $this->container['tracking'];
    }

    /**
     * Sets tracking
     *
     * @param AllOfPatchCampaignTracking $tracking tracking
     *
     * @return $this
     */
    public function setTracking($tracking)
    {
        $this->container['tracking'] = $tracking;

        return $this;
    }

    /**
     * Gets sender
     *
     * @return \Cakemail\Model\Sender
     */
    public function getSender()
    {
        return $this->container['sender'];
    }

    /**
     * Sets sender
     *
     * @param \Cakemail\Model\Sender $sender sender
     *
     * @return $this
     */
    public function setSender($sender)
    {
        $this->container['sender'] = $sender;

        return $this;
    }

    /**
     * Gets reply_to_email
     *
     * @return string
     */
    public function getReplyToEmail()
    {
        return $this->container['reply_to_email'];
    }

    /**
     * Sets reply_to_email
     *
     * @param string $reply_to_email Specify a different reply-to email address than the sender
     *
     * @return $this
     */
    public function setReplyToEmail($reply_to_email)
    {
        $this->container['reply_to_email'] = $reply_to_email;

        return $this;
    }

    /**
     * Gets content
     *
     * @return AllOfPatchCampaignContent
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param AllOfPatchCampaignContent $content content
     *
     * @return $this
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets editor
     *
     * @return string
     */
    public function getEditor()
    {
        return $this->container['editor'];
    }

    /**
     * Sets editor
     *
     * @param string $editor editor
     *
     * @return $this
     */
    public function setEditor($editor)
    {
        $allowedValues = $this->getEditorAllowableValues();
        if (!is_null($editor) && !in_array($editor, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'editor', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['editor'] = $editor;

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
