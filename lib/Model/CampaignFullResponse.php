<?php
/**
 * CampaignFullResponse
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
 * CampaignFullResponse Class Doc Comment
 *
 * @category Class
 * @package  Cakemail
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CampaignFullResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CampaignFullResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'name' => 'string',
'audience' => '\Cakemail\Model\AudienceResponse',
'type' => 'string',
'tracking' => '\Cakemail\Model\TrackingResponse',
'created_on' => 'int',
'scheduled_for' => 'int',
'scheduled_on' => 'int',
'delivery_finished_on' => 'int',
'sender' => '\Cakemail\Model\ListSenderResponse',
'reply_to_email' => 'string',
'content' => '\Cakemail\Model\CampaignContentResponse',
'next_building_step' => 'string',
'editor' => 'string',
'status' => 'string',
'suspended' => 'bool',
'web_email_link' => 'string',
'thumbnail_url' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'name' => null,
'audience' => null,
'type' => null,
'tracking' => null,
'created_on' => null,
'scheduled_for' => null,
'scheduled_on' => null,
'delivery_finished_on' => null,
'sender' => null,
'reply_to_email' => null,
'content' => null,
'next_building_step' => null,
'editor' => null,
'status' => null,
'suspended' => null,
'web_email_link' => null,
'thumbnail_url' => null    ];

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
        'id' => 'id',
'name' => 'name',
'audience' => 'audience',
'type' => 'type',
'tracking' => 'tracking',
'created_on' => 'created_on',
'scheduled_for' => 'scheduled_for',
'scheduled_on' => 'scheduled_on',
'delivery_finished_on' => 'delivery_finished_on',
'sender' => 'sender',
'reply_to_email' => 'reply_to_email',
'content' => 'content',
'next_building_step' => 'next_building_step',
'editor' => 'editor',
'status' => 'status',
'suspended' => 'suspended',
'web_email_link' => 'web_email_link',
'thumbnail_url' => 'thumbnail_url'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'name' => 'setName',
'audience' => 'setAudience',
'type' => 'setType',
'tracking' => 'setTracking',
'created_on' => 'setCreatedOn',
'scheduled_for' => 'setScheduledFor',
'scheduled_on' => 'setScheduledOn',
'delivery_finished_on' => 'setDeliveryFinishedOn',
'sender' => 'setSender',
'reply_to_email' => 'setReplyToEmail',
'content' => 'setContent',
'next_building_step' => 'setNextBuildingStep',
'editor' => 'setEditor',
'status' => 'setStatus',
'suspended' => 'setSuspended',
'web_email_link' => 'setWebEmailLink',
'thumbnail_url' => 'setThumbnailUrl'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'name' => 'getName',
'audience' => 'getAudience',
'type' => 'getType',
'tracking' => 'getTracking',
'created_on' => 'getCreatedOn',
'scheduled_for' => 'getScheduledFor',
'scheduled_on' => 'getScheduledOn',
'delivery_finished_on' => 'getDeliveryFinishedOn',
'sender' => 'getSender',
'reply_to_email' => 'getReplyToEmail',
'content' => 'getContent',
'next_building_step' => 'getNextBuildingStep',
'editor' => 'getEditor',
'status' => 'getStatus',
'suspended' => 'getSuspended',
'web_email_link' => 'getWebEmailLink',
'thumbnail_url' => 'getThumbnailUrl'    ];

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

    const TYPE_STANDARD = 'standard';
const TYPE_RECURRING = 'recurring';
const TYPE_ABSPLIT = 'absplit';
const STATUS_ACTIVE = 'active';
const STATUS_DELIVERING = 'delivering';
const STATUS_DELIVERED = 'delivered';
const STATUS_ARCHIVED = 'archived';
const STATUS_DELETED = 'deleted';
const STATUS_INCOMPLETE = 'incomplete';
const STATUS_SCHEDULED = 'scheduled';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_STANDARD,
self::TYPE_RECURRING,
self::TYPE_ABSPLIT,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
self::STATUS_DELIVERING,
self::STATUS_DELIVERED,
self::STATUS_ARCHIVED,
self::STATUS_DELETED,
self::STATUS_INCOMPLETE,
self::STATUS_SCHEDULED,        ];
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['audience'] = isset($data['audience']) ? $data['audience'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['tracking'] = isset($data['tracking']) ? $data['tracking'] : null;
        $this->container['created_on'] = isset($data['created_on']) ? $data['created_on'] : null;
        $this->container['scheduled_for'] = isset($data['scheduled_for']) ? $data['scheduled_for'] : null;
        $this->container['scheduled_on'] = isset($data['scheduled_on']) ? $data['scheduled_on'] : null;
        $this->container['delivery_finished_on'] = isset($data['delivery_finished_on']) ? $data['delivery_finished_on'] : null;
        $this->container['sender'] = isset($data['sender']) ? $data['sender'] : null;
        $this->container['reply_to_email'] = isset($data['reply_to_email']) ? $data['reply_to_email'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['next_building_step'] = isset($data['next_building_step']) ? $data['next_building_step'] : null;
        $this->container['editor'] = isset($data['editor']) ? $data['editor'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['suspended'] = isset($data['suspended']) ? $data['suspended'] : null;
        $this->container['web_email_link'] = isset($data['web_email_link']) ? $data['web_email_link'] : null;
        $this->container['thumbnail_url'] = isset($data['thumbnail_url']) ? $data['thumbnail_url'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @return \Cakemail\Model\AudienceResponse
     */
    public function getAudience()
    {
        return $this->container['audience'];
    }

    /**
     * Sets audience
     *
     * @param \Cakemail\Model\AudienceResponse $audience audience
     *
     * @return $this
     */
    public function setAudience($audience)
    {
        $this->container['audience'] = $audience;

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
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets tracking
     *
     * @return \Cakemail\Model\TrackingResponse
     */
    public function getTracking()
    {
        return $this->container['tracking'];
    }

    /**
     * Sets tracking
     *
     * @param \Cakemail\Model\TrackingResponse $tracking tracking
     *
     * @return $this
     */
    public function setTracking($tracking)
    {
        $this->container['tracking'] = $tracking;

        return $this;
    }

    /**
     * Gets created_on
     *
     * @return int
     */
    public function getCreatedOn()
    {
        return $this->container['created_on'];
    }

    /**
     * Sets created_on
     *
     * @param int $created_on created_on
     *
     * @return $this
     */
    public function setCreatedOn($created_on)
    {
        $this->container['created_on'] = $created_on;

        return $this;
    }

    /**
     * Gets scheduled_for
     *
     * @return int
     */
    public function getScheduledFor()
    {
        return $this->container['scheduled_for'];
    }

    /**
     * Sets scheduled_for
     *
     * @param int $scheduled_for scheduled_for
     *
     * @return $this
     */
    public function setScheduledFor($scheduled_for)
    {
        $this->container['scheduled_for'] = $scheduled_for;

        return $this;
    }

    /**
     * Gets scheduled_on
     *
     * @return int
     */
    public function getScheduledOn()
    {
        return $this->container['scheduled_on'];
    }

    /**
     * Sets scheduled_on
     *
     * @param int $scheduled_on scheduled_on
     *
     * @return $this
     */
    public function setScheduledOn($scheduled_on)
    {
        $this->container['scheduled_on'] = $scheduled_on;

        return $this;
    }

    /**
     * Gets delivery_finished_on
     *
     * @return int
     */
    public function getDeliveryFinishedOn()
    {
        return $this->container['delivery_finished_on'];
    }

    /**
     * Sets delivery_finished_on
     *
     * @param int $delivery_finished_on delivery_finished_on
     *
     * @return $this
     */
    public function setDeliveryFinishedOn($delivery_finished_on)
    {
        $this->container['delivery_finished_on'] = $delivery_finished_on;

        return $this;
    }

    /**
     * Gets sender
     *
     * @return \Cakemail\Model\ListSenderResponse
     */
    public function getSender()
    {
        return $this->container['sender'];
    }

    /**
     * Sets sender
     *
     * @param \Cakemail\Model\ListSenderResponse $sender sender
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
     * @param string $reply_to_email reply_to_email
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
     * @return \Cakemail\Model\CampaignContentResponse
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param \Cakemail\Model\CampaignContentResponse $content content
     *
     * @return $this
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets next_building_step
     *
     * @return string
     */
    public function getNextBuildingStep()
    {
        return $this->container['next_building_step'];
    }

    /**
     * Sets next_building_step
     *
     * @param string $next_building_step next_building_step
     *
     * @return $this
     */
    public function setNextBuildingStep($next_building_step)
    {
        $this->container['next_building_step'] = $next_building_step;

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
        $this->container['editor'] = $editor;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets suspended
     *
     * @return bool
     */
    public function getSuspended()
    {
        return $this->container['suspended'];
    }

    /**
     * Sets suspended
     *
     * @param bool $suspended suspended
     *
     * @return $this
     */
    public function setSuspended($suspended)
    {
        $this->container['suspended'] = $suspended;

        return $this;
    }

    /**
     * Gets web_email_link
     *
     * @return string
     */
    public function getWebEmailLink()
    {
        return $this->container['web_email_link'];
    }

    /**
     * Sets web_email_link
     *
     * @param string $web_email_link web_email_link
     *
     * @return $this
     */
    public function setWebEmailLink($web_email_link)
    {
        $this->container['web_email_link'] = $web_email_link;

        return $this;
    }

    /**
     * Gets thumbnail_url
     *
     * @return string
     */
    public function getThumbnailUrl()
    {
        return $this->container['thumbnail_url'];
    }

    /**
     * Sets thumbnail_url
     *
     * @param string $thumbnail_url thumbnail_url
     *
     * @return $this
     */
    public function setThumbnailUrl($thumbnail_url)
    {
        $this->container['thumbnail_url'] = $thumbnail_url;

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
