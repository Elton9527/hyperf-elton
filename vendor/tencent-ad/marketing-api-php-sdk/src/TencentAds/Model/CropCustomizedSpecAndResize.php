<?php
/**
 * CropCustomizedSpecAndResize
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
 * CropCustomizedSpecAndResize Class Doc Comment
 *
 * @category Class
 * @description 自定义裁剪后缩放信息
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CropCustomizedSpecAndResize implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'crop_customized_spec_and_resize';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cropWidth' => 'int',
        'cropHeight' => 'int',
        'axisX' => 'int',
        'axisY' => 'int',
        'resizeWidth' => 'int',
        'resizeHeight' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cropWidth' => 'int64',
        'cropHeight' => 'int64',
        'axisX' => 'int64',
        'axisY' => 'int64',
        'resizeWidth' => 'int64',
        'resizeHeight' => 'int64'
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
        'cropWidth' => 'crop_width',
        'cropHeight' => 'crop_height',
        'axisX' => 'axis_x',
        'axisY' => 'axis_y',
        'resizeWidth' => 'resize_width',
        'resizeHeight' => 'resize_height'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cropWidth' => 'setCropWidth',
        'cropHeight' => 'setCropHeight',
        'axisX' => 'setAxisX',
        'axisY' => 'setAxisY',
        'resizeWidth' => 'setResizeWidth',
        'resizeHeight' => 'setResizeHeight'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cropWidth' => 'getCropWidth',
        'cropHeight' => 'getCropHeight',
        'axisX' => 'getAxisX',
        'axisY' => 'getAxisY',
        'resizeWidth' => 'getResizeWidth',
        'resizeHeight' => 'getResizeHeight'
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
        $this->container['cropWidth'] = isset($data['cropWidth']) ? $data['cropWidth'] : null;
        $this->container['cropHeight'] = isset($data['cropHeight']) ? $data['cropHeight'] : null;
        $this->container['axisX'] = isset($data['axisX']) ? $data['axisX'] : null;
        $this->container['axisY'] = isset($data['axisY']) ? $data['axisY'] : null;
        $this->container['resizeWidth'] = isset($data['resizeWidth']) ? $data['resizeWidth'] : null;
        $this->container['resizeHeight'] = isset($data['resizeHeight']) ? $data['resizeHeight'] : null;
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
     * Gets cropWidth
     *
     * @return int
     */
    public function getCropWidth()
    {
        return $this->container['cropWidth'];
    }

    /**
     * Sets cropWidth
     *
     * @param int $cropWidth cropWidth
     *
     * @return $this
     */
    public function setCropWidth($cropWidth)
    {
        $this->container['cropWidth'] = $cropWidth;

        return $this;
    }

    /**
     * Gets cropHeight
     *
     * @return int
     */
    public function getCropHeight()
    {
        return $this->container['cropHeight'];
    }

    /**
     * Sets cropHeight
     *
     * @param int $cropHeight cropHeight
     *
     * @return $this
     */
    public function setCropHeight($cropHeight)
    {
        $this->container['cropHeight'] = $cropHeight;

        return $this;
    }

    /**
     * Gets axisX
     *
     * @return int
     */
    public function getAxisX()
    {
        return $this->container['axisX'];
    }

    /**
     * Sets axisX
     *
     * @param int $axisX axisX
     *
     * @return $this
     */
    public function setAxisX($axisX)
    {
        $this->container['axisX'] = $axisX;

        return $this;
    }

    /**
     * Gets axisY
     *
     * @return int
     */
    public function getAxisY()
    {
        return $this->container['axisY'];
    }

    /**
     * Sets axisY
     *
     * @param int $axisY axisY
     *
     * @return $this
     */
    public function setAxisY($axisY)
    {
        $this->container['axisY'] = $axisY;

        return $this;
    }

    /**
     * Gets resizeWidth
     *
     * @return int
     */
    public function getResizeWidth()
    {
        return $this->container['resizeWidth'];
    }

    /**
     * Sets resizeWidth
     *
     * @param int $resizeWidth resizeWidth
     *
     * @return $this
     */
    public function setResizeWidth($resizeWidth)
    {
        $this->container['resizeWidth'] = $resizeWidth;

        return $this;
    }

    /**
     * Gets resizeHeight
     *
     * @return int
     */
    public function getResizeHeight()
    {
        return $this->container['resizeHeight'];
    }

    /**
     * Sets resizeHeight
     *
     * @param int $resizeHeight resizeHeight
     *
     * @return $this
     */
    public function setResizeHeight($resizeHeight)
    {
        $this->container['resizeHeight'] = $resizeHeight;

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


