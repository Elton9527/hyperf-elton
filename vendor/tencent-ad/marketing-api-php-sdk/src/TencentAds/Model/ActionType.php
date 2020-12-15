<?php
/**
 * ActionType
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
 * ActionType Class Doc Comment
 *
 * @category Class
 * @description 标准行为类型，当值为 &#39;CUSTOM&#39; 时表示自定义行为类型
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ActionType
{
    /**
     * Possible values of this enum
     */
    const CUSTOM = 'CUSTOM';
    const REGISTER = 'REGISTER';
    const VIEW_CONTENT = 'VIEW_CONTENT';
    const CONSULT = 'CONSULT';
    const ADD_TO_CART = 'ADD_TO_CART';
    const PURCHASE = 'PURCHASE';
    const ACTIVATE_APP = 'ACTIVATE_APP';
    const SEARCH = 'SEARCH';
    const ADD_TO_WISHLIST = 'ADD_TO_WISHLIST';
    const INITIATE_CHECKOUT = 'INITIATE_CHECKOUT';
    const COMPLETE_ORDER = 'COMPLETE_ORDER';
    const DOWNLOAD_APP = 'DOWNLOAD_APP';
    const START_APP = 'START_APP';
    const RATE = 'RATE';
    const PAGE_VIEW = 'PAGE_VIEW';
    const RESERVATION = 'RESERVATION';
    const SHARE = 'SHARE';
    const APPLY = 'APPLY';
    const CLAIM_OFFER = 'CLAIM_OFFER';
    const NAVIGATE = 'NAVIGATE';
    const PRODUCT_RECOMMEND = 'PRODUCT_RECOMMEND';
    const VISIT_STORE = 'VISIT_STORE';
    const TRY_OUT = 'TRY_OUT';
    const DELIVER = 'DELIVER';
    const CONFIRM_EFFECTIVE_LEADS = 'CONFIRM_EFFECTIVE_LEADS';
    const CONFIRM_POTENTIAL_CUSTOMER = 'CONFIRM_POTENTIAL_CUSTOMER';
    const CREATE_ROLE = 'CREATE_ROLE';
    const AUTHORIZE = 'AUTHORIZE';
    const TUTORIAL_FINISH = 'TUTORIAL_FINISH';
    const SCANCODE = 'SCANCODE';
    const ENTER_BACKGROUND = 'ENTER_BACKGROUND';
    const ENTER_FOREGROUND = 'ENTER_FOREGROUND';
    const TICKET = 'TICKET';
    const LOGIN = 'LOGIN';
    const QUEST = 'QUEST';
    const UPDATE_LEVEL = 'UPDATE_LEVEL';
    const CREATE = 'CREATE';
    const PAUSE = 'PAUSE';
    const RESUME = 'RESUME';
    const APP_QUIT = 'APP_QUIT';
    const BIND_ACCOUNT = 'BIND_ACCOUNT';
    const ADD_PAYMENT = 'ADD_PAYMENT';
    const PRE_CREDIT = 'PRE_CREDIT';
    const CREDIT = 'CREDIT';
    const WITHDRAW_DEPOSITS = 'WITHDRAW_DEPOSITS';
    const LANDING_PAGE_CLICK = 'LANDING_PAGE_CLICK';
    const SELECT_COURSE = 'SELECT_COURSE';
    const RE_FUND = 'RE_FUND';
    const PLATFORM_VIEW = 'PLATFORM_VIEW';
    const ONE_DAY_LEAVE = 'ONE_DAY_LEAVE';
    const PRODUCT_VIEW = 'PRODUCT_VIEW';
    const PURCHASE_MEMBER_CARD = 'PURCHASE_MEMBER_CARD';
    const ONLINE_CONSULT = 'ONLINE_CONSULT';
    const MAKE_PHONE_CALL = 'MAKE_PHONE_CALL';
    const AD_CLICK = 'AD_CLICK';
    const AD_IMPRESSION = 'AD_IMPRESSION';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CUSTOM,
            self::REGISTER,
            self::VIEW_CONTENT,
            self::CONSULT,
            self::ADD_TO_CART,
            self::PURCHASE,
            self::ACTIVATE_APP,
            self::SEARCH,
            self::ADD_TO_WISHLIST,
            self::INITIATE_CHECKOUT,
            self::COMPLETE_ORDER,
            self::DOWNLOAD_APP,
            self::START_APP,
            self::RATE,
            self::PAGE_VIEW,
            self::RESERVATION,
            self::SHARE,
            self::APPLY,
            self::CLAIM_OFFER,
            self::NAVIGATE,
            self::PRODUCT_RECOMMEND,
            self::VISIT_STORE,
            self::TRY_OUT,
            self::DELIVER,
            self::CONFIRM_EFFECTIVE_LEADS,
            self::CONFIRM_POTENTIAL_CUSTOMER,
            self::CREATE_ROLE,
            self::AUTHORIZE,
            self::TUTORIAL_FINISH,
            self::SCANCODE,
            self::ENTER_BACKGROUND,
            self::ENTER_FOREGROUND,
            self::TICKET,
            self::LOGIN,
            self::QUEST,
            self::UPDATE_LEVEL,
            self::CREATE,
            self::PAUSE,
            self::RESUME,
            self::APP_QUIT,
            self::BIND_ACCOUNT,
            self::ADD_PAYMENT,
            self::PRE_CREDIT,
            self::CREDIT,
            self::WITHDRAW_DEPOSITS,
            self::LANDING_PAGE_CLICK,
            self::SELECT_COURSE,
            self::RE_FUND,
            self::PLATFORM_VIEW,
            self::ONE_DAY_LEAVE,
            self::PRODUCT_VIEW,
            self::PURCHASE_MEMBER_CARD,
            self::ONLINE_CONSULT,
            self::MAKE_PHONE_CALL,
            self::AD_CLICK,
            self::AD_IMPRESSION,
        ];
    }
}

