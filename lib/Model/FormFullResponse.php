<?php
/**
 * FormFullResponse
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
 * FormFullResponse Class Doc Comment
 *
 * @category Class
 * @package  Cakemail
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FormFullResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FormFullResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'status' => 'string',
        'content' => '\Cakemail\Model\FormContentResponse',
        'language' => 'string',
        'created_on' => 'int',
        'last_updated_on' => 'int',
        'url' => '\Cakemail\Model\FormUrlsResponse',
        'thumbnail' => 'string',
        'redirections' => '\Cakemail\Model\FormRedirectionsResponse',
        'list_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'status' => null,
        'content' => null,
        'language' => null,
        'created_on' => null,
        'last_updated_on' => null,
        'url' => null,
        'thumbnail' => null,
        'redirections' => null,
        'list_id' => null
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
        'status' => 'status',
        'content' => 'content',
        'language' => 'language',
        'created_on' => 'created_on',
        'last_updated_on' => 'last_updated_on',
        'url' => 'url',
        'thumbnail' => 'thumbnail',
        'redirections' => 'redirections',
        'list_id' => 'list_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'status' => 'setStatus',
        'content' => 'setContent',
        'language' => 'setLanguage',
        'created_on' => 'setCreatedOn',
        'last_updated_on' => 'setLastUpdatedOn',
        'url' => 'setUrl',
        'thumbnail' => 'setThumbnail',
        'redirections' => 'setRedirections',
        'list_id' => 'setListId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'status' => 'getStatus',
        'content' => 'getContent',
        'language' => 'getLanguage',
        'created_on' => 'getCreatedOn',
        'last_updated_on' => 'getLastUpdatedOn',
        'url' => 'getUrl',
        'thumbnail' => 'getThumbnail',
        'redirections' => 'getRedirections',
        'list_id' => 'getListId'
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

    const STATUS_ACTIVE = 'active';
    const STATUS_DELETED = 'deleted';
    const LANGUAGE_EN_US = 'en_US';
    const LANGUAGE_DE_DE = 'de_DE';
    const LANGUAGE_EL_GR = 'el_GR';
    const LANGUAGE_ES_US = 'es_US';
    const LANGUAGE_ET_EE = 'et_EE';
    const LANGUAGE_FR_CA = 'fr_CA';
    const LANGUAGE_NL_NL = 'nl_NL';
    const LANGUAGE_RO_RO = 'ro_RO';
    const LANGUAGE_RU_RU = 'ru_RU';
    const LANGUAGE_TH_TH = 'th_TH';
    const LANGUAGE_ZH_CN = 'zh_CN';
    const LANGUAGE_FI_FI = 'fi_FI';
    const LANGUAGE_SV_SE = 'sv_SE';
    const LANGUAGE_ES_ES = 'es_ES';
    const LANGUAGE_FR_FR = 'fr_FR';
    const LANGUAGE_TR_TR = 'tr_TR';
    const LANGUAGE_PT_BR = 'pt_BR';
    const LANGUAGE_DA_DK = 'da_DK';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
            self::STATUS_DELETED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLanguageAllowableValues()
    {
        return [
            self::LANGUAGE_EN_US,
            self::LANGUAGE_DE_DE,
            self::LANGUAGE_EL_GR,
            self::LANGUAGE_ES_US,
            self::LANGUAGE_ET_EE,
            self::LANGUAGE_FR_CA,
            self::LANGUAGE_NL_NL,
            self::LANGUAGE_RO_RO,
            self::LANGUAGE_RU_RU,
            self::LANGUAGE_TH_TH,
            self::LANGUAGE_ZH_CN,
            self::LANGUAGE_FI_FI,
            self::LANGUAGE_SV_SE,
            self::LANGUAGE_ES_ES,
            self::LANGUAGE_FR_FR,
            self::LANGUAGE_TR_TR,
            self::LANGUAGE_PT_BR,
            self::LANGUAGE_DA_DK,
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['created_on'] = isset($data['created_on']) ? $data['created_on'] : null;
        $this->container['last_updated_on'] = isset($data['last_updated_on']) ? $data['last_updated_on'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['thumbnail'] = isset($data['thumbnail']) ? $data['thumbnail'] : null;
        $this->container['redirections'] = isset($data['redirections']) ? $data['redirections'] : null;
        $this->container['list_id'] = isset($data['list_id']) ? $data['list_id'] : null;
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['content'] === null) {
            $invalidProperties[] = "'content' can't be null";
        }
        if ($this->container['language'] === null) {
            $invalidProperties[] = "'language' can't be null";
        }
        $allowedValues = $this->getLanguageAllowableValues();
        if (!is_null($this->container['language']) && !in_array($this->container['language'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'language', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
        if ($this->container['redirections'] === null) {
            $invalidProperties[] = "'redirections' can't be null";
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
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
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
        if (!in_array($status, $allowedValues, true)) {
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
     * Gets content
     *
     * @return \Cakemail\Model\FormContentResponse
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param \Cakemail\Model\FormContentResponse $content content
     *
     * @return $this
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string $language language
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $allowedValues = $this->getLanguageAllowableValues();
        if (!in_array($language, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'language', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['language'] = $language;

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
     * Gets last_updated_on
     *
     * @return int|null
     */
    public function getLastUpdatedOn()
    {
        return $this->container['last_updated_on'];
    }

    /**
     * Sets last_updated_on
     *
     * @param int|null $last_updated_on last_updated_on
     *
     * @return $this
     */
    public function setLastUpdatedOn($last_updated_on)
    {
        $this->container['last_updated_on'] = $last_updated_on;

        return $this;
    }

    /**
     * Gets url
     *
     * @return \Cakemail\Model\FormUrlsResponse
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param \Cakemail\Model\FormUrlsResponse $url url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets thumbnail
     *
     * @return string|null
     */
    public function getThumbnail()
    {
        return $this->container['thumbnail'];
    }

    /**
     * Sets thumbnail
     *
     * @param string|null $thumbnail thumbnail
     *
     * @return $this
     */
    public function setThumbnail($thumbnail)
    {
        $this->container['thumbnail'] = $thumbnail;

        return $this;
    }

    /**
     * Gets redirections
     *
     * @return \Cakemail\Model\FormRedirectionsResponse
     */
    public function getRedirections()
    {
        return $this->container['redirections'];
    }

    /**
     * Sets redirections
     *
     * @param \Cakemail\Model\FormRedirectionsResponse $redirections redirections
     *
     * @return $this
     */
    public function setRedirections($redirections)
    {
        $this->container['redirections'] = $redirections;

        return $this;
    }

    /**
     * Gets list_id
     *
     * @return int|null
     */
    public function getListId()
    {
        return $this->container['list_id'];
    }

    /**
     * Sets list_id
     *
     * @param int|null $list_id list_id
     *
     * @return $this
     */
    public function setListId($list_id)
    {
        $this->container['list_id'] = $list_id;

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


