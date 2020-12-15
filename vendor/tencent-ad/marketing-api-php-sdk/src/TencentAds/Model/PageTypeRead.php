<?php
/**
 * PageTypeRead
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
 * PageTypeRead Class Doc Comment
 *
 * @category Class
 * @description 落地页类型
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PageTypeRead
{
    /**
     * Possible values of this enum
     */
    const _DEFAULT = 'PAGE_TYPE_DEFAULT';
    const TSA_APP = 'PAGE_TYPE_TSA_APP';
    const TSA_WEB_NONE_ECOMMERCE = 'PAGE_TYPE_TSA_WEB_NONE_ECOMMERCE';
    const FENGYE_ECOMMERCE = 'PAGE_TYPE_FENGYE_ECOMMERCE';
    const CANVAS = 'PAGE_TYPE_CANVAS';
    const MINI_PROGRAM = 'PAGE_TYPE_MINI_PROGRAM';
    const CANVAS_WECHAT = 'PAGE_TYPE_CANVAS_WECHAT';
    const MINI_PROGRAM_WECHAT = 'PAGE_TYPE_MINI_PROGRAM_WECHAT';
    const UNSUPPORTED = 'PAGE_TYPE_UNSUPPORTED';
    const MINI_GAME_WECHAT = 'PAGE_TYPE_MINI_GAME_WECHAT';
    const MINI_PROGRAM_QQ = 'PAGE_TYPE_MINI_PROGRAM_QQ';
    const MINI_GAME_QQ = 'PAGE_TYPE_MINI_GAME_QQ';
    const MINI_PROGRAM_CANVAS_WECHAT = 'PAGE_TYPE_MINI_PROGRAM_CANVAS_WECHAT';
    const MOMENTS_SIMPLE_NATIVE_WECHAT = 'PAGE_TYPE_MOMENTS_SIMPLE_NATIVE_WECHAT';
    const FULL_SCREEN_WECHAT = 'PAGE_TYPE_FULL_SCREEN_WECHAT';
    const YUEBAO_QUICKAPP = 'PAGE_TYPE_YUEBAO_QUICKAPP';
    const YUEBAO_OFFICIAL_ACCOUNT_ARTICLE = 'PAGE_TYPE_YUEBAO_OFFICIAL_ACCOUNT_ARTICLE';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_DEFAULT,
            self::TSA_APP,
            self::TSA_WEB_NONE_ECOMMERCE,
            self::FENGYE_ECOMMERCE,
            self::CANVAS,
            self::MINI_PROGRAM,
            self::CANVAS_WECHAT,
            self::MINI_PROGRAM_WECHAT,
            self::UNSUPPORTED,
            self::MINI_GAME_WECHAT,
            self::MINI_PROGRAM_QQ,
            self::MINI_GAME_QQ,
            self::MINI_PROGRAM_CANVAS_WECHAT,
            self::MOMENTS_SIMPLE_NATIVE_WECHAT,
            self::FULL_SCREEN_WECHAT,
            self::YUEBAO_QUICKAPP,
            self::YUEBAO_OFFICIAL_ACCOUNT_ARTICLE,
        ];
    }
}

