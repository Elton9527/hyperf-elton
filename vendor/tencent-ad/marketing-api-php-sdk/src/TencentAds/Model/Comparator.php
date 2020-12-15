<?php
/**
 * Comparator
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
 * Comparator Class Doc Comment
 *
 * @category Class
 * @description 比较符
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Comparator
{
    /**
     * Possible values of this enum
     */
    const GE = 'COMPARATOR_GE';
    const LE = 'COMPARATOR_LE';
    const BETWEEN = 'COMPARATOR_BETWEEN';
    const EQ = 'COMPARATOR_EQ';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::GE,
            self::LE,
            self::BETWEEN,
            self::EQ,
        ];
    }
}

