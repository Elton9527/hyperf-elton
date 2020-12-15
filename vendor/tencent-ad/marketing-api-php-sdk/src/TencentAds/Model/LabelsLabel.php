<?php
/**
 * LabelsLabel
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
 * LabelsLabel Class Doc Comment
 *
 * @category Class
 * @description label返回结构
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LabelsLabel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'labels_label';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'labelId' => 'int',
        'audienceId' => 'int',
        'displayLabelName' => 'string',
        'description' => 'string',
        'userCount' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'labelId' => 'int64',
        'audienceId' => 'int64',
        'displayLabelName' => null,
        'description' => null,
        'userCount' => 'int64'
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
        'labelId' => 'label_id',
        'audienceId' => 'audience_id',
        'displayLabelName' => 'display_label_name',
        'description' => 'description',
        'userCount' => 'user_count'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'labelId' => 'setLabelId',
        'audienceId' => 'setAudienceId',
        'displayLabelName' => 'setDisplayLabelName',
        'description' => 'setDescription',
        'userCount' => 'setUserCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'labelId' => 'getLabelId',
        'audienceId' => 'getAudienceId',
        'displayLabelName' => 'getDisplayLabelName',
        'description' => 'getDescription',
        'userCount' => 'getUserCount'
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
        $this->container['labelId'] = isset($data['labelId']) ? $data['labelId'] : null;
        $this->container['audienceId'] = isset($data['audienceId']) ? $data['audienceId'] : null;
        $this->container['displayLabelName'] = isset($data['displayLabelName']) ? $data['displayLabelName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['userCount'] = isset($data['userCount']) ? $data['userCount'] : null;
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
     * Gets labelId
     *
     * @return int
     */
    public function getLabelId()
    {
        return $this->container['labelId'];
    }

    /**
     * Sets labelId
     *
     * @param int $labelId labelId
     *
     * @return $this
     */
    public function setLabelId($labelId)
    {
        $this->container['labelId'] = $labelId;

        return $this;
    }

    /**
     * Gets audienceId
     *
     * @return int
     */
    public function getAudienceId()
    {
        return $this->container['audienceId'];
    }

    /**
     * Sets audienceId
     *
     * @param int $audienceId audienceId
     *
     * @return $this
     */
    public function setAudienceId($audienceId)
    {
        $this->container['audienceId'] = $audienceId;

        return $this;
    }

    /**
     * Gets displayLabelName
     *
     * @return string
     */
    public function getDisplayLabelName()
    {
        return $this->container['displayLabelName'];
    }

    /**
     * Sets displayLabelName
     *
     * @param string $displayLabelName displayLabelName
     *
     * @return $this
     */
    public function setDisplayLabelName($displayLabelName)
    {
        $this->container['displayLabelName'] = $displayLabelName;

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
     * Gets userCount
     *
     * @return int
     */
    public function getUserCount()
    {
        return $this->container['userCount'];
    }

    /**
     * Sets userCount
     *
     * @param int $userCount userCount
     *
     * @return $this
     */
    public function setUserCount($userCount)
    {
        $this->container['userCount'] = $userCount;

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


