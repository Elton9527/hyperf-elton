<?php
/**
 * AsyncReportsAddRequest
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
 * AsyncReportsAddRequest Class Doc Comment
 *
 * @category Class
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AsyncReportsAddRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AsyncReportsAddRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accountId' => 'int',
        'taskName' => 'string',
        'reportFields' => 'string[]',
        'level' => '\TencentAds\Model\AsyncReportLevel',
        'filtering' => '\TencentAds\Model\AsyncReportsFilteringStruct[]',
        'timeLine' => '\TencentAds\Model\TimeLine',
        'groupBy' => 'string[]',
        'granularity' => '\TencentAds\Model\TimeGranularity',
        'date' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accountId' => 'int64',
        'taskName' => null,
        'reportFields' => null,
        'level' => null,
        'filtering' => null,
        'timeLine' => null,
        'groupBy' => null,
        'granularity' => null,
        'date' => null
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
        'accountId' => 'account_id',
        'taskName' => 'task_name',
        'reportFields' => 'report_fields',
        'level' => 'level',
        'filtering' => 'filtering',
        'timeLine' => 'time_line',
        'groupBy' => 'group_by',
        'granularity' => 'granularity',
        'date' => 'date'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountId' => 'setAccountId',
        'taskName' => 'setTaskName',
        'reportFields' => 'setReportFields',
        'level' => 'setLevel',
        'filtering' => 'setFiltering',
        'timeLine' => 'setTimeLine',
        'groupBy' => 'setGroupBy',
        'granularity' => 'setGranularity',
        'date' => 'setDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountId' => 'getAccountId',
        'taskName' => 'getTaskName',
        'reportFields' => 'getReportFields',
        'level' => 'getLevel',
        'filtering' => 'getFiltering',
        'timeLine' => 'getTimeLine',
        'groupBy' => 'getGroupBy',
        'granularity' => 'getGranularity',
        'date' => 'getDate'
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
        $this->container['accountId'] = isset($data['accountId']) ? $data['accountId'] : null;
        $this->container['taskName'] = isset($data['taskName']) ? $data['taskName'] : null;
        $this->container['reportFields'] = isset($data['reportFields']) ? $data['reportFields'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['filtering'] = isset($data['filtering']) ? $data['filtering'] : null;
        $this->container['timeLine'] = isset($data['timeLine']) ? $data['timeLine'] : null;
        $this->container['groupBy'] = isset($data['groupBy']) ? $data['groupBy'] : null;
        $this->container['granularity'] = isset($data['granularity']) ? $data['granularity'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
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
     * Gets taskName
     *
     * @return string
     */
    public function getTaskName()
    {
        return $this->container['taskName'];
    }

    /**
     * Sets taskName
     *
     * @param string $taskName taskName
     *
     * @return $this
     */
    public function setTaskName($taskName)
    {
        $this->container['taskName'] = $taskName;

        return $this;
    }

    /**
     * Gets reportFields
     *
     * @return string[]
     */
    public function getReportFields()
    {
        return $this->container['reportFields'];
    }

    /**
     * Sets reportFields
     *
     * @param string[] $reportFields reportFields
     *
     * @return $this
     */
    public function setReportFields($reportFields)
    {
        $this->container['reportFields'] = $reportFields;

        return $this;
    }

    /**
     * Gets level
     *
     * @return \TencentAds\Model\AsyncReportLevel
     */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
     * Sets level
     *
     * @param \TencentAds\Model\AsyncReportLevel $level level
     *
     * @return $this
     */
    public function setLevel($level)
    {
        $this->container['level'] = $level;

        return $this;
    }

    /**
     * Gets filtering
     *
     * @return \TencentAds\Model\AsyncReportsFilteringStruct[]
     */
    public function getFiltering()
    {
        return $this->container['filtering'];
    }

    /**
     * Sets filtering
     *
     * @param \TencentAds\Model\AsyncReportsFilteringStruct[] $filtering filtering
     *
     * @return $this
     */
    public function setFiltering($filtering)
    {
        $this->container['filtering'] = $filtering;

        return $this;
    }

    /**
     * Gets timeLine
     *
     * @return \TencentAds\Model\TimeLine
     */
    public function getTimeLine()
    {
        return $this->container['timeLine'];
    }

    /**
     * Sets timeLine
     *
     * @param \TencentAds\Model\TimeLine $timeLine timeLine
     *
     * @return $this
     */
    public function setTimeLine($timeLine)
    {
        $this->container['timeLine'] = $timeLine;

        return $this;
    }

    /**
     * Gets groupBy
     *
     * @return string[]
     */
    public function getGroupBy()
    {
        return $this->container['groupBy'];
    }

    /**
     * Sets groupBy
     *
     * @param string[] $groupBy groupBy
     *
     * @return $this
     */
    public function setGroupBy($groupBy)
    {
        $this->container['groupBy'] = $groupBy;

        return $this;
    }

    /**
     * Gets granularity
     *
     * @return \TencentAds\Model\TimeGranularity
     */
    public function getGranularity()
    {
        return $this->container['granularity'];
    }

    /**
     * Sets granularity
     *
     * @param \TencentAds\Model\TimeGranularity $granularity granularity
     *
     * @return $this
     */
    public function setGranularity($granularity)
    {
        $this->container['granularity'] = $granularity;

        return $this;
    }

    /**
     * Gets date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param string $date date
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

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

