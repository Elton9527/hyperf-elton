<?php
/**
 * AudienceGrantRelationsAddGrantToBusinessSpec
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
 * AudienceGrantRelationsAddGrantToBusinessSpec Class Doc Comment
 *
 * @category Class
 * @description 授权给商务管家账号认领的账号的授权信息
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AudienceGrantRelationsAddGrantToBusinessSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AudienceGrantRelationsAddGrantToBusinessSpec';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'grantBusinessId' => 'int',
        'grantScopeType' => '\TencentAds\Model\AudienceGrantScopeType',
        'grantBusinessPermission' => '\TencentAds\Model\GrantBusinessPermission',
        'grantAccountPermission' => '\TencentAds\Model\AccountPermission[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'grantBusinessId' => 'int64',
        'grantScopeType' => null,
        'grantBusinessPermission' => null,
        'grantAccountPermission' => null
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
        'grantBusinessId' => 'grant_business_id',
        'grantScopeType' => 'grant_scope_type',
        'grantBusinessPermission' => 'grant_business_permission',
        'grantAccountPermission' => 'grant_account_permission'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'grantBusinessId' => 'setGrantBusinessId',
        'grantScopeType' => 'setGrantScopeType',
        'grantBusinessPermission' => 'setGrantBusinessPermission',
        'grantAccountPermission' => 'setGrantAccountPermission'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'grantBusinessId' => 'getGrantBusinessId',
        'grantScopeType' => 'getGrantScopeType',
        'grantBusinessPermission' => 'getGrantBusinessPermission',
        'grantAccountPermission' => 'getGrantAccountPermission'
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
        $this->container['grantBusinessId'] = isset($data['grantBusinessId']) ? $data['grantBusinessId'] : null;
        $this->container['grantScopeType'] = isset($data['grantScopeType']) ? $data['grantScopeType'] : null;
        $this->container['grantBusinessPermission'] = isset($data['grantBusinessPermission']) ? $data['grantBusinessPermission'] : null;
        $this->container['grantAccountPermission'] = isset($data['grantAccountPermission']) ? $data['grantAccountPermission'] : null;
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
     * Gets grantBusinessId
     *
     * @return int
     */
    public function getGrantBusinessId()
    {
        return $this->container['grantBusinessId'];
    }

    /**
     * Sets grantBusinessId
     *
     * @param int $grantBusinessId grantBusinessId
     *
     * @return $this
     */
    public function setGrantBusinessId($grantBusinessId)
    {
        $this->container['grantBusinessId'] = $grantBusinessId;

        return $this;
    }

    /**
     * Gets grantScopeType
     *
     * @return \TencentAds\Model\AudienceGrantScopeType
     */
    public function getGrantScopeType()
    {
        return $this->container['grantScopeType'];
    }

    /**
     * Sets grantScopeType
     *
     * @param \TencentAds\Model\AudienceGrantScopeType $grantScopeType grantScopeType
     *
     * @return $this
     */
    public function setGrantScopeType($grantScopeType)
    {
        $this->container['grantScopeType'] = $grantScopeType;

        return $this;
    }

    /**
     * Gets grantBusinessPermission
     *
     * @return \TencentAds\Model\GrantBusinessPermission
     */
    public function getGrantBusinessPermission()
    {
        return $this->container['grantBusinessPermission'];
    }

    /**
     * Sets grantBusinessPermission
     *
     * @param \TencentAds\Model\GrantBusinessPermission $grantBusinessPermission grantBusinessPermission
     *
     * @return $this
     */
    public function setGrantBusinessPermission($grantBusinessPermission)
    {
        $this->container['grantBusinessPermission'] = $grantBusinessPermission;

        return $this;
    }

    /**
     * Gets grantAccountPermission
     *
     * @return \TencentAds\Model\AccountPermission[]
     */
    public function getGrantAccountPermission()
    {
        return $this->container['grantAccountPermission'];
    }

    /**
     * Sets grantAccountPermission
     *
     * @param \TencentAds\Model\AccountPermission[] $grantAccountPermission grantAccountPermission
     *
     * @return $this
     */
    public function setGrantAccountPermission($grantAccountPermission)
    {
        $this->container['grantAccountPermission'] = $grantAccountPermission;

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


