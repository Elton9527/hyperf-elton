<?php
/**
 * UserActionSet
 *
 * PHP version 5
 *
 * @category Class
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Marketing API
 *
 * Marketing API
 *
 * OpenAPI spec version: 1.3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.13
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace TencentAds\Model;

use \ArrayAccess;
use \TencentAds\ObjectSerializer;

/**
 * UserActionSet Class Doc Comment
 *
 * @category Class
 * @description UserActionSet返回结构
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserActionSet implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'user_action_set';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'userActionSetId' => 'int',
        'type' => '\TencentAds\Model\AmUserActionSetType',
        'mobileAppId' => 'int',
        'name' => 'string',
        'description' => 'string',
        'activateStatus' => 'bool',
        'createdTime' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'userActionSetId' => 'int64',
        'type' => null,
        'mobileAppId' => 'int64',
        'name' => null,
        'description' => null,
        'activateStatus' => null,
        'createdTime' => null
    ];

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
        'userActionSetId' => 'user_action_set_id',
        'type' => 'type',
        'mobileAppId' => 'mobile_app_id',
        'name' => 'name',
        'description' => 'description',
        'activateStatus' => 'activate_status',
        'createdTime' => 'created_time'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'userActionSetId' => 'setUserActionSetId',
        'type' => 'setType',
        'mobileAppId' => 'setMobileAppId',
        'name' => 'setName',
        'description' => 'setDescription',
        'activateStatus' => 'setActivateStatus',
        'createdTime' => 'setCreatedTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'userActionSetId' => 'getUserActionSetId',
        'type' => 'getType',
        'mobileAppId' => 'getMobileAppId',
        'name' => 'getName',
        'description' => 'getDescription',
        'activateStatus' => 'getActivateStatus',
        'createdTime' => 'getCreatedTime'
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
        $this->container['userActionSetId'] = isset($data['userActionSetId']) ? $data['userActionSetId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['mobileAppId'] = isset($data['mobileAppId']) ? $data['mobileAppId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['activateStatus'] = isset($data['activateStatus']) ? $data['activateStatus'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
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
     * Gets userActionSetId
     *
     * @return int
     */
    public function getUserActionSetId()
    {
        return $this->container['userActionSetId'];
    }

    /**
     * Sets userActionSetId
     *
     * @param int $userActionSetId userActionSetId
     *
     * @return $this
     */
    public function setUserActionSetId($userActionSetId)
    {
        $this->container['userActionSetId'] = $userActionSetId;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \TencentAds\Model\AmUserActionSetType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \TencentAds\Model\AmUserActionSetType $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets mobileAppId
     *
     * @return int
     */
    public function getMobileAppId()
    {
        return $this->container['mobileAppId'];
    }

    /**
     * Sets mobileAppId
     *
     * @param int $mobileAppId mobileAppId
     *
     * @return $this
     */
    public function setMobileAppId($mobileAppId)
    {
        $this->container['mobileAppId'] = $mobileAppId;

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
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets activateStatus
     *
     * @return bool
     */
    public function getActivateStatus()
    {
        return $this->container['activateStatus'];
    }

    /**
     * Sets activateStatus
     *
     * @param bool $activateStatus activateStatus
     *
     * @return $this
     */
    public function setActivateStatus($activateStatus)
    {
        $this->container['activateStatus'] = $activateStatus;

        return $this;
    }

    /**
     * Gets createdTime
     *
     * @return string
     */
    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    /**
     * Sets createdTime
     *
     * @param string $createdTime createdTime
     *
     * @return $this
     */
    public function setCreatedTime($createdTime)
    {
        $this->container['createdTime'] = $createdTime;

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


