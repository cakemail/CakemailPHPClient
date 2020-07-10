<?php
/**
 * CampaignSummaryResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  Cakemail
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Cakemail API
 *
 * The Cakemail API exposes multiple APIs including Authentication, Marketing, Contact, Transactional, Analytic, Content, Account and Partner.
 *
 * The version of the OpenAPI document: 1.0.0-alpha5
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Cakemail\Model;

use \ArrayAccess;
use \Cakemail\ObjectSerializer;

/**
 * CampaignSummaryResponse Class Doc Comment
 *
 * @category Class
 * @package  Cakemail
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CampaignSummaryResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CampaignSummaryResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'name' => 'string',
        'audience' => '\Cakemail\Model\AudienceSummaryResponse',
        'type' => 'string',
        'created_on' => 'int',
        'scheduled_for' => 'int',
        'scheduled_on' => 'int',
        'sender' => '\Cakemail\Model\ListSenderResponse',
        'next_building_step' => 'string',
        'status' => 'string',
        'suspended' => 'bool',
        'web_email_link' => 'string',
        'thumbnail_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'audience' => null,
        'type' => null,
        'created_on' => null,
        'scheduled_for' => null,
        'scheduled_on' => null,
        'sender' => null,
        'next_building_step' => null,
        'status' => null,
        'suspended' => null,
        'web_email_link' => null,
        'thumbnail_url' => null
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
        'id' => 'id',
        'name' => 'name',
        'audience' => 'audience',
        'type' => 'type',
        'created_on' => 'created_on',
        'scheduled_for' => 'scheduled_for',
        'scheduled_on' => 'scheduled_on',
        'sender' => 'sender',
        'next_building_step' => 'next_building_step',
        'status' => 'status',
        'suspended' => 'suspended',
        'web_email_link' => 'web_email_link',
        'thumbnail_url' => 'thumbnail_url'
    ];

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
        'created_on' => 'setCreatedOn',
        'scheduled_for' => 'setScheduledFor',
        'scheduled_on' => 'setScheduledOn',
        'sender' => 'setSender',
        'next_building_step' => 'setNextBuildingStep',
        'status' => 'setStatus',
        'suspended' => 'setSuspended',
        'web_email_link' => 'setWebEmailLink',
        'thumbnail_url' => 'setThumbnailUrl'
    ];

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
        'created_on' => 'getCreatedOn',
        'scheduled_for' => 'getScheduledFor',
        'scheduled_on' => 'getScheduledOn',
        'sender' => 'getSender',
        'next_building_step' => 'getNextBuildingStep',
        'status' => 'getStatus',
        'suspended' => 'getSuspended',
        'web_email_link' => 'getWebEmailLink',
        'thumbnail_url' => 'getThumbnailUrl'
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
            self::TYPE_ABSPLIT,
        ];
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
            self::STATUS_SCHEDULED,
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
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['audience'] = isset($data['audience']) ? $data['audience'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['created_on'] = isset($data['created_on']) ? $data['created_on'] : null;
        $this->container['scheduled_for'] = isset($data['scheduled_for']) ? $data['scheduled_for'] : null;
        $this->container['scheduled_on'] = isset($data['scheduled_on']) ? $data['scheduled_on'] : null;
        $this->container['sender'] = isset($data['sender']) ? $data['sender'] : null;
        $this->container['next_building_step'] = isset($data['next_building_step']) ? $data['next_building_step'] : null;
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
     * @return string|null
     */
    public function getName()
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
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets audience
     *
     * @return \Cakemail\Model\AudienceSummaryResponse|null
     */
    public function getAudience()
    {
        return $this->container['audience'];
    }

    /**
     * Sets audience
     *
     * @param \Cakemail\Model\AudienceSummaryResponse|null $audience audience
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
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type type
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
     * Gets created_on
     *
     * @return int|null
     */
    public function getCreatedOn()
    {
        return $this->container['created_on'];
    }

    /**
     * Sets created_on
     *
     * @param int|null $created_on created_on
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
     * @return int|null
     */
    public function getScheduledFor()
    {
        return $this->container['scheduled_for'];
    }

    /**
     * Sets scheduled_for
     *
     * @param int|null $scheduled_for scheduled_for
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
     * @return int|null
     */
    public function getScheduledOn()
    {
        return $this->container['scheduled_on'];
    }

    /**
     * Sets scheduled_on
     *
     * @param int|null $scheduled_on scheduled_on
     *
     * @return $this
     */
    public function setScheduledOn($scheduled_on)
    {
        $this->container['scheduled_on'] = $scheduled_on;

        return $this;
    }

    /**
     * Gets sender
     *
     * @return \Cakemail\Model\ListSenderResponse|null
     */
    public function getSender()
    {
        return $this->container['sender'];
    }

    /**
     * Sets sender
     *
     * @param \Cakemail\Model\ListSenderResponse|null $sender sender
     *
     * @return $this
     */
    public function setSender($sender)
    {
        $this->container['sender'] = $sender;

        return $this;
    }

    /**
     * Gets next_building_step
     *
     * @return string|null
     */
    public function getNextBuildingStep()
    {
        return $this->container['next_building_step'];
    }

    /**
     * Sets next_building_step
     *
     * @param string|null $next_building_step next_building_step
     *
     * @return $this
     */
    public function setNextBuildingStep($next_building_step)
    {
        $this->container['next_building_step'] = $next_building_step;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
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
     * @return bool|null
     */
    public function getSuspended()
    {
        return $this->container['suspended'];
    }

    /**
     * Sets suspended
     *
     * @param bool|null $suspended suspended
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
     * @return string|null
     */
    public function getWebEmailLink()
    {
        return $this->container['web_email_link'];
    }

    /**
     * Sets web_email_link
     *
     * @param string|null $web_email_link web_email_link
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
     * @return string|null
     */
    public function getThumbnailUrl()
    {
        return $this->container['thumbnail_url'];
    }

    /**
     * Sets thumbnail_url
     *
     * @param string|null $thumbnail_url thumbnail_url
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

