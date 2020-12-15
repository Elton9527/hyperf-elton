<?php
/**
 * Aggregation
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
 * Aggregation Class Doc Comment
 *
 * @category Class
 * @description 聚合维度，是否将结果按照指定类型细分，可选值&#39;DOMAIN&#39;, &#39;ACTION_TYPE&#39;
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Aggregation
{
    /**
     * Possible values of this enum
     */
    const DOMAIN = 'DOMAIN';
    const ACTION_TYPE = 'ACTION_TYPE';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DOMAIN,
            self::ACTION_TYPE,
        ];
    }
}


