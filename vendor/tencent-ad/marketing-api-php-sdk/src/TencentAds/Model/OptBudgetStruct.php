<?php
/**
 * OptBudgetStruct
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
 * OptBudgetStruct Class Doc Comment
 *
 * @category Class
 * @description 预算优化
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OptBudgetStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'opt_budget_struct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'raiseDayBudgetFlag' => 'bool',
        'currentAdgroupDayBudget' => 'int',
        'currentCampaignDayBudget' => 'int',
        'currentAccountDayBudget' => 'int',
        'adgroupCostDaily' => 'int',
        'campaignCostDaily' => 'int',
        'accountCostDaily' => 'int',
        'adgroupBalance' => 'int',
        'campaignBalance' => 'int',
        'accountBalance' => 'int',
        'optimizeAdgroupDayBudgetFlag' => 'bool',
        'optimizeCampaignDayBudgetFlag' => 'bool',
        'optimizeAccountDayBudgetFlag' => 'bool',
        'optimizeAdgroupDayBudget' => 'int',
        'optimizeCampaignDayBudget' => 'int',
        'optimizeAccountDayBudget' => 'int',
        'raiseAccountBalanceFlag' => 'bool',
        'recommendRecharge' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'raiseDayBudgetFlag' => null,
        'currentAdgroupDayBudget' => 'int64',
        'currentCampaignDayBudget' => 'int64',
        'currentAccountDayBudget' => 'int64',
        'adgroupCostDaily' => 'int64',
        'campaignCostDaily' => 'int64',
        'accountCostDaily' => 'int64',
        'adgroupBalance' => 'int64',
        'campaignBalance' => 'int64',
        'accountBalance' => 'int64',
        'optimizeAdgroupDayBudgetFlag' => null,
        'optimizeCampaignDayBudgetFlag' => null,
        'optimizeAccountDayBudgetFlag' => null,
        'optimizeAdgroupDayBudget' => 'int64',
        'optimizeCampaignDayBudget' => 'int64',
        'optimizeAccountDayBudget' => 'int64',
        'raiseAccountBalanceFlag' => null,
        'recommendRecharge' => 'int64'
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
        'raiseDayBudgetFlag' => 'raise_day_budget_flag',
        'currentAdgroupDayBudget' => 'current_adgroup_day_budget',
        'currentCampaignDayBudget' => 'current_campaign_day_budget',
        'currentAccountDayBudget' => 'current_account_day_budget',
        'adgroupCostDaily' => 'adgroup_cost_daily',
        'campaignCostDaily' => 'campaign_cost_daily',
        'accountCostDaily' => 'account_cost_daily',
        'adgroupBalance' => 'adgroup_balance',
        'campaignBalance' => 'campaign_balance',
        'accountBalance' => 'account_balance',
        'optimizeAdgroupDayBudgetFlag' => 'optimize_adgroup_day_budget_flag',
        'optimizeCampaignDayBudgetFlag' => 'optimize_campaign_day_budget_flag',
        'optimizeAccountDayBudgetFlag' => 'optimize_account_day_budget_flag',
        'optimizeAdgroupDayBudget' => 'optimize_adgroup_day_budget',
        'optimizeCampaignDayBudget' => 'optimize_campaign_day_budget',
        'optimizeAccountDayBudget' => 'optimize_account_day_budget',
        'raiseAccountBalanceFlag' => 'raise_account_balance_flag',
        'recommendRecharge' => 'recommend_recharge'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'raiseDayBudgetFlag' => 'setRaiseDayBudgetFlag',
        'currentAdgroupDayBudget' => 'setCurrentAdgroupDayBudget',
        'currentCampaignDayBudget' => 'setCurrentCampaignDayBudget',
        'currentAccountDayBudget' => 'setCurrentAccountDayBudget',
        'adgroupCostDaily' => 'setAdgroupCostDaily',
        'campaignCostDaily' => 'setCampaignCostDaily',
        'accountCostDaily' => 'setAccountCostDaily',
        'adgroupBalance' => 'setAdgroupBalance',
        'campaignBalance' => 'setCampaignBalance',
        'accountBalance' => 'setAccountBalance',
        'optimizeAdgroupDayBudgetFlag' => 'setOptimizeAdgroupDayBudgetFlag',
        'optimizeCampaignDayBudgetFlag' => 'setOptimizeCampaignDayBudgetFlag',
        'optimizeAccountDayBudgetFlag' => 'setOptimizeAccountDayBudgetFlag',
        'optimizeAdgroupDayBudget' => 'setOptimizeAdgroupDayBudget',
        'optimizeCampaignDayBudget' => 'setOptimizeCampaignDayBudget',
        'optimizeAccountDayBudget' => 'setOptimizeAccountDayBudget',
        'raiseAccountBalanceFlag' => 'setRaiseAccountBalanceFlag',
        'recommendRecharge' => 'setRecommendRecharge'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'raiseDayBudgetFlag' => 'getRaiseDayBudgetFlag',
        'currentAdgroupDayBudget' => 'getCurrentAdgroupDayBudget',
        'currentCampaignDayBudget' => 'getCurrentCampaignDayBudget',
        'currentAccountDayBudget' => 'getCurrentAccountDayBudget',
        'adgroupCostDaily' => 'getAdgroupCostDaily',
        'campaignCostDaily' => 'getCampaignCostDaily',
        'accountCostDaily' => 'getAccountCostDaily',
        'adgroupBalance' => 'getAdgroupBalance',
        'campaignBalance' => 'getCampaignBalance',
        'accountBalance' => 'getAccountBalance',
        'optimizeAdgroupDayBudgetFlag' => 'getOptimizeAdgroupDayBudgetFlag',
        'optimizeCampaignDayBudgetFlag' => 'getOptimizeCampaignDayBudgetFlag',
        'optimizeAccountDayBudgetFlag' => 'getOptimizeAccountDayBudgetFlag',
        'optimizeAdgroupDayBudget' => 'getOptimizeAdgroupDayBudget',
        'optimizeCampaignDayBudget' => 'getOptimizeCampaignDayBudget',
        'optimizeAccountDayBudget' => 'getOptimizeAccountDayBudget',
        'raiseAccountBalanceFlag' => 'getRaiseAccountBalanceFlag',
        'recommendRecharge' => 'getRecommendRecharge'
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
        $this->container['raiseDayBudgetFlag'] = isset($data['raiseDayBudgetFlag']) ? $data['raiseDayBudgetFlag'] : null;
        $this->container['currentAdgroupDayBudget'] = isset($data['currentAdgroupDayBudget']) ? $data['currentAdgroupDayBudget'] : null;
        $this->container['currentCampaignDayBudget'] = isset($data['currentCampaignDayBudget']) ? $data['currentCampaignDayBudget'] : null;
        $this->container['currentAccountDayBudget'] = isset($data['currentAccountDayBudget']) ? $data['currentAccountDayBudget'] : null;
        $this->container['adgroupCostDaily'] = isset($data['adgroupCostDaily']) ? $data['adgroupCostDaily'] : null;
        $this->container['campaignCostDaily'] = isset($data['campaignCostDaily']) ? $data['campaignCostDaily'] : null;
        $this->container['accountCostDaily'] = isset($data['accountCostDaily']) ? $data['accountCostDaily'] : null;
        $this->container['adgroupBalance'] = isset($data['adgroupBalance']) ? $data['adgroupBalance'] : null;
        $this->container['campaignBalance'] = isset($data['campaignBalance']) ? $data['campaignBalance'] : null;
        $this->container['accountBalance'] = isset($data['accountBalance']) ? $data['accountBalance'] : null;
        $this->container['optimizeAdgroupDayBudgetFlag'] = isset($data['optimizeAdgroupDayBudgetFlag']) ? $data['optimizeAdgroupDayBudgetFlag'] : null;
        $this->container['optimizeCampaignDayBudgetFlag'] = isset($data['optimizeCampaignDayBudgetFlag']) ? $data['optimizeCampaignDayBudgetFlag'] : null;
        $this->container['optimizeAccountDayBudgetFlag'] = isset($data['optimizeAccountDayBudgetFlag']) ? $data['optimizeAccountDayBudgetFlag'] : null;
        $this->container['optimizeAdgroupDayBudget'] = isset($data['optimizeAdgroupDayBudget']) ? $data['optimizeAdgroupDayBudget'] : null;
        $this->container['optimizeCampaignDayBudget'] = isset($data['optimizeCampaignDayBudget']) ? $data['optimizeCampaignDayBudget'] : null;
        $this->container['optimizeAccountDayBudget'] = isset($data['optimizeAccountDayBudget']) ? $data['optimizeAccountDayBudget'] : null;
        $this->container['raiseAccountBalanceFlag'] = isset($data['raiseAccountBalanceFlag']) ? $data['raiseAccountBalanceFlag'] : null;
        $this->container['recommendRecharge'] = isset($data['recommendRecharge']) ? $data['recommendRecharge'] : null;
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
     * Gets raiseDayBudgetFlag
     *
     * @return bool
     */
    public function getRaiseDayBudgetFlag()
    {
        return $this->container['raiseDayBudgetFlag'];
    }

    /**
     * Sets raiseDayBudgetFlag
     *
     * @param bool $raiseDayBudgetFlag raiseDayBudgetFlag
     *
     * @return $this
     */
    public function setRaiseDayBudgetFlag($raiseDayBudgetFlag)
    {
        $this->container['raiseDayBudgetFlag'] = $raiseDayBudgetFlag;

        return $this;
    }

    /**
     * Gets currentAdgroupDayBudget
     *
     * @return int
     */
    public function getCurrentAdgroupDayBudget()
    {
        return $this->container['currentAdgroupDayBudget'];
    }

    /**
     * Sets currentAdgroupDayBudget
     *
     * @param int $currentAdgroupDayBudget currentAdgroupDayBudget
     *
     * @return $this
     */
    public function setCurrentAdgroupDayBudget($currentAdgroupDayBudget)
    {
        $this->container['currentAdgroupDayBudget'] = $currentAdgroupDayBudget;

        return $this;
    }

    /**
     * Gets currentCampaignDayBudget
     *
     * @return int
     */
    public function getCurrentCampaignDayBudget()
    {
        return $this->container['currentCampaignDayBudget'];
    }

    /**
     * Sets currentCampaignDayBudget
     *
     * @param int $currentCampaignDayBudget currentCampaignDayBudget
     *
     * @return $this
     */
    public function setCurrentCampaignDayBudget($currentCampaignDayBudget)
    {
        $this->container['currentCampaignDayBudget'] = $currentCampaignDayBudget;

        return $this;
    }

    /**
     * Gets currentAccountDayBudget
     *
     * @return int
     */
    public function getCurrentAccountDayBudget()
    {
        return $this->container['currentAccountDayBudget'];
    }

    /**
     * Sets currentAccountDayBudget
     *
     * @param int $currentAccountDayBudget currentAccountDayBudget
     *
     * @return $this
     */
    public function setCurrentAccountDayBudget($currentAccountDayBudget)
    {
        $this->container['currentAccountDayBudget'] = $currentAccountDayBudget;

        return $this;
    }

    /**
     * Gets adgroupCostDaily
     *
     * @return int
     */
    public function getAdgroupCostDaily()
    {
        return $this->container['adgroupCostDaily'];
    }

    /**
     * Sets adgroupCostDaily
     *
     * @param int $adgroupCostDaily adgroupCostDaily
     *
     * @return $this
     */
    public function setAdgroupCostDaily($adgroupCostDaily)
    {
        $this->container['adgroupCostDaily'] = $adgroupCostDaily;

        return $this;
    }

    /**
     * Gets campaignCostDaily
     *
     * @return int
     */
    public function getCampaignCostDaily()
    {
        return $this->container['campaignCostDaily'];
    }

    /**
     * Sets campaignCostDaily
     *
     * @param int $campaignCostDaily campaignCostDaily
     *
     * @return $this
     */
    public function setCampaignCostDaily($campaignCostDaily)
    {
        $this->container['campaignCostDaily'] = $campaignCostDaily;

        return $this;
    }

    /**
     * Gets accountCostDaily
     *
     * @return int
     */
    public function getAccountCostDaily()
    {
        return $this->container['accountCostDaily'];
    }

    /**
     * Sets accountCostDaily
     *
     * @param int $accountCostDaily accountCostDaily
     *
     * @return $this
     */
    public function setAccountCostDaily($accountCostDaily)
    {
        $this->container['accountCostDaily'] = $accountCostDaily;

        return $this;
    }

    /**
     * Gets adgroupBalance
     *
     * @return int
     */
    public function getAdgroupBalance()
    {
        return $this->container['adgroupBalance'];
    }

    /**
     * Sets adgroupBalance
     *
     * @param int $adgroupBalance adgroupBalance
     *
     * @return $this
     */
    public function setAdgroupBalance($adgroupBalance)
    {
        $this->container['adgroupBalance'] = $adgroupBalance;

        return $this;
    }

    /**
     * Gets campaignBalance
     *
     * @return int
     */
    public function getCampaignBalance()
    {
        return $this->container['campaignBalance'];
    }

    /**
     * Sets campaignBalance
     *
     * @param int $campaignBalance campaignBalance
     *
     * @return $this
     */
    public function setCampaignBalance($campaignBalance)
    {
        $this->container['campaignBalance'] = $campaignBalance;

        return $this;
    }

    /**
     * Gets accountBalance
     *
     * @return int
     */
    public function getAccountBalance()
    {
        return $this->container['accountBalance'];
    }

    /**
     * Sets accountBalance
     *
     * @param int $accountBalance accountBalance
     *
     * @return $this
     */
    public function setAccountBalance($accountBalance)
    {
        $this->container['accountBalance'] = $accountBalance;

        return $this;
    }

    /**
     * Gets optimizeAdgroupDayBudgetFlag
     *
     * @return bool
     */
    public function getOptimizeAdgroupDayBudgetFlag()
    {
        return $this->container['optimizeAdgroupDayBudgetFlag'];
    }

    /**
     * Sets optimizeAdgroupDayBudgetFlag
     *
     * @param bool $optimizeAdgroupDayBudgetFlag optimizeAdgroupDayBudgetFlag
     *
     * @return $this
     */
    public function setOptimizeAdgroupDayBudgetFlag($optimizeAdgroupDayBudgetFlag)
    {
        $this->container['optimizeAdgroupDayBudgetFlag'] = $optimizeAdgroupDayBudgetFlag;

        return $this;
    }

    /**
     * Gets optimizeCampaignDayBudgetFlag
     *
     * @return bool
     */
    public function getOptimizeCampaignDayBudgetFlag()
    {
        return $this->container['optimizeCampaignDayBudgetFlag'];
    }

    /**
     * Sets optimizeCampaignDayBudgetFlag
     *
     * @param bool $optimizeCampaignDayBudgetFlag optimizeCampaignDayBudgetFlag
     *
     * @return $this
     */
    public function setOptimizeCampaignDayBudgetFlag($optimizeCampaignDayBudgetFlag)
    {
        $this->container['optimizeCampaignDayBudgetFlag'] = $optimizeCampaignDayBudgetFlag;

        return $this;
    }

    /**
     * Gets optimizeAccountDayBudgetFlag
     *
     * @return bool
     */
    public function getOptimizeAccountDayBudgetFlag()
    {
        return $this->container['optimizeAccountDayBudgetFlag'];
    }

    /**
     * Sets optimizeAccountDayBudgetFlag
     *
     * @param bool $optimizeAccountDayBudgetFlag optimizeAccountDayBudgetFlag
     *
     * @return $this
     */
    public function setOptimizeAccountDayBudgetFlag($optimizeAccountDayBudgetFlag)
    {
        $this->container['optimizeAccountDayBudgetFlag'] = $optimizeAccountDayBudgetFlag;

        return $this;
    }

    /**
     * Gets optimizeAdgroupDayBudget
     *
     * @return int
     */
    public function getOptimizeAdgroupDayBudget()
    {
        return $this->container['optimizeAdgroupDayBudget'];
    }

    /**
     * Sets optimizeAdgroupDayBudget
     *
     * @param int $optimizeAdgroupDayBudget optimizeAdgroupDayBudget
     *
     * @return $this
     */
    public function setOptimizeAdgroupDayBudget($optimizeAdgroupDayBudget)
    {
        $this->container['optimizeAdgroupDayBudget'] = $optimizeAdgroupDayBudget;

        return $this;
    }

    /**
     * Gets optimizeCampaignDayBudget
     *
     * @return int
     */
    public function getOptimizeCampaignDayBudget()
    {
        return $this->container['optimizeCampaignDayBudget'];
    }

    /**
     * Sets optimizeCampaignDayBudget
     *
     * @param int $optimizeCampaignDayBudget optimizeCampaignDayBudget
     *
     * @return $this
     */
    public function setOptimizeCampaignDayBudget($optimizeCampaignDayBudget)
    {
        $this->container['optimizeCampaignDayBudget'] = $optimizeCampaignDayBudget;

        return $this;
    }

    /**
     * Gets optimizeAccountDayBudget
     *
     * @return int
     */
    public function getOptimizeAccountDayBudget()
    {
        return $this->container['optimizeAccountDayBudget'];
    }

    /**
     * Sets optimizeAccountDayBudget
     *
     * @param int $optimizeAccountDayBudget optimizeAccountDayBudget
     *
     * @return $this
     */
    public function setOptimizeAccountDayBudget($optimizeAccountDayBudget)
    {
        $this->container['optimizeAccountDayBudget'] = $optimizeAccountDayBudget;

        return $this;
    }

    /**
     * Gets raiseAccountBalanceFlag
     *
     * @return bool
     */
    public function getRaiseAccountBalanceFlag()
    {
        return $this->container['raiseAccountBalanceFlag'];
    }

    /**
     * Sets raiseAccountBalanceFlag
     *
     * @param bool $raiseAccountBalanceFlag raiseAccountBalanceFlag
     *
     * @return $this
     */
    public function setRaiseAccountBalanceFlag($raiseAccountBalanceFlag)
    {
        $this->container['raiseAccountBalanceFlag'] = $raiseAccountBalanceFlag;

        return $this;
    }

    /**
     * Gets recommendRecharge
     *
     * @return int
     */
    public function getRecommendRecharge()
    {
        return $this->container['recommendRecharge'];
    }

    /**
     * Sets recommendRecharge
     *
     * @param int $recommendRecharge recommendRecharge
     *
     * @return $this
     */
    public function setRecommendRecharge($recommendRecharge)
    {
        $this->container['recommendRecharge'] = $recommendRecharge;

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


