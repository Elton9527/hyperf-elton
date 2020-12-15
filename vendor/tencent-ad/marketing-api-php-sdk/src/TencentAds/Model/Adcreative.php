<?php
/**
 * Adcreative
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
 * Adcreative Class Doc Comment
 *
 * @category Class
 * @description 广告创意
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Adcreative implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'adcreative';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'adcreativeId' => 'int',
        'adcreativeName' => 'string',
        'campaignId' => 'int',
        'pageType' => '\TencentAds\Model\PageTypeRead',
        'pageSpec' => '\TencentAds\Model\PageSpec',
        'siteSet' => 'string[]',
        'promotedObjectType' => '\TencentAds\Model\PromotedObjectType',
        'promotedObjectId' => 'string',
        'createdTime' => 'int',
        'lastModifiedTime' => 'int',
        'playablePageMaterialId' => 'string',
        'videoEndPage' => '\TencentAds\Model\VideoEndPageSpec',
        'adcreativeTemplateId' => 'int',
        'adcreativeElements' => '\TencentAds\Model\AdcreativeCreativeElementsRead'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'adcreativeId' => 'int64',
        'adcreativeName' => null,
        'campaignId' => 'int64',
        'pageType' => null,
        'pageSpec' => null,
        'siteSet' => null,
        'promotedObjectType' => null,
        'promotedObjectId' => null,
        'createdTime' => 'int64',
        'lastModifiedTime' => 'int64',
        'playablePageMaterialId' => null,
        'videoEndPage' => null,
        'adcreativeTemplateId' => 'int64',
        'adcreativeElements' => null
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
        'adcreativeId' => 'adcreative_id',
        'adcreativeName' => 'adcreative_name',
        'campaignId' => 'campaign_id',
        'pageType' => 'page_type',
        'pageSpec' => 'page_spec',
        'siteSet' => 'site_set',
        'promotedObjectType' => 'promoted_object_type',
        'promotedObjectId' => 'promoted_object_id',
        'createdTime' => 'created_time',
        'lastModifiedTime' => 'last_modified_time',
        'playablePageMaterialId' => 'playable_page_material_id',
        'videoEndPage' => 'video_end_page',
        'adcreativeTemplateId' => 'adcreative_template_id',
        'adcreativeElements' => 'adcreative_elements'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'adcreativeId' => 'setAdcreativeId',
        'adcreativeName' => 'setAdcreativeName',
        'campaignId' => 'setCampaignId',
        'pageType' => 'setPageType',
        'pageSpec' => 'setPageSpec',
        'siteSet' => 'setSiteSet',
        'promotedObjectType' => 'setPromotedObjectType',
        'promotedObjectId' => 'setPromotedObjectId',
        'createdTime' => 'setCreatedTime',
        'lastModifiedTime' => 'setLastModifiedTime',
        'playablePageMaterialId' => 'setPlayablePageMaterialId',
        'videoEndPage' => 'setVideoEndPage',
        'adcreativeTemplateId' => 'setAdcreativeTemplateId',
        'adcreativeElements' => 'setAdcreativeElements'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'adcreativeId' => 'getAdcreativeId',
        'adcreativeName' => 'getAdcreativeName',
        'campaignId' => 'getCampaignId',
        'pageType' => 'getPageType',
        'pageSpec' => 'getPageSpec',
        'siteSet' => 'getSiteSet',
        'promotedObjectType' => 'getPromotedObjectType',
        'promotedObjectId' => 'getPromotedObjectId',
        'createdTime' => 'getCreatedTime',
        'lastModifiedTime' => 'getLastModifiedTime',
        'playablePageMaterialId' => 'getPlayablePageMaterialId',
        'videoEndPage' => 'getVideoEndPage',
        'adcreativeTemplateId' => 'getAdcreativeTemplateId',
        'adcreativeElements' => 'getAdcreativeElements'
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
        $this->container['adcreativeId'] = isset($data['adcreativeId']) ? $data['adcreativeId'] : null;
        $this->container['adcreativeName'] = isset($data['adcreativeName']) ? $data['adcreativeName'] : null;
        $this->container['campaignId'] = isset($data['campaignId']) ? $data['campaignId'] : null;
        $this->container['pageType'] = isset($data['pageType']) ? $data['pageType'] : null;
        $this->container['pageSpec'] = isset($data['pageSpec']) ? $data['pageSpec'] : null;
        $this->container['siteSet'] = isset($data['siteSet']) ? $data['siteSet'] : null;
        $this->container['promotedObjectType'] = isset($data['promotedObjectType']) ? $data['promotedObjectType'] : null;
        $this->container['promotedObjectId'] = isset($data['promotedObjectId']) ? $data['promotedObjectId'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['lastModifiedTime'] = isset($data['lastModifiedTime']) ? $data['lastModifiedTime'] : null;
        $this->container['playablePageMaterialId'] = isset($data['playablePageMaterialId']) ? $data['playablePageMaterialId'] : null;
        $this->container['videoEndPage'] = isset($data['videoEndPage']) ? $data['videoEndPage'] : null;
        $this->container['adcreativeTemplateId'] = isset($data['adcreativeTemplateId']) ? $data['adcreativeTemplateId'] : null;
        $this->container['adcreativeElements'] = isset($data['adcreativeElements']) ? $data['adcreativeElements'] : null;
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
     * Gets adcreativeId
     *
     * @return int
     */
    public function getAdcreativeId()
    {
        return $this->container['adcreativeId'];
    }

    /**
     * Sets adcreativeId
     *
     * @param int $adcreativeId adcreativeId
     *
     * @return $this
     */
    public function setAdcreativeId($adcreativeId)
    {
        $this->container['adcreativeId'] = $adcreativeId;

        return $this;
    }

    /**
     * Gets adcreativeName
     *
     * @return string
     */
    public function getAdcreativeName()
    {
        return $this->container['adcreativeName'];
    }

    /**
     * Sets adcreativeName
     *
     * @param string $adcreativeName adcreativeName
     *
     * @return $this
     */
    public function setAdcreativeName($adcreativeName)
    {
        $this->container['adcreativeName'] = $adcreativeName;

        return $this;
    }

    /**
     * Gets campaignId
     *
     * @return int
     */
    public function getCampaignId()
    {
        return $this->container['campaignId'];
    }

    /**
     * Sets campaignId
     *
     * @param int $campaignId campaignId
     *
     * @return $this
     */
    public function setCampaignId($campaignId)
    {
        $this->container['campaignId'] = $campaignId;

        return $this;
    }

    /**
     * Gets pageType
     *
     * @return \TencentAds\Model\PageTypeRead
     */
    public function getPageType()
    {
        return $this->container['pageType'];
    }

    /**
     * Sets pageType
     *
     * @param \TencentAds\Model\PageTypeRead $pageType pageType
     *
     * @return $this
     */
    public function setPageType($pageType)
    {
        $this->container['pageType'] = $pageType;

        return $this;
    }

    /**
     * Gets pageSpec
     *
     * @return \TencentAds\Model\PageSpec
     */
    public function getPageSpec()
    {
        return $this->container['pageSpec'];
    }

    /**
     * Sets pageSpec
     *
     * @param \TencentAds\Model\PageSpec $pageSpec pageSpec
     *
     * @return $this
     */
    public function setPageSpec($pageSpec)
    {
        $this->container['pageSpec'] = $pageSpec;

        return $this;
    }

    /**
     * Gets siteSet
     *
     * @return string[]
     */
    public function getSiteSet()
    {
        return $this->container['siteSet'];
    }

    /**
     * Sets siteSet
     *
     * @param string[] $siteSet siteSet
     *
     * @return $this
     */
    public function setSiteSet($siteSet)
    {
        $this->container['siteSet'] = $siteSet;

        return $this;
    }

    /**
     * Gets promotedObjectType
     *
     * @return \TencentAds\Model\PromotedObjectType
     */
    public function getPromotedObjectType()
    {
        return $this->container['promotedObjectType'];
    }

    /**
     * Sets promotedObjectType
     *
     * @param \TencentAds\Model\PromotedObjectType $promotedObjectType promotedObjectType
     *
     * @return $this
     */
    public function setPromotedObjectType($promotedObjectType)
    {
        $this->container['promotedObjectType'] = $promotedObjectType;

        return $this;
    }

    /**
     * Gets promotedObjectId
     *
     * @return string
     */
    public function getPromotedObjectId()
    {
        return $this->container['promotedObjectId'];
    }

    /**
     * Sets promotedObjectId
     *
     * @param string $promotedObjectId promotedObjectId
     *
     * @return $this
     */
    public function setPromotedObjectId($promotedObjectId)
    {
        $this->container['promotedObjectId'] = $promotedObjectId;

        return $this;
    }

    /**
     * Gets createdTime
     *
     * @return int
     */
    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    /**
     * Sets createdTime
     *
     * @param int $createdTime createdTime
     *
     * @return $this
     */
    public function setCreatedTime($createdTime)
    {
        $this->container['createdTime'] = $createdTime;

        return $this;
    }

    /**
     * Gets lastModifiedTime
     *
     * @return int
     */
    public function getLastModifiedTime()
    {
        return $this->container['lastModifiedTime'];
    }

    /**
     * Sets lastModifiedTime
     *
     * @param int $lastModifiedTime lastModifiedTime
     *
     * @return $this
     */
    public function setLastModifiedTime($lastModifiedTime)
    {
        $this->container['lastModifiedTime'] = $lastModifiedTime;

        return $this;
    }

    /**
     * Gets playablePageMaterialId
     *
     * @return string
     */
    public function getPlayablePageMaterialId()
    {
        return $this->container['playablePageMaterialId'];
    }

    /**
     * Sets playablePageMaterialId
     *
     * @param string $playablePageMaterialId playablePageMaterialId
     *
     * @return $this
     */
    public function setPlayablePageMaterialId($playablePageMaterialId)
    {
        $this->container['playablePageMaterialId'] = $playablePageMaterialId;

        return $this;
    }

    /**
     * Gets videoEndPage
     *
     * @return \TencentAds\Model\VideoEndPageSpec
     */
    public function getVideoEndPage()
    {
        return $this->container['videoEndPage'];
    }

    /**
     * Sets videoEndPage
     *
     * @param \TencentAds\Model\VideoEndPageSpec $videoEndPage videoEndPage
     *
     * @return $this
     */
    public function setVideoEndPage($videoEndPage)
    {
        $this->container['videoEndPage'] = $videoEndPage;

        return $this;
    }

    /**
     * Gets adcreativeTemplateId
     *
     * @return int
     */
    public function getAdcreativeTemplateId()
    {
        return $this->container['adcreativeTemplateId'];
    }

    /**
     * Sets adcreativeTemplateId
     *
     * @param int $adcreativeTemplateId adcreativeTemplateId
     *
     * @return $this
     */
    public function setAdcreativeTemplateId($adcreativeTemplateId)
    {
        $this->container['adcreativeTemplateId'] = $adcreativeTemplateId;

        return $this;
    }

    /**
     * Gets adcreativeElements
     *
     * @return \TencentAds\Model\AdcreativeCreativeElementsRead
     */
    public function getAdcreativeElements()
    {
        return $this->container['adcreativeElements'];
    }

    /**
     * Sets adcreativeElements
     *
     * @param \TencentAds\Model\AdcreativeCreativeElementsRead $adcreativeElements adcreativeElements
     *
     * @return $this
     */
    public function setAdcreativeElements($adcreativeElements)
    {
        $this->container['adcreativeElements'] = $adcreativeElements;

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


