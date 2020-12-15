<?php
/**
 * TargetingTagsGetQuerySpec
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
 * TargetingTagsGetQuerySpec Class Doc Comment
 *
 * @category Class
 * @description 查询定向标签的条件，当 query_mode 为 TARGETING_TAG_QUERY_MODE_VERIFY_QUERY_LIST、TARGETING_TAG_QUERY_MODE_SEARCH 和 TARGETING_TAG_QUERY_MODE_RECOMMEND 时必填
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TargetingTagsGetQuerySpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TargetingTagsGetQuerySpec';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'query' => 'string',
        'queryList' => 'string[]',
        'maxResultNumber' => 'int',
        'excludingTargetingTags' => 'string[]',
        'advancedRecommendType' => '\TencentAds\Model\TargetingAdvancedRecommendType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'query' => null,
        'queryList' => null,
        'maxResultNumber' => 'int64',
        'excludingTargetingTags' => null,
        'advancedRecommendType' => null
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
        'query' => 'query',
        'queryList' => 'query_list',
        'maxResultNumber' => 'max_result_number',
        'excludingTargetingTags' => 'excluding_targeting_tags',
        'advancedRecommendType' => 'advanced_recommend_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'query' => 'setQuery',
        'queryList' => 'setQueryList',
        'maxResultNumber' => 'setMaxResultNumber',
        'excludingTargetingTags' => 'setExcludingTargetingTags',
        'advancedRecommendType' => 'setAdvancedRecommendType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'query' => 'getQuery',
        'queryList' => 'getQueryList',
        'maxResultNumber' => 'getMaxResultNumber',
        'excludingTargetingTags' => 'getExcludingTargetingTags',
        'advancedRecommendType' => 'getAdvancedRecommendType'
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
        $this->container['query'] = isset($data['query']) ? $data['query'] : null;
        $this->container['queryList'] = isset($data['queryList']) ? $data['queryList'] : null;
        $this->container['maxResultNumber'] = isset($data['maxResultNumber']) ? $data['maxResultNumber'] : null;
        $this->container['excludingTargetingTags'] = isset($data['excludingTargetingTags']) ? $data['excludingTargetingTags'] : null;
        $this->container['advancedRecommendType'] = isset($data['advancedRecommendType']) ? $data['advancedRecommendType'] : null;
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
     * Gets query
     *
     * @return string
     */
    public function getQuery()
    {
        return $this->container['query'];
    }

    /**
     * Sets query
     *
     * @param string $query query
     *
     * @return $this
     */
    public function setQuery($query)
    {
        $this->container['query'] = $query;

        return $this;
    }

    /**
     * Gets queryList
     *
     * @return string[]
     */
    public function getQueryList()
    {
        return $this->container['queryList'];
    }

    /**
     * Sets queryList
     *
     * @param string[] $queryList queryList
     *
     * @return $this
     */
    public function setQueryList($queryList)
    {
        $this->container['queryList'] = $queryList;

        return $this;
    }

    /**
     * Gets maxResultNumber
     *
     * @return int
     */
    public function getMaxResultNumber()
    {
        return $this->container['maxResultNumber'];
    }

    /**
     * Sets maxResultNumber
     *
     * @param int $maxResultNumber maxResultNumber
     *
     * @return $this
     */
    public function setMaxResultNumber($maxResultNumber)
    {
        $this->container['maxResultNumber'] = $maxResultNumber;

        return $this;
    }

    /**
     * Gets excludingTargetingTags
     *
     * @return string[]
     */
    public function getExcludingTargetingTags()
    {
        return $this->container['excludingTargetingTags'];
    }

    /**
     * Sets excludingTargetingTags
     *
     * @param string[] $excludingTargetingTags excludingTargetingTags
     *
     * @return $this
     */
    public function setExcludingTargetingTags($excludingTargetingTags)
    {
        $this->container['excludingTargetingTags'] = $excludingTargetingTags;

        return $this;
    }

    /**
     * Gets advancedRecommendType
     *
     * @return \TencentAds\Model\TargetingAdvancedRecommendType
     */
    public function getAdvancedRecommendType()
    {
        return $this->container['advancedRecommendType'];
    }

    /**
     * Sets advancedRecommendType
     *
     * @param \TencentAds\Model\TargetingAdvancedRecommendType $advancedRecommendType advancedRecommendType
     *
     * @return $this
     */
    public function setAdvancedRecommendType($advancedRecommendType)
    {
        $this->container['advancedRecommendType'] = $advancedRecommendType;

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


