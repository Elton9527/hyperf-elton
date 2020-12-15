<?php
/**
 * AppAndroidMyappSpec
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
 * AppAndroidMyappSpec Class Doc Comment
 *
 * @category Class
 * @description 应用宝 app 信息
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AppAndroidMyappSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'app_android_myapp_spec';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'packname' => 'string',
        'version' => 'string',
        'icon' => 'string',
        'packageSize' => 'string',
        'channelPackageSpec' => '\TencentAds\Model\ChannelPackageSpecStruct[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'packname' => null,
        'version' => null,
        'icon' => null,
        'packageSize' => null,
        'channelPackageSpec' => null
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
        'packname' => 'packname',
        'version' => 'version',
        'icon' => 'icon',
        'packageSize' => 'package_size',
        'channelPackageSpec' => 'channel_package_spec'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'packname' => 'setPackname',
        'version' => 'setVersion',
        'icon' => 'setIcon',
        'packageSize' => 'setPackageSize',
        'channelPackageSpec' => 'setChannelPackageSpec'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'packname' => 'getPackname',
        'version' => 'getVersion',
        'icon' => 'getIcon',
        'packageSize' => 'getPackageSize',
        'channelPackageSpec' => 'getChannelPackageSpec'
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
        $this->container['packname'] = isset($data['packname']) ? $data['packname'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['icon'] = isset($data['icon']) ? $data['icon'] : null;
        $this->container['packageSize'] = isset($data['packageSize']) ? $data['packageSize'] : null;
        $this->container['channelPackageSpec'] = isset($data['channelPackageSpec']) ? $data['channelPackageSpec'] : null;
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
     * Gets packname
     *
     * @return string
     */
    public function getPackname()
    {
        return $this->container['packname'];
    }

    /**
     * Sets packname
     *
     * @param string $packname packname
     *
     * @return $this
     */
    public function setPackname($packname)
    {
        $this->container['packname'] = $packname;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string $version version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets icon
     *
     * @return string
     */
    public function getIcon()
    {
        return $this->container['icon'];
    }

    /**
     * Sets icon
     *
     * @param string $icon icon
     *
     * @return $this
     */
    public function setIcon($icon)
    {
        $this->container['icon'] = $icon;

        return $this;
    }

    /**
     * Gets packageSize
     *
     * @return string
     */
    public function getPackageSize()
    {
        return $this->container['packageSize'];
    }

    /**
     * Sets packageSize
     *
     * @param string $packageSize packageSize
     *
     * @return $this
     */
    public function setPackageSize($packageSize)
    {
        $this->container['packageSize'] = $packageSize;

        return $this;
    }

    /**
     * Gets channelPackageSpec
     *
     * @return \TencentAds\Model\ChannelPackageSpecStruct[]
     */
    public function getChannelPackageSpec()
    {
        return $this->container['channelPackageSpec'];
    }

    /**
     * Sets channelPackageSpec
     *
     * @param \TencentAds\Model\ChannelPackageSpecStruct[] $channelPackageSpec channelPackageSpec
     *
     * @return $this
     */
    public function setChannelPackageSpec($channelPackageSpec)
    {
        $this->container['channelPackageSpec'] = $channelPackageSpec;

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


