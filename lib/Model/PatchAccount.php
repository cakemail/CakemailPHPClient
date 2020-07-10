<?php
/**
 * PatchAccount
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
 * PatchAccount Class Doc Comment
 *
 * @category Class
 * @package  Cakemail
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PatchAccount implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PatchAccount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'address' => 'Address',
        'name' => 'string',
        'account_owner' => '\Cakemail\Model\AccountOwner',
        'fax' => 'string',
        'phone' => 'string',
        'website' => 'string',
        'usage_limits' => 'UsageLimits',
        'trial' => 'bool',
        'partner' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'address' => null,
        'name' => null,
        'account_owner' => null,
        'fax' => null,
        'phone' => null,
        'website' => 'uri',
        'usage_limits' => null,
        'trial' => null,
        'partner' => null
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
        'address' => 'address',
        'name' => 'name',
        'account_owner' => 'account_owner',
        'fax' => 'fax',
        'phone' => 'phone',
        'website' => 'website',
        'usage_limits' => 'usage_limits',
        'trial' => 'trial',
        'partner' => 'partner'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address' => 'setAddress',
        'name' => 'setName',
        'account_owner' => 'setAccountOwner',
        'fax' => 'setFax',
        'phone' => 'setPhone',
        'website' => 'setWebsite',
        'usage_limits' => 'setUsageLimits',
        'trial' => 'setTrial',
        'partner' => 'setPartner'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address' => 'getAddress',
        'name' => 'getName',
        'account_owner' => 'getAccountOwner',
        'fax' => 'getFax',
        'phone' => 'getPhone',
        'website' => 'getWebsite',
        'usage_limits' => 'getUsageLimits',
        'trial' => 'getTrial',
        'partner' => 'getPartner'
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
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['account_owner'] = isset($data['account_owner']) ? $data['account_owner'] : null;
        $this->container['fax'] = isset($data['fax']) ? $data['fax'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['website'] = isset($data['website']) ? $data['website'] : null;
        $this->container['usage_limits'] = isset($data['usage_limits']) ? $data['usage_limits'] : null;
        $this->container['trial'] = isset($data['trial']) ? $data['trial'] : null;
        $this->container['partner'] = isset($data['partner']) ? $data['partner'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['website']) && (mb_strlen($this->container['website']) > 2083)) {
            $invalidProperties[] = "invalid value for 'website', the character length must be smaller than or equal to 2083.";
        }

        if (!is_null($this->container['website']) && (mb_strlen($this->container['website']) < 1)) {
            $invalidProperties[] = "invalid value for 'website', the character length must be bigger than or equal to 1.";
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
     * Gets address
     *
     * @return Address|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param Address|null $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

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
     * Gets account_owner
     *
     * @return \Cakemail\Model\AccountOwner|null
     */
    public function getAccountOwner()
    {
        return $this->container['account_owner'];
    }

    /**
     * Sets account_owner
     *
     * @param \Cakemail\Model\AccountOwner|null $account_owner account_owner
     *
     * @return $this
     */
    public function setAccountOwner($account_owner)
    {
        $this->container['account_owner'] = $account_owner;

        return $this;
    }

    /**
     * Gets fax
     *
     * @return string|null
     */
    public function getFax()
    {
        return $this->container['fax'];
    }

    /**
     * Sets fax
     *
     * @param string|null $fax fax
     *
     * @return $this
     */
    public function setFax($fax)
    {
        $this->container['fax'] = $fax;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets website
     *
     * @return string|null
     */
    public function getWebsite()
    {
        return $this->container['website'];
    }

    /**
     * Sets website
     *
     * @param string|null $website website
     *
     * @return $this
     */
    public function setWebsite($website)
    {
        if (!is_null($website) && (mb_strlen($website) > 2083)) {
            throw new \InvalidArgumentException('invalid length for $website when calling PatchAccount., must be smaller than or equal to 2083.');
        }
        if (!is_null($website) && (mb_strlen($website) < 1)) {
            throw new \InvalidArgumentException('invalid length for $website when calling PatchAccount., must be bigger than or equal to 1.');
        }

        $this->container['website'] = $website;

        return $this;
    }

    /**
     * Gets usage_limits
     *
     * @return UsageLimits|null
     */
    public function getUsageLimits()
    {
        return $this->container['usage_limits'];
    }

    /**
     * Sets usage_limits
     *
     * @param UsageLimits|null $usage_limits usage_limits
     *
     * @return $this
     */
    public function setUsageLimits($usage_limits)
    {
        $this->container['usage_limits'] = $usage_limits;

        return $this;
    }

    /**
     * Gets trial
     *
     * @return bool|null
     */
    public function getTrial()
    {
        return $this->container['trial'];
    }

    /**
     * Sets trial
     *
     * @param bool|null $trial trial
     *
     * @return $this
     */
    public function setTrial($trial)
    {
        $this->container['trial'] = $trial;

        return $this;
    }

    /**
     * Gets partner
     *
     * @return bool|null
     */
    public function getPartner()
    {
        return $this->container['partner'];
    }

    /**
     * Sets partner
     *
     * @param bool|null $partner partner
     *
     * @return $this
     */
    public function setPartner($partner)
    {
        $this->container['partner'] = $partner;

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

