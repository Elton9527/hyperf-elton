<?php
/**
 * AdcreativesAddRequest
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
 * AdcreativesAddRequest Class Doc Comment
 *
 * @category Class
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AdcreativesAddRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AdcreativesAddRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'campaignId' => 'int',
        'adcreativeName' => 'string',
        'promotedObjectType' => '\TencentAds\Model\PromotedObjectType',
        'pageType' => '\TencentAds\Model\DestinationType',
        'automaticSiteEnabled' => 'bool',
        'siteSet' => 'string[]',
        'pageSpec' => '\TencentAds\Model\PageSpec',
        'linkPageType' => '\TencentAds\Model\LinkPageType',
        'linkNameType' => '\TencentAds\Model\LinkNameTypeMP',
        'linkPageSpec' => '\TencentAds\Model\LinkPageSpec',
        'conversionDataType' => '\TencentAds\Model\ConversionDataType',
        'conversionTargetType' => '\TencentAds\Model\ConversionTargetType',
        'qqMiniGameTrackingQueryString' => 'string',
        'deepLinkUrl' => 'string',
        'androidDeepLinkAppId' => 'string',
        'iosDeepLinkAppId' => 'string',
        'universalLinkUrl' => 'string',
        'promotedObjectId' => 'string',
        'profileId' => 'int',
        'shareContentSpec' => '\TencentAds\Model\ShareContentSpec',
        'dynamicAdcreativeSpec' => '\TencentAds\Model\DynamicAdcreativeSpec',
        'componentId' => 'int',
        'category' => 'int[]',
        'label' => 'string[]',
        'unionMarketSwitch' => 'bool',
        'playablePageMaterialId' => 'string',
        'videoEndPage' => '\TencentAds\Model\VideoEndPageSpec',
        'feedsVideoCommentSwitch' => 'bool',
        'webviewUrl' => 'string',
        'simpleCanvasSubType' => '\TencentAds\Model\SimpleCanvasSubType',
        'floatingZone' => '\TencentAds\Model\FloatingZone',
        'marketingPendantImageId' => 'string',
        'countdownSwitch' => 'bool',
        'pageTrackUrl' => 'string',
        'accountId' => 'int',
        'adcreativeTemplateId' => 'int',
        'adcreativeElements' => '\TencentAds\Model\AdcreativeCreativeElementsMp'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'campaignId' => 'int64',
        'adcreativeName' => null,
        'promotedObjectType' => null,
        'pageType' => null,
        'automaticSiteEnabled' => null,
        'siteSet' => null,
        'pageSpec' => null,
        'linkPageType' => null,
        'linkNameType' => null,
        'linkPageSpec' => null,
        'conversionDataType' => null,
        'conversionTargetType' => null,
        'qqMiniGameTrackingQueryString' => null,
        'deepLinkUrl' => null,
        'androidDeepLinkAppId' => null,
        'iosDeepLinkAppId' => null,
        'universalLinkUrl' => null,
        'promotedObjectId' => null,
        'profileId' => 'int64',
        'shareContentSpec' => null,
        'dynamicAdcreativeSpec' => null,
        'componentId' => 'int64',
        'category' => 'int64',
        'label' => null,
        'unionMarketSwitch' => null,
        'playablePageMaterialId' => null,
        'videoEndPage' => null,
        'feedsVideoCommentSwitch' => null,
        'webviewUrl' => null,
        'simpleCanvasSubType' => null,
        'floatingZone' => null,
        'marketingPendantImageId' => null,
        'countdownSwitch' => null,
        'pageTrackUrl' => null,
        'accountId' => 'int64',
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
        'campaignId' => 'campaign_id',
        'adcreativeName' => 'adcreative_name',
        'promotedObjectType' => 'promoted_object_type',
        'pageType' => 'page_type',
        'automaticSiteEnabled' => 'automatic_site_enabled',
        'siteSet' => 'site_set',
        'pageSpec' => 'page_spec',
        'linkPageType' => 'link_page_type',
        'linkNameType' => 'link_name_type',
        'linkPageSpec' => 'link_page_spec',
        'conversionDataType' => 'conversion_data_type',
        'conversionTargetType' => 'conversion_target_type',
        'qqMiniGameTrackingQueryString' => 'qq_mini_game_tracking_query_string',
        'deepLinkUrl' => 'deep_link_url',
        'androidDeepLinkAppId' => 'android_deep_link_app_id',
        'iosDeepLinkAppId' => 'ios_deep_link_app_id',
        'universalLinkUrl' => 'universal_link_url',
        'promotedObjectId' => 'promoted_object_id',
        'profileId' => 'profile_id',
        'shareContentSpec' => 'share_content_spec',
        'dynamicAdcreativeSpec' => 'dynamic_adcreative_spec',
        'componentId' => 'component_id',
        'category' => 'category',
        'label' => 'label',
        'unionMarketSwitch' => 'union_market_switch',
        'playablePageMaterialId' => 'playable_page_material_id',
        'videoEndPage' => 'video_end_page',
        'feedsVideoCommentSwitch' => 'feeds_video_comment_switch',
        'webviewUrl' => 'webview_url',
        'simpleCanvasSubType' => 'simple_canvas_sub_type',
        'floatingZone' => 'floating_zone',
        'marketingPendantImageId' => 'marketing_pendant_image_id',
        'countdownSwitch' => 'countdown_switch',
        'pageTrackUrl' => 'page_track_url',
        'accountId' => 'account_id',
        'adcreativeTemplateId' => 'adcreative_template_id',
        'adcreativeElements' => 'adcreative_elements'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'campaignId' => 'setCampaignId',
        'adcreativeName' => 'setAdcreativeName',
        'promotedObjectType' => 'setPromotedObjectType',
        'pageType' => 'setPageType',
        'automaticSiteEnabled' => 'setAutomaticSiteEnabled',
        'siteSet' => 'setSiteSet',
        'pageSpec' => 'setPageSpec',
        'linkPageType' => 'setLinkPageType',
        'linkNameType' => 'setLinkNameType',
        'linkPageSpec' => 'setLinkPageSpec',
        'conversionDataType' => 'setConversionDataType',
        'conversionTargetType' => 'setConversionTargetType',
        'qqMiniGameTrackingQueryString' => 'setQqMiniGameTrackingQueryString',
        'deepLinkUrl' => 'setDeepLinkUrl',
        'androidDeepLinkAppId' => 'setAndroidDeepLinkAppId',
        'iosDeepLinkAppId' => 'setIosDeepLinkAppId',
        'universalLinkUrl' => 'setUniversalLinkUrl',
        'promotedObjectId' => 'setPromotedObjectId',
        'profileId' => 'setProfileId',
        'shareContentSpec' => 'setShareContentSpec',
        'dynamicAdcreativeSpec' => 'setDynamicAdcreativeSpec',
        'componentId' => 'setComponentId',
        'category' => 'setCategory',
        'label' => 'setLabel',
        'unionMarketSwitch' => 'setUnionMarketSwitch',
        'playablePageMaterialId' => 'setPlayablePageMaterialId',
        'videoEndPage' => 'setVideoEndPage',
        'feedsVideoCommentSwitch' => 'setFeedsVideoCommentSwitch',
        'webviewUrl' => 'setWebviewUrl',
        'simpleCanvasSubType' => 'setSimpleCanvasSubType',
        'floatingZone' => 'setFloatingZone',
        'marketingPendantImageId' => 'setMarketingPendantImageId',
        'countdownSwitch' => 'setCountdownSwitch',
        'pageTrackUrl' => 'setPageTrackUrl',
        'accountId' => 'setAccountId',
        'adcreativeTemplateId' => 'setAdcreativeTemplateId',
        'adcreativeElements' => 'setAdcreativeElements'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'campaignId' => 'getCampaignId',
        'adcreativeName' => 'getAdcreativeName',
        'promotedObjectType' => 'getPromotedObjectType',
        'pageType' => 'getPageType',
        'automaticSiteEnabled' => 'getAutomaticSiteEnabled',
        'siteSet' => 'getSiteSet',
        'pageSpec' => 'getPageSpec',
        'linkPageType' => 'getLinkPageType',
        'linkNameType' => 'getLinkNameType',
        'linkPageSpec' => 'getLinkPageSpec',
        'conversionDataType' => 'getConversionDataType',
        'conversionTargetType' => 'getConversionTargetType',
        'qqMiniGameTrackingQueryString' => 'getQqMiniGameTrackingQueryString',
        'deepLinkUrl' => 'getDeepLinkUrl',
        'androidDeepLinkAppId' => 'getAndroidDeepLinkAppId',
        'iosDeepLinkAppId' => 'getIosDeepLinkAppId',
        'universalLinkUrl' => 'getUniversalLinkUrl',
        'promotedObjectId' => 'getPromotedObjectId',
        'profileId' => 'getProfileId',
        'shareContentSpec' => 'getShareContentSpec',
        'dynamicAdcreativeSpec' => 'getDynamicAdcreativeSpec',
        'componentId' => 'getComponentId',
        'category' => 'getCategory',
        'label' => 'getLabel',
        'unionMarketSwitch' => 'getUnionMarketSwitch',
        'playablePageMaterialId' => 'getPlayablePageMaterialId',
        'videoEndPage' => 'getVideoEndPage',
        'feedsVideoCommentSwitch' => 'getFeedsVideoCommentSwitch',
        'webviewUrl' => 'getWebviewUrl',
        'simpleCanvasSubType' => 'getSimpleCanvasSubType',
        'floatingZone' => 'getFloatingZone',
        'marketingPendantImageId' => 'getMarketingPendantImageId',
        'countdownSwitch' => 'getCountdownSwitch',
        'pageTrackUrl' => 'getPageTrackUrl',
        'accountId' => 'getAccountId',
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
        $this->container['campaignId'] = isset($data['campaignId']) ? $data['campaignId'] : null;
        $this->container['adcreativeName'] = isset($data['adcreativeName']) ? $data['adcreativeName'] : null;
        $this->container['promotedObjectType'] = isset($data['promotedObjectType']) ? $data['promotedObjectType'] : null;
        $this->container['pageType'] = isset($data['pageType']) ? $data['pageType'] : null;
        $this->container['automaticSiteEnabled'] = isset($data['automaticSiteEnabled']) ? $data['automaticSiteEnabled'] : null;
        $this->container['siteSet'] = isset($data['siteSet']) ? $data['siteSet'] : null;
        $this->container['pageSpec'] = isset($data['pageSpec']) ? $data['pageSpec'] : null;
        $this->container['linkPageType'] = isset($data['linkPageType']) ? $data['linkPageType'] : null;
        $this->container['linkNameType'] = isset($data['linkNameType']) ? $data['linkNameType'] : null;
        $this->container['linkPageSpec'] = isset($data['linkPageSpec']) ? $data['linkPageSpec'] : null;
        $this->container['conversionDataType'] = isset($data['conversionDataType']) ? $data['conversionDataType'] : null;
        $this->container['conversionTargetType'] = isset($data['conversionTargetType']) ? $data['conversionTargetType'] : null;
        $this->container['qqMiniGameTrackingQueryString'] = isset($data['qqMiniGameTrackingQueryString']) ? $data['qqMiniGameTrackingQueryString'] : null;
        $this->container['deepLinkUrl'] = isset($data['deepLinkUrl']) ? $data['deepLinkUrl'] : null;
        $this->container['androidDeepLinkAppId'] = isset($data['androidDeepLinkAppId']) ? $data['androidDeepLinkAppId'] : null;
        $this->container['iosDeepLinkAppId'] = isset($data['iosDeepLinkAppId']) ? $data['iosDeepLinkAppId'] : null;
        $this->container['universalLinkUrl'] = isset($data['universalLinkUrl']) ? $data['universalLinkUrl'] : null;
        $this->container['promotedObjectId'] = isset($data['promotedObjectId']) ? $data['promotedObjectId'] : null;
        $this->container['profileId'] = isset($data['profileId']) ? $data['profileId'] : null;
        $this->container['shareContentSpec'] = isset($data['shareContentSpec']) ? $data['shareContentSpec'] : null;
        $this->container['dynamicAdcreativeSpec'] = isset($data['dynamicAdcreativeSpec']) ? $data['dynamicAdcreativeSpec'] : null;
        $this->container['componentId'] = isset($data['componentId']) ? $data['componentId'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['unionMarketSwitch'] = isset($data['unionMarketSwitch']) ? $data['unionMarketSwitch'] : null;
        $this->container['playablePageMaterialId'] = isset($data['playablePageMaterialId']) ? $data['playablePageMaterialId'] : null;
        $this->container['videoEndPage'] = isset($data['videoEndPage']) ? $data['videoEndPage'] : null;
        $this->container['feedsVideoCommentSwitch'] = isset($data['feedsVideoCommentSwitch']) ? $data['feedsVideoCommentSwitch'] : null;
        $this->container['webviewUrl'] = isset($data['webviewUrl']) ? $data['webviewUrl'] : null;
        $this->container['simpleCanvasSubType'] = isset($data['simpleCanvasSubType']) ? $data['simpleCanvasSubType'] : null;
        $this->container['floatingZone'] = isset($data['floatingZone']) ? $data['floatingZone'] : null;
        $this->container['marketingPendantImageId'] = isset($data['marketingPendantImageId']) ? $data['marketingPendantImageId'] : null;
        $this->container['countdownSwitch'] = isset($data['countdownSwitch']) ? $data['countdownSwitch'] : null;
        $this->container['pageTrackUrl'] = isset($data['pageTrackUrl']) ? $data['pageTrackUrl'] : null;
        $this->container['accountId'] = isset($data['accountId']) ? $data['accountId'] : null;
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
     * Gets pageType
     *
     * @return \TencentAds\Model\DestinationType
     */
    public function getPageType()
    {
        return $this->container['pageType'];
    }

    /**
     * Sets pageType
     *
     * @param \TencentAds\Model\DestinationType $pageType pageType
     *
     * @return $this
     */
    public function setPageType($pageType)
    {
        $this->container['pageType'] = $pageType;

        return $this;
    }

    /**
     * Gets automaticSiteEnabled
     *
     * @return bool
     */
    public function getAutomaticSiteEnabled()
    {
        return $this->container['automaticSiteEnabled'];
    }

    /**
     * Sets automaticSiteEnabled
     *
     * @param bool $automaticSiteEnabled automaticSiteEnabled
     *
     * @return $this
     */
    public function setAutomaticSiteEnabled($automaticSiteEnabled)
    {
        $this->container['automaticSiteEnabled'] = $automaticSiteEnabled;

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
     * Gets linkPageType
     *
     * @return \TencentAds\Model\LinkPageType
     */
    public function getLinkPageType()
    {
        return $this->container['linkPageType'];
    }

    /**
     * Sets linkPageType
     *
     * @param \TencentAds\Model\LinkPageType $linkPageType linkPageType
     *
     * @return $this
     */
    public function setLinkPageType($linkPageType)
    {
        $this->container['linkPageType'] = $linkPageType;

        return $this;
    }

    /**
     * Gets linkNameType
     *
     * @return \TencentAds\Model\LinkNameTypeMP
     */
    public function getLinkNameType()
    {
        return $this->container['linkNameType'];
    }

    /**
     * Sets linkNameType
     *
     * @param \TencentAds\Model\LinkNameTypeMP $linkNameType linkNameType
     *
     * @return $this
     */
    public function setLinkNameType($linkNameType)
    {
        $this->container['linkNameType'] = $linkNameType;

        return $this;
    }

    /**
     * Gets linkPageSpec
     *
     * @return \TencentAds\Model\LinkPageSpec
     */
    public function getLinkPageSpec()
    {
        return $this->container['linkPageSpec'];
    }

    /**
     * Sets linkPageSpec
     *
     * @param \TencentAds\Model\LinkPageSpec $linkPageSpec linkPageSpec
     *
     * @return $this
     */
    public function setLinkPageSpec($linkPageSpec)
    {
        $this->container['linkPageSpec'] = $linkPageSpec;

        return $this;
    }

    /**
     * Gets conversionDataType
     *
     * @return \TencentAds\Model\ConversionDataType
     */
    public function getConversionDataType()
    {
        return $this->container['conversionDataType'];
    }

    /**
     * Sets conversionDataType
     *
     * @param \TencentAds\Model\ConversionDataType $conversionDataType conversionDataType
     *
     * @return $this
     */
    public function setConversionDataType($conversionDataType)
    {
        $this->container['conversionDataType'] = $conversionDataType;

        return $this;
    }

    /**
     * Gets conversionTargetType
     *
     * @return \TencentAds\Model\ConversionTargetType
     */
    public function getConversionTargetType()
    {
        return $this->container['conversionTargetType'];
    }

    /**
     * Sets conversionTargetType
     *
     * @param \TencentAds\Model\ConversionTargetType $conversionTargetType conversionTargetType
     *
     * @return $this
     */
    public function setConversionTargetType($conversionTargetType)
    {
        $this->container['conversionTargetType'] = $conversionTargetType;

        return $this;
    }

    /**
     * Gets qqMiniGameTrackingQueryString
     *
     * @return string
     */
    public function getQqMiniGameTrackingQueryString()
    {
        return $this->container['qqMiniGameTrackingQueryString'];
    }

    /**
     * Sets qqMiniGameTrackingQueryString
     *
     * @param string $qqMiniGameTrackingQueryString qqMiniGameTrackingQueryString
     *
     * @return $this
     */
    public function setQqMiniGameTrackingQueryString($qqMiniGameTrackingQueryString)
    {
        $this->container['qqMiniGameTrackingQueryString'] = $qqMiniGameTrackingQueryString;

        return $this;
    }

    /**
     * Gets deepLinkUrl
     *
     * @return string
     */
    public function getDeepLinkUrl()
    {
        return $this->container['deepLinkUrl'];
    }

    /**
     * Sets deepLinkUrl
     *
     * @param string $deepLinkUrl deepLinkUrl
     *
     * @return $this
     */
    public function setDeepLinkUrl($deepLinkUrl)
    {
        $this->container['deepLinkUrl'] = $deepLinkUrl;

        return $this;
    }

    /**
     * Gets androidDeepLinkAppId
     *
     * @return string
     */
    public function getAndroidDeepLinkAppId()
    {
        return $this->container['androidDeepLinkAppId'];
    }

    /**
     * Sets androidDeepLinkAppId
     *
     * @param string $androidDeepLinkAppId androidDeepLinkAppId
     *
     * @return $this
     */
    public function setAndroidDeepLinkAppId($androidDeepLinkAppId)
    {
        $this->container['androidDeepLinkAppId'] = $androidDeepLinkAppId;

        return $this;
    }

    /**
     * Gets iosDeepLinkAppId
     *
     * @return string
     */
    public function getIosDeepLinkAppId()
    {
        return $this->container['iosDeepLinkAppId'];
    }

    /**
     * Sets iosDeepLinkAppId
     *
     * @param string $iosDeepLinkAppId iosDeepLinkAppId
     *
     * @return $this
     */
    public function setIosDeepLinkAppId($iosDeepLinkAppId)
    {
        $this->container['iosDeepLinkAppId'] = $iosDeepLinkAppId;

        return $this;
    }

    /**
     * Gets universalLinkUrl
     *
     * @return string
     */
    public function getUniversalLinkUrl()
    {
        return $this->container['universalLinkUrl'];
    }

    /**
     * Sets universalLinkUrl
     *
     * @param string $universalLinkUrl universalLinkUrl
     *
     * @return $this
     */
    public function setUniversalLinkUrl($universalLinkUrl)
    {
        $this->container['universalLinkUrl'] = $universalLinkUrl;

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
     * Gets profileId
     *
     * @return int
     */
    public function getProfileId()
    {
        return $this->container['profileId'];
    }

    /**
     * Sets profileId
     *
     * @param int $profileId profileId
     *
     * @return $this
     */
    public function setProfileId($profileId)
    {
        $this->container['profileId'] = $profileId;

        return $this;
    }

    /**
     * Gets shareContentSpec
     *
     * @return \TencentAds\Model\ShareContentSpec
     */
    public function getShareContentSpec()
    {
        return $this->container['shareContentSpec'];
    }

    /**
     * Sets shareContentSpec
     *
     * @param \TencentAds\Model\ShareContentSpec $shareContentSpec shareContentSpec
     *
     * @return $this
     */
    public function setShareContentSpec($shareContentSpec)
    {
        $this->container['shareContentSpec'] = $shareContentSpec;

        return $this;
    }

    /**
     * Gets dynamicAdcreativeSpec
     *
     * @return \TencentAds\Model\DynamicAdcreativeSpec
     */
    public function getDynamicAdcreativeSpec()
    {
        return $this->container['dynamicAdcreativeSpec'];
    }

    /**
     * Sets dynamicAdcreativeSpec
     *
     * @param \TencentAds\Model\DynamicAdcreativeSpec $dynamicAdcreativeSpec dynamicAdcreativeSpec
     *
     * @return $this
     */
    public function setDynamicAdcreativeSpec($dynamicAdcreativeSpec)
    {
        $this->container['dynamicAdcreativeSpec'] = $dynamicAdcreativeSpec;

        return $this;
    }

    /**
     * Gets componentId
     *
     * @return int
     */
    public function getComponentId()
    {
        return $this->container['componentId'];
    }

    /**
     * Sets componentId
     *
     * @param int $componentId componentId
     *
     * @return $this
     */
    public function setComponentId($componentId)
    {
        $this->container['componentId'] = $componentId;

        return $this;
    }

    /**
     * Gets category
     *
     * @return int[]
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param int[] $category category
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string[]
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string[] $label label
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets unionMarketSwitch
     *
     * @return bool
     */
    public function getUnionMarketSwitch()
    {
        return $this->container['unionMarketSwitch'];
    }

    /**
     * Sets unionMarketSwitch
     *
     * @param bool $unionMarketSwitch unionMarketSwitch
     *
     * @return $this
     */
    public function setUnionMarketSwitch($unionMarketSwitch)
    {
        $this->container['unionMarketSwitch'] = $unionMarketSwitch;

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
     * Gets feedsVideoCommentSwitch
     *
     * @return bool
     */
    public function getFeedsVideoCommentSwitch()
    {
        return $this->container['feedsVideoCommentSwitch'];
    }

    /**
     * Sets feedsVideoCommentSwitch
     *
     * @param bool $feedsVideoCommentSwitch feedsVideoCommentSwitch
     *
     * @return $this
     */
    public function setFeedsVideoCommentSwitch($feedsVideoCommentSwitch)
    {
        $this->container['feedsVideoCommentSwitch'] = $feedsVideoCommentSwitch;

        return $this;
    }

    /**
     * Gets webviewUrl
     *
     * @return string
     */
    public function getWebviewUrl()
    {
        return $this->container['webviewUrl'];
    }

    /**
     * Sets webviewUrl
     *
     * @param string $webviewUrl webviewUrl
     *
     * @return $this
     */
    public function setWebviewUrl($webviewUrl)
    {
        $this->container['webviewUrl'] = $webviewUrl;

        return $this;
    }

    /**
     * Gets simpleCanvasSubType
     *
     * @return \TencentAds\Model\SimpleCanvasSubType
     */
    public function getSimpleCanvasSubType()
    {
        return $this->container['simpleCanvasSubType'];
    }

    /**
     * Sets simpleCanvasSubType
     *
     * @param \TencentAds\Model\SimpleCanvasSubType $simpleCanvasSubType simpleCanvasSubType
     *
     * @return $this
     */
    public function setSimpleCanvasSubType($simpleCanvasSubType)
    {
        $this->container['simpleCanvasSubType'] = $simpleCanvasSubType;

        return $this;
    }

    /**
     * Gets floatingZone
     *
     * @return \TencentAds\Model\FloatingZone
     */
    public function getFloatingZone()
    {
        return $this->container['floatingZone'];
    }

    /**
     * Sets floatingZone
     *
     * @param \TencentAds\Model\FloatingZone $floatingZone floatingZone
     *
     * @return $this
     */
    public function setFloatingZone($floatingZone)
    {
        $this->container['floatingZone'] = $floatingZone;

        return $this;
    }

    /**
     * Gets marketingPendantImageId
     *
     * @return string
     */
    public function getMarketingPendantImageId()
    {
        return $this->container['marketingPendantImageId'];
    }

    /**
     * Sets marketingPendantImageId
     *
     * @param string $marketingPendantImageId marketingPendantImageId
     *
     * @return $this
     */
    public function setMarketingPendantImageId($marketingPendantImageId)
    {
        $this->container['marketingPendantImageId'] = $marketingPendantImageId;

        return $this;
    }

    /**
     * Gets countdownSwitch
     *
     * @return bool
     */
    public function getCountdownSwitch()
    {
        return $this->container['countdownSwitch'];
    }

    /**
     * Sets countdownSwitch
     *
     * @param bool $countdownSwitch countdownSwitch
     *
     * @return $this
     */
    public function setCountdownSwitch($countdownSwitch)
    {
        $this->container['countdownSwitch'] = $countdownSwitch;

        return $this;
    }

    /**
     * Gets pageTrackUrl
     *
     * @return string
     */
    public function getPageTrackUrl()
    {
        return $this->container['pageTrackUrl'];
    }

    /**
     * Sets pageTrackUrl
     *
     * @param string $pageTrackUrl pageTrackUrl
     *
     * @return $this
     */
    public function setPageTrackUrl($pageTrackUrl)
    {
        $this->container['pageTrackUrl'] = $pageTrackUrl;

        return $this;
    }

    /**
     * Gets accountId
     *
     * @return int
     */
    public function getAccountId()
    {
        return $this->container['accountId'];
    }

    /**
     * Sets accountId
     *
     * @param int $accountId accountId
     *
     * @return $this
     */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;

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
     * @return \TencentAds\Model\AdcreativeCreativeElementsMp
     */
    public function getAdcreativeElements()
    {
        return $this->container['adcreativeElements'];
    }

    /**
     * Sets adcreativeElements
     *
     * @param \TencentAds\Model\AdcreativeCreativeElementsMp $adcreativeElements adcreativeElements
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


