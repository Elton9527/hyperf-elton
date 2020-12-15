<?php
/**
 * AdcreativeTemplateDetailGetAdcreativeTemplateListStruct
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
 * AdcreativeTemplateDetailGetAdcreativeTemplateListStruct Class Doc Comment
 *
 * @category Class
 * @description 创意规格和投放权限数据结构
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AdcreativeTemplateDetailGetAdcreativeTemplateListStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AdcreativeTemplateDetailGetAdcreativeTemplateListStruct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'adcreativeTemplateId' => 'int',
        'adcreativeTemplateName' => 'string',
        'adcreativeTemplateDescription' => 'string',
        'adcreativeTemplateSize' => 'string',
        'adcreativeTemplateStyle' => 'string',
        'adcreativeSampleImageList' => '\TencentAds\Model\AdcreativeSampleImage[]',
        'adAttributes' => '\TencentAds\Model\AdcreativeElement[]',
        'adcreativeAttributes' => '\TencentAds\Model\AdcreativeElement[]',
        'adcreativeElements' => '\TencentAds\Model\AdcreativeElement[]',
        'supportBillingSpecList' => '\TencentAds\Model\SupportBillingSpec[]',
        'supportPageType' => 'string[]',
        'unsupportBillingSpecList' => '\TencentAds\Model\UnsupportBillingSpec[]',
        'unsupportAdAttributesSpecList' => '\TencentAds\Model\UnsupportSpec[]',
        'unsupportAdcreativeAttributesSpecList' => '\TencentAds\Model\UnsupportSpec[]',
        'unsupportSitesetDetailSpec' => '\TencentAds\Model\UnsupportSite[]',
        'supportDynamicAbilitySpecList' => '\TencentAds\Model\SupportDynamicAbilitySpecList',
        'supportBidModeList' => 'string[]',
        'unsupportBidModeList' => '\TencentAds\Model\UnsupportBidModeStruct[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'adcreativeTemplateId' => 'int64',
        'adcreativeTemplateName' => null,
        'adcreativeTemplateDescription' => null,
        'adcreativeTemplateSize' => null,
        'adcreativeTemplateStyle' => null,
        'adcreativeSampleImageList' => null,
        'adAttributes' => null,
        'adcreativeAttributes' => null,
        'adcreativeElements' => null,
        'supportBillingSpecList' => null,
        'supportPageType' => null,
        'unsupportBillingSpecList' => null,
        'unsupportAdAttributesSpecList' => null,
        'unsupportAdcreativeAttributesSpecList' => null,
        'unsupportSitesetDetailSpec' => null,
        'supportDynamicAbilitySpecList' => null,
        'supportBidModeList' => null,
        'unsupportBidModeList' => null
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
        'adcreativeTemplateId' => 'adcreative_template_id',
        'adcreativeTemplateName' => 'adcreative_template_name',
        'adcreativeTemplateDescription' => 'adcreative_template_description',
        'adcreativeTemplateSize' => 'adcreative_template_size',
        'adcreativeTemplateStyle' => 'adcreative_template_style',
        'adcreativeSampleImageList' => 'adcreative_sample_image_list',
        'adAttributes' => 'ad_attributes',
        'adcreativeAttributes' => 'adcreative_attributes',
        'adcreativeElements' => 'adcreative_elements',
        'supportBillingSpecList' => 'support_billing_spec_list',
        'supportPageType' => 'support_page_type',
        'unsupportBillingSpecList' => 'unsupport_billing_spec_list',
        'unsupportAdAttributesSpecList' => 'unsupport_ad_attributes_spec_list',
        'unsupportAdcreativeAttributesSpecList' => 'unsupport_adcreative_attributes_spec_list',
        'unsupportSitesetDetailSpec' => 'unsupport_siteset_detail_spec',
        'supportDynamicAbilitySpecList' => 'support_dynamic_ability_spec_list',
        'supportBidModeList' => 'support_bid_mode_list',
        'unsupportBidModeList' => 'unsupport_bid_mode_list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'adcreativeTemplateId' => 'setAdcreativeTemplateId',
        'adcreativeTemplateName' => 'setAdcreativeTemplateName',
        'adcreativeTemplateDescription' => 'setAdcreativeTemplateDescription',
        'adcreativeTemplateSize' => 'setAdcreativeTemplateSize',
        'adcreativeTemplateStyle' => 'setAdcreativeTemplateStyle',
        'adcreativeSampleImageList' => 'setAdcreativeSampleImageList',
        'adAttributes' => 'setAdAttributes',
        'adcreativeAttributes' => 'setAdcreativeAttributes',
        'adcreativeElements' => 'setAdcreativeElements',
        'supportBillingSpecList' => 'setSupportBillingSpecList',
        'supportPageType' => 'setSupportPageType',
        'unsupportBillingSpecList' => 'setUnsupportBillingSpecList',
        'unsupportAdAttributesSpecList' => 'setUnsupportAdAttributesSpecList',
        'unsupportAdcreativeAttributesSpecList' => 'setUnsupportAdcreativeAttributesSpecList',
        'unsupportSitesetDetailSpec' => 'setUnsupportSitesetDetailSpec',
        'supportDynamicAbilitySpecList' => 'setSupportDynamicAbilitySpecList',
        'supportBidModeList' => 'setSupportBidModeList',
        'unsupportBidModeList' => 'setUnsupportBidModeList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'adcreativeTemplateId' => 'getAdcreativeTemplateId',
        'adcreativeTemplateName' => 'getAdcreativeTemplateName',
        'adcreativeTemplateDescription' => 'getAdcreativeTemplateDescription',
        'adcreativeTemplateSize' => 'getAdcreativeTemplateSize',
        'adcreativeTemplateStyle' => 'getAdcreativeTemplateStyle',
        'adcreativeSampleImageList' => 'getAdcreativeSampleImageList',
        'adAttributes' => 'getAdAttributes',
        'adcreativeAttributes' => 'getAdcreativeAttributes',
        'adcreativeElements' => 'getAdcreativeElements',
        'supportBillingSpecList' => 'getSupportBillingSpecList',
        'supportPageType' => 'getSupportPageType',
        'unsupportBillingSpecList' => 'getUnsupportBillingSpecList',
        'unsupportAdAttributesSpecList' => 'getUnsupportAdAttributesSpecList',
        'unsupportAdcreativeAttributesSpecList' => 'getUnsupportAdcreativeAttributesSpecList',
        'unsupportSitesetDetailSpec' => 'getUnsupportSitesetDetailSpec',
        'supportDynamicAbilitySpecList' => 'getSupportDynamicAbilitySpecList',
        'supportBidModeList' => 'getSupportBidModeList',
        'unsupportBidModeList' => 'getUnsupportBidModeList'
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
        $this->container['adcreativeTemplateId'] = isset($data['adcreativeTemplateId']) ? $data['adcreativeTemplateId'] : null;
        $this->container['adcreativeTemplateName'] = isset($data['adcreativeTemplateName']) ? $data['adcreativeTemplateName'] : null;
        $this->container['adcreativeTemplateDescription'] = isset($data['adcreativeTemplateDescription']) ? $data['adcreativeTemplateDescription'] : null;
        $this->container['adcreativeTemplateSize'] = isset($data['adcreativeTemplateSize']) ? $data['adcreativeTemplateSize'] : null;
        $this->container['adcreativeTemplateStyle'] = isset($data['adcreativeTemplateStyle']) ? $data['adcreativeTemplateStyle'] : null;
        $this->container['adcreativeSampleImageList'] = isset($data['adcreativeSampleImageList']) ? $data['adcreativeSampleImageList'] : null;
        $this->container['adAttributes'] = isset($data['adAttributes']) ? $data['adAttributes'] : null;
        $this->container['adcreativeAttributes'] = isset($data['adcreativeAttributes']) ? $data['adcreativeAttributes'] : null;
        $this->container['adcreativeElements'] = isset($data['adcreativeElements']) ? $data['adcreativeElements'] : null;
        $this->container['supportBillingSpecList'] = isset($data['supportBillingSpecList']) ? $data['supportBillingSpecList'] : null;
        $this->container['supportPageType'] = isset($data['supportPageType']) ? $data['supportPageType'] : null;
        $this->container['unsupportBillingSpecList'] = isset($data['unsupportBillingSpecList']) ? $data['unsupportBillingSpecList'] : null;
        $this->container['unsupportAdAttributesSpecList'] = isset($data['unsupportAdAttributesSpecList']) ? $data['unsupportAdAttributesSpecList'] : null;
        $this->container['unsupportAdcreativeAttributesSpecList'] = isset($data['unsupportAdcreativeAttributesSpecList']) ? $data['unsupportAdcreativeAttributesSpecList'] : null;
        $this->container['unsupportSitesetDetailSpec'] = isset($data['unsupportSitesetDetailSpec']) ? $data['unsupportSitesetDetailSpec'] : null;
        $this->container['supportDynamicAbilitySpecList'] = isset($data['supportDynamicAbilitySpecList']) ? $data['supportDynamicAbilitySpecList'] : null;
        $this->container['supportBidModeList'] = isset($data['supportBidModeList']) ? $data['supportBidModeList'] : null;
        $this->container['unsupportBidModeList'] = isset($data['unsupportBidModeList']) ? $data['unsupportBidModeList'] : null;
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
     * Gets adcreativeTemplateName
     *
     * @return string
     */
    public function getAdcreativeTemplateName()
    {
        return $this->container['adcreativeTemplateName'];
    }

    /**
     * Sets adcreativeTemplateName
     *
     * @param string $adcreativeTemplateName adcreativeTemplateName
     *
     * @return $this
     */
    public function setAdcreativeTemplateName($adcreativeTemplateName)
    {
        $this->container['adcreativeTemplateName'] = $adcreativeTemplateName;

        return $this;
    }

    /**
     * Gets adcreativeTemplateDescription
     *
     * @return string
     */
    public function getAdcreativeTemplateDescription()
    {
        return $this->container['adcreativeTemplateDescription'];
    }

    /**
     * Sets adcreativeTemplateDescription
     *
     * @param string $adcreativeTemplateDescription adcreativeTemplateDescription
     *
     * @return $this
     */
    public function setAdcreativeTemplateDescription($adcreativeTemplateDescription)
    {
        $this->container['adcreativeTemplateDescription'] = $adcreativeTemplateDescription;

        return $this;
    }

    /**
     * Gets adcreativeTemplateSize
     *
     * @return string
     */
    public function getAdcreativeTemplateSize()
    {
        return $this->container['adcreativeTemplateSize'];
    }

    /**
     * Sets adcreativeTemplateSize
     *
     * @param string $adcreativeTemplateSize adcreativeTemplateSize
     *
     * @return $this
     */
    public function setAdcreativeTemplateSize($adcreativeTemplateSize)
    {
        $this->container['adcreativeTemplateSize'] = $adcreativeTemplateSize;

        return $this;
    }

    /**
     * Gets adcreativeTemplateStyle
     *
     * @return string
     */
    public function getAdcreativeTemplateStyle()
    {
        return $this->container['adcreativeTemplateStyle'];
    }

    /**
     * Sets adcreativeTemplateStyle
     *
     * @param string $adcreativeTemplateStyle adcreativeTemplateStyle
     *
     * @return $this
     */
    public function setAdcreativeTemplateStyle($adcreativeTemplateStyle)
    {
        $this->container['adcreativeTemplateStyle'] = $adcreativeTemplateStyle;

        return $this;
    }

    /**
     * Gets adcreativeSampleImageList
     *
     * @return \TencentAds\Model\AdcreativeSampleImage[]
     */
    public function getAdcreativeSampleImageList()
    {
        return $this->container['adcreativeSampleImageList'];
    }

    /**
     * Sets adcreativeSampleImageList
     *
     * @param \TencentAds\Model\AdcreativeSampleImage[] $adcreativeSampleImageList adcreativeSampleImageList
     *
     * @return $this
     */
    public function setAdcreativeSampleImageList($adcreativeSampleImageList)
    {
        $this->container['adcreativeSampleImageList'] = $adcreativeSampleImageList;

        return $this;
    }

    /**
     * Gets adAttributes
     *
     * @return \TencentAds\Model\AdcreativeElement[]
     */
    public function getAdAttributes()
    {
        return $this->container['adAttributes'];
    }

    /**
     * Sets adAttributes
     *
     * @param \TencentAds\Model\AdcreativeElement[] $adAttributes adAttributes
     *
     * @return $this
     */
    public function setAdAttributes($adAttributes)
    {
        $this->container['adAttributes'] = $adAttributes;

        return $this;
    }

    /**
     * Gets adcreativeAttributes
     *
     * @return \TencentAds\Model\AdcreativeElement[]
     */
    public function getAdcreativeAttributes()
    {
        return $this->container['adcreativeAttributes'];
    }

    /**
     * Sets adcreativeAttributes
     *
     * @param \TencentAds\Model\AdcreativeElement[] $adcreativeAttributes adcreativeAttributes
     *
     * @return $this
     */
    public function setAdcreativeAttributes($adcreativeAttributes)
    {
        $this->container['adcreativeAttributes'] = $adcreativeAttributes;

        return $this;
    }

    /**
     * Gets adcreativeElements
     *
     * @return \TencentAds\Model\AdcreativeElement[]
     */
    public function getAdcreativeElements()
    {
        return $this->container['adcreativeElements'];
    }

    /**
     * Sets adcreativeElements
     *
     * @param \TencentAds\Model\AdcreativeElement[] $adcreativeElements adcreativeElements
     *
     * @return $this
     */
    public function setAdcreativeElements($adcreativeElements)
    {
        $this->container['adcreativeElements'] = $adcreativeElements;

        return $this;
    }

    /**
     * Gets supportBillingSpecList
     *
     * @return \TencentAds\Model\SupportBillingSpec[]
     */
    public function getSupportBillingSpecList()
    {
        return $this->container['supportBillingSpecList'];
    }

    /**
     * Sets supportBillingSpecList
     *
     * @param \TencentAds\Model\SupportBillingSpec[] $supportBillingSpecList supportBillingSpecList
     *
     * @return $this
     */
    public function setSupportBillingSpecList($supportBillingSpecList)
    {
        $this->container['supportBillingSpecList'] = $supportBillingSpecList;

        return $this;
    }

    /**
     * Gets supportPageType
     *
     * @return string[]
     */
    public function getSupportPageType()
    {
        return $this->container['supportPageType'];
    }

    /**
     * Sets supportPageType
     *
     * @param string[] $supportPageType supportPageType
     *
     * @return $this
     */
    public function setSupportPageType($supportPageType)
    {
        $this->container['supportPageType'] = $supportPageType;

        return $this;
    }

    /**
     * Gets unsupportBillingSpecList
     *
     * @return \TencentAds\Model\UnsupportBillingSpec[]
     */
    public function getUnsupportBillingSpecList()
    {
        return $this->container['unsupportBillingSpecList'];
    }

    /**
     * Sets unsupportBillingSpecList
     *
     * @param \TencentAds\Model\UnsupportBillingSpec[] $unsupportBillingSpecList unsupportBillingSpecList
     *
     * @return $this
     */
    public function setUnsupportBillingSpecList($unsupportBillingSpecList)
    {
        $this->container['unsupportBillingSpecList'] = $unsupportBillingSpecList;

        return $this;
    }

    /**
     * Gets unsupportAdAttributesSpecList
     *
     * @return \TencentAds\Model\UnsupportSpec[]
     */
    public function getUnsupportAdAttributesSpecList()
    {
        return $this->container['unsupportAdAttributesSpecList'];
    }

    /**
     * Sets unsupportAdAttributesSpecList
     *
     * @param \TencentAds\Model\UnsupportSpec[] $unsupportAdAttributesSpecList unsupportAdAttributesSpecList
     *
     * @return $this
     */
    public function setUnsupportAdAttributesSpecList($unsupportAdAttributesSpecList)
    {
        $this->container['unsupportAdAttributesSpecList'] = $unsupportAdAttributesSpecList;

        return $this;
    }

    /**
     * Gets unsupportAdcreativeAttributesSpecList
     *
     * @return \TencentAds\Model\UnsupportSpec[]
     */
    public function getUnsupportAdcreativeAttributesSpecList()
    {
        return $this->container['unsupportAdcreativeAttributesSpecList'];
    }

    /**
     * Sets unsupportAdcreativeAttributesSpecList
     *
     * @param \TencentAds\Model\UnsupportSpec[] $unsupportAdcreativeAttributesSpecList unsupportAdcreativeAttributesSpecList
     *
     * @return $this
     */
    public function setUnsupportAdcreativeAttributesSpecList($unsupportAdcreativeAttributesSpecList)
    {
        $this->container['unsupportAdcreativeAttributesSpecList'] = $unsupportAdcreativeAttributesSpecList;

        return $this;
    }

    /**
     * Gets unsupportSitesetDetailSpec
     *
     * @return \TencentAds\Model\UnsupportSite[]
     */
    public function getUnsupportSitesetDetailSpec()
    {
        return $this->container['unsupportSitesetDetailSpec'];
    }

    /**
     * Sets unsupportSitesetDetailSpec
     *
     * @param \TencentAds\Model\UnsupportSite[] $unsupportSitesetDetailSpec unsupportSitesetDetailSpec
     *
     * @return $this
     */
    public function setUnsupportSitesetDetailSpec($unsupportSitesetDetailSpec)
    {
        $this->container['unsupportSitesetDetailSpec'] = $unsupportSitesetDetailSpec;

        return $this;
    }

    /**
     * Gets supportDynamicAbilitySpecList
     *
     * @return \TencentAds\Model\SupportDynamicAbilitySpecList
     */
    public function getSupportDynamicAbilitySpecList()
    {
        return $this->container['supportDynamicAbilitySpecList'];
    }

    /**
     * Sets supportDynamicAbilitySpecList
     *
     * @param \TencentAds\Model\SupportDynamicAbilitySpecList $supportDynamicAbilitySpecList supportDynamicAbilitySpecList
     *
     * @return $this
     */
    public function setSupportDynamicAbilitySpecList($supportDynamicAbilitySpecList)
    {
        $this->container['supportDynamicAbilitySpecList'] = $supportDynamicAbilitySpecList;

        return $this;
    }

    /**
     * Gets supportBidModeList
     *
     * @return string[]
     */
    public function getSupportBidModeList()
    {
        return $this->container['supportBidModeList'];
    }

    /**
     * Sets supportBidModeList
     *
     * @param string[] $supportBidModeList supportBidModeList
     *
     * @return $this
     */
    public function setSupportBidModeList($supportBidModeList)
    {
        $this->container['supportBidModeList'] = $supportBidModeList;

        return $this;
    }

    /**
     * Gets unsupportBidModeList
     *
     * @return \TencentAds\Model\UnsupportBidModeStruct[]
     */
    public function getUnsupportBidModeList()
    {
        return $this->container['unsupportBidModeList'];
    }

    /**
     * Sets unsupportBidModeList
     *
     * @param \TencentAds\Model\UnsupportBidModeStruct[] $unsupportBidModeList unsupportBidModeList
     *
     * @return $this
     */
    public function setUnsupportBidModeList($unsupportBidModeList)
    {
        $this->container['unsupportBidModeList'] = $unsupportBidModeList;

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


