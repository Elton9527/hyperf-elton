<?php
/**
 * UserAction
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
 * UserAction Class Doc Comment
 *
 * @category Class
 * @description 行为上报数据
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserAction implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'user_action';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'actionTime' => 'int',
        'userId' => '\TencentAds\Model\ActionsUserId',
        'actionType' => '\TencentAds\Model\ActionType',
        'actionParam' => 'string',
        'customAction' => 'string',
        'trace' => '\TencentAds\Model\Trace',
        'url' => 'string',
        'productInform' => '\TencentAds\Model\ProductInform',
        'channel' => '\TencentAds\Model\ActionChannelType',
        'externalActionId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'actionTime' => 'int64',
        'userId' => null,
        'actionType' => null,
        'actionParam' => null,
        'customAction' => null,
        'trace' => null,
        'url' => null,
        'productInform' => null,
        'channel' => null,
        'externalActionId' => null
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
        'actionTime' => 'action_time',
        'userId' => 'user_id',
        'actionType' => 'action_type',
        'actionParam' => 'action_param',
        'customAction' => 'custom_action',
        'trace' => 'trace',
        'url' => 'url',
        'productInform' => 'product_inform',
        'channel' => 'channel',
        'externalActionId' => 'external_action_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'actionTime' => 'setActionTime',
        'userId' => 'setUserId',
        'actionType' => 'setActionType',
        'actionParam' => 'setActionParam',
        'customAction' => 'setCustomAction',
        'trace' => 'setTrace',
        'url' => 'setUrl',
        'productInform' => 'setProductInform',
        'channel' => 'setChannel',
        'externalActionId' => 'setExternalActionId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'actionTime' => 'getActionTime',
        'userId' => 'getUserId',
        'actionType' => 'getActionType',
        'actionParam' => 'getActionParam',
        'customAction' => 'getCustomAction',
        'trace' => 'getTrace',
        'url' => 'getUrl',
        'productInform' => 'getProductInform',
        'channel' => 'getChannel',
        'externalActionId' => 'getExternalActionId'
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
        $this->container['actionTime'] = isset($data['actionTime']) ? $data['actionTime'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['actionType'] = isset($data['actionType']) ? $data['actionType'] : null;
        $this->container['actionParam'] = isset($data['actionParam']) ? $data['actionParam'] : null;
        $this->container['customAction'] = isset($data['customAction']) ? $data['customAction'] : null;
        $this->container['trace'] = isset($data['trace']) ? $data['trace'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['productInform'] = isset($data['productInform']) ? $data['productInform'] : null;
        $this->container['channel'] = isset($data['channel']) ? $data['channel'] : null;
        $this->container['externalActionId'] = isset($data['externalActionId']) ? $data['externalActionId'] : null;
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
     * Gets actionTime
     *
     * @return int
     */
    public function getActionTime()
    {
        return $this->container['actionTime'];
    }

    /**
     * Sets actionTime
     *
     * @param int $actionTime actionTime
     *
     * @return $this
     */
    public function setActionTime($actionTime)
    {
        $this->container['actionTime'] = $actionTime;

        return $this;
    }

    /**
     * Gets userId
     *
     * @return \TencentAds\Model\ActionsUserId
     */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
     * Sets userId
     *
     * @param \TencentAds\Model\ActionsUserId $userId userId
     *
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;

        return $this;
    }

    /**
     * Gets actionType
     *
     * @return \TencentAds\Model\ActionType
     */
    public function getActionType()
    {
        return $this->container['actionType'];
    }

    /**
     * Sets actionType
     *
     * @param \TencentAds\Model\ActionType $actionType actionType
     *
     * @return $this
     */
    public function setActionType($actionType)
    {
        $this->container['actionType'] = $actionType;

        return $this;
    }

    /**
     * Gets actionParam
     *
     * @return string
     */
    public function getActionParam()
    {
        return $this->container['actionParam'];
    }

    /**
     * Sets actionParam
     *
     * @param string $actionParam actionParam
     *
     * @return $this
     */
    public function setActionParam($actionParam)
    {
        $this->container['actionParam'] = $actionParam;

        return $this;
    }

    /**
     * Gets customAction
     *
     * @return string
     */
    public function getCustomAction()
    {
        return $this->container['customAction'];
    }

    /**
     * Sets customAction
     *
     * @param string $customAction customAction
     *
     * @return $this
     */
    public function setCustomAction($customAction)
    {
        $this->container['customAction'] = $customAction;

        return $this;
    }

    /**
     * Gets trace
     *
     * @return \TencentAds\Model\Trace
     */
    public function getTrace()
    {
        return $this->container['trace'];
    }

    /**
     * Sets trace
     *
     * @param \TencentAds\Model\Trace $trace trace
     *
     * @return $this
     */
    public function setTrace($trace)
    {
        $this->container['trace'] = $trace;

        return $this;
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
     * Gets productInform
     *
     * @return \TencentAds\Model\ProductInform
     */
    public function getProductInform()
    {
        return $this->container['productInform'];
    }

    /**
     * Sets productInform
     *
     * @param \TencentAds\Model\ProductInform $productInform productInform
     *
     * @return $this
     */
    public function setProductInform($productInform)
    {
        $this->container['productInform'] = $productInform;

        return $this;
    }

    /**
     * Gets channel
     *
     * @return \TencentAds\Model\ActionChannelType
     */
    public function getChannel()
    {
        return $this->container['channel'];
    }

    /**
     * Sets channel
     *
     * @param \TencentAds\Model\ActionChannelType $channel channel
     *
     * @return $this
     */
    public function setChannel($channel)
    {
        $this->container['channel'] = $channel;

        return $this;
    }

    /**
     * Gets externalActionId
     *
     * @return string
     */
    public function getExternalActionId()
    {
        return $this->container['externalActionId'];
    }

    /**
     * Sets externalActionId
     *
     * @param string $externalActionId externalActionId
     *
     * @return $this
     */
    public function setExternalActionId($externalActionId)
    {
        $this->container['externalActionId'] = $externalActionId;

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


