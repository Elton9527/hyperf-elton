<?php
/**
 * Created by PhpStorm.
 * User: Elton
 * Date: 2020/12/29
 * Time: 14:07
 */

namespace App\Service\Adsmanagement;
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

class DailyReportService
{
    public static $tads;
    public static $ACCESS_TOKEN;
    public static $ACCOUNT_ID;
//[REPORT_LEVEL_ADVERTISER_WECHAT,REPORT_LEVEL_CAMPAIGN_WECHAT,REPORT_LEVEL_ADGROUP_WECHAT,REPORT_LEVEL_AD_WECHAT,REPORT_LEVEL_EXPAND_TARGETING_ADGROUP_WECHAT]
    public static $LEVEL        = 'REPORT_LEVEL_CAMPAIGN_WECHAT'; // 广告组级别报表
    public static $START_DATE; // 报表开始日期
    public static $END_DATE;  // 报表结束日期

    public function init($access_token, $account_id, $start_date, $end_date)
    {
        static::$ACCESS_TOKEN = $access_token;
        static::$ACCOUNT_ID = $account_id;

        static::$START_DATE = $start_date;
        static::$END_DATE = $end_date;

        $tads = TencentAds::init([
            'access_token' => static::$ACCESS_TOKEN,
            'is_debug' => true,
        ]);
        $tads->useProduction();
        static::$tads = $tads;

        return $tads;
    }

    public function main()
    {
        try {
            /* @var TencentAds $tads */
            $tads = static::$tads;

            $fields = [
                'account_id',
                'date',
                'view_count',
                'download_count',
                'activated_count',
                'activated_rate',
                'thousand_display_price',
                'valid_click_count',
                'ctr',
                'cpc',
                'cost',
                'key_page_view_cost',
                'coupon_click_count',
                'coupon_issue_count',
                'coupon_get_count',
                'platform_page_view_count',
                'platform_page_view_rate',
                'web_commodity_page_view_count',
                'web_commodity_page_view_cost',
                'web_register_count',
                'page_consult_count',
                'page_consult_cost',
                'page_phone_call_direct_count',
                'page_phone_call_direct_cost',
                'page_phone_call_back_count',
                'page_phone_call_back_cost',
                'own_page_navigation_count',
                'own_page_navi_cost',
                'platform_page_navigation_count',
                'platform_page_navigation_cost',
                'platform_shop_navigation_count',
                'platform_shop_navigation_cost',
                'web_application_count',
                'web_application_cost',
                'page_reservation_count',
                'page_reservation_rate',
                'page_reservation_cost',
                'web_add_to_cart_count',
                'web_add_to_cart_cost',
                'add_to_cart_price',
                'own_page_coupon_get_count',
                'own_page_coupon_get_cost',
                'platform_coupon_get_count',
                'platform_coupon_get_cost',
                'web_order_count',
                'web_order_rate',
                'app_order_rate',
                'web_order_cost',
                'web_checkout_amount',
                'web_checkout_count',
                'web_checkout_cost',
                'order_amount',
                'order_unit_price',
                'order_roi',
                'deliver_count',
                'deliver_cost',
                'sign_in_count',
                'sign_in_cost',
                'download_rate',
                'download_cost',
                'install_count',
                'install_cost',
                'click_activated_rate',
                'activated_cost',
                'retention_count',
                'retention_rate',
                'retention_cost',
                'key_page_view_count',
                'app_commodity_page_view_count',
                'app_commodity_page_view_rate',
                'web_commodity_page_view_rate',
                'app_commodity_page_view_cost',
                'app_register_count',
                'app_register_cost',
                'web_register_cost',
                'app_application_count',
                'app_application_cost',
                'app_add_to_cart_count',
                'add_to_cart_amount',
                'app_add_to_cart_cost',
                'app_order_count',
                'app_order_cost',
                'app_checkout_count',
                'app_checkout_amount',
                'app_checkout_cost',
                'platform_coupon_click_count',
                'platform_coupon_get_rate',
                'follow_count',
                'follow_cost',
                'forward_count',
                'forward_cost',
                'read_count',
                'read_cost',
                'praise_count',
                'praise_cost',
                'comment_count',
                'comment_cost',
                'inte_phone_count',
                'phone_call_count',
                'external_form_reservation_count',
                'app_ad_paying_users',
                'ad_pur_val_web',
                'ad_pur_val_app',
                'game_create_role_count',
                'game_authorize_count',
                'game_tutorial_finish_count',
                'effective_leads_count',
                'effective_cost',
                'effective_reserve_count',
                'effective_consult_count',
                'effective_phone_count',
                'potential_reserve_count',
                'potential_consult_count',
                'potential_phone_count',
                'app_checkout_rate',
                'web_checkout_rate',
                'app_activated_checkout_rate',
                'web_activated_checkout_rate',
                'app_register_rate',
                'web_reg_rate',
                'page_phone_call_direct_rate',
                'page_phone_call_back_rate',
                'page_consult_rate',
                'deliver_rate',
                'install_rate',
                'arppu_cost',
                'arpu_cost',
                'web_arppu_cost',
                'web_arpu_cost',
                'app_ad_pur_arpu_cost',
                'app_ad_pur_arppu_cost',
                'web_ad_pur_arpu_cost',
                'cheout_fd',
                'cheout_td',
                'cheout_ow',
                'cheout_tw',
                'cheout_om',
                'cheout_fd_reward',
                'cheout_td_reward',
                'cheout_ow_reward',
                'cheout_tw_reward',
                'cheout_om_reward',
                'cheout_total_reward',
                'from_follow_uv',
                'from_follow_cost',
                'add_desktop_pv',
                'add_desktop_cost',
                'first_pay_count',
                'first_pay_rate',
                'pre_cre_web',
                'pre_cre_app',
                'pre_cre_web_val',
                'pre_cre_app_val',
                'cre_web',
                'cre_app',
                'cre_web_val',
                'cre_app_val',
                'withdr_dep_web',
                'withdr_dep_app',
                'withdr_dep_web_val',
                'withdr_dep_app_val',
                'first_pay_cost',
                'landing_page_click_count',
                'web_cart_amount',
                'scan_follow_count',
                'scan_follow_user_count',
                'scan_follow_user_cost',
                'scan_follow_user_rate',
                'app_order_amount',
                'web_order_amount',
                'phone_consult_count',
                'tool_consult_count',
                'lottery_leads_count',
                'lottery_leads_cost',
                'conversions_count',
                'conversions_rate',
                'conversions_cost',
                'deep_conversions_count',
                'deep_conversions_rate',
                'deep_conversions_cost',
                'first_memcard_web_count',
                'first_memcard_app_count',
                'memcard_web_count',
                'memcard_app_count',
                'first_memcard_web_rate',
                'first_memcard_app_rate',
                'first_memcard_web_cost',
                'first_memcard_app_cost',
                'valuable_click_count',
                'valuable_click_rate',
                'valuable_click_cost',
                'video_play_count',
                'click_image_count',
                'click_detail_count',
                'click_head_count',
                'click_nick_count',
                'click_poi_count',
                'video_inner_play_count',
                'lan_button_click_count',
                'lan_jump_button_clickers',
                'lan_jump_button_click_cost',
                'lan_jump_button_ctr',
                'lan_button_click_cost',
                'cpn_click_button_count',
                'cpn_click_button_uv',
                'key_page_uv',
                'special_page_exp_uv',
                'special_page_exp_cost',
                'view_commodity_page_uv',
                'effect_leads_purchase_count',
                'reservation_uv',
                'overall_leads_purchase_count',
                'leads_purchase_count',
                'leads_purchase_rate',
                'leads_purchase_cost',
                'leads_purchase_uv',
                'valid_leads_uv',
                'phone_call_uv',
                'valid_phone_uv',
                'potential_customer_phone_uv',
                'web_register_uv',
                'web_apply_uv',
                'web_credit_uv',
                'app_apply_uv',
                'app_pre_credit_uv',
                'app_credit_uv',
                'app_withdraw_uv',
                'wechat_app_register_uv',
                'no_interest_count',
                'first_day_order_count',
                'first_day_order_amount',
                'add_wishlist_count',
                'effect_leads_purchase_cost',
                'cre_web_cost',
                'cre_app_cost',
                'pre_cre_web_cost',
                'pre_cre_app_cost',
                'store_visitor',
                'try_out_user',
                'consult_leave_info_users',
                'active_page_views',
                'active_page_viewers',
                'active_page_interaction_amount',
                'active_page_interaction_users',
                'join_chat_group_amount',
                'guide_to_follow_page_views',
                'guide_to_follow_page_viewers',
                'guide_to_follow_page_interaction_amount',
                'guide_to_follow_page_interaction_users',
            ]; // 需要返回的字段
            $response = $tads->dailyReports()
                ->get([
                    'account_id' => static::$ACCOUNT_ID,
                    'level'      => static::$LEVEL,
                    'date_range' => [
                        'start_date' => static::$START_DATE,
                        'end_date'   => static::$END_DATE,
                    ],
                    'filtering' => [
                        ['field' => 'campaign_id', 'operator' => 'EQUALS', 'values' => ['2395273732']]
                    ],
                    'fields' => $fields,
                    'page_size' => 100
                ]);

            // 从返回里获得Report信息
            foreach ($response->getList() as $report) {
                // echo $report . PHP_EOL;
            }

            return $response;
        } catch (TencentAdsResponseException $e) {
            // When Api returns an error
            echo 'Tencent ads returned an error: ' . $e->getMessage() . PHP_EOL;
            throw $e;
        } catch (TencentAdsSDKException $e) {
            // When validation fails or other local issues
            echo 'Tencent ads SDK returned an error: ' . $e->getMessage() . PHP_EOL;
            throw $e;
        } catch (Exception $e) {
            echo 'Other exception: ' . $e->getMessage() . PHP_EOL;
            throw $e;
        }
    }
}
