<?php
/**
 * AdGroupCreativeCombinationType
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
use \TencentAds\ObjectSerializer;

/**
 * AdGroupCreativeCombinationType Class Doc Comment
 *
 * @category Class
 * @description 广告类型，支持普通广告、集装箱广告和动态创意广告
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AdGroupCreativeCombinationType
{
    /**
     * Possible values of this enum
     */
    const NORMAL = 'COMBINATION_TYPE_NORMAL';
    const CAROUSEL = 'COMBINATION_TYPE_CAROUSEL';
    const DYNAMIC = 'COMBINATION_TYPE_DYNAMIC';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NORMAL,
            self::CAROUSEL,
            self::DYNAMIC,
        ];
    }
}


