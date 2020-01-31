<?php
/**
 * UserServiceMWSAccountDTO
 *
 * PHP version 5
 *
 * @category Class
 * @package  eSagu\Amzn\RePricing\V1
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * eSagu amzn RePricing API
 *
 * eSagu API to reprice items on amazon.
 *
 * OpenAPI spec version: 2.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace eSagu\Amzn\RePricing\V1\Model;

use \ArrayAccess;

/**
 * UserServiceMWSAccountDTO Class Doc Comment
 *
 * @category    Class
 * @package     eSagu\Amzn\RePricing\V1
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UserServiceMWSAccountDTO implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'UserServiceMWSAccountDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'amazon_mws_endpoint' => '\eSagu\Amzn\RePricing\V1\Model\AmazonMWSEndpointDTO',
        'aws_access_key_id' => 'string',
        'has_mws_auth_token' => 'bool',
        'marketplace_id' => 'string',
        'mws_auth_token' => 'string',
        'secret_key' => 'string',
        'seller_id' => 'string',
        'state' => 'string'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'amazon_mws_endpoint' => 'amazonMWSEndpoint',
        'aws_access_key_id' => 'awsAccessKeyId',
        'has_mws_auth_token' => 'hasMwsAuthToken',
        'marketplace_id' => 'marketplaceId',
        'mws_auth_token' => 'mwsAuthToken',
        'secret_key' => 'secretKey',
        'seller_id' => 'sellerId',
        'state' => 'state'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'amazon_mws_endpoint' => 'setAmazonMwsEndpoint',
        'aws_access_key_id' => 'setAwsAccessKeyId',
        'has_mws_auth_token' => 'setHasMwsAuthToken',
        'marketplace_id' => 'setMarketplaceId',
        'mws_auth_token' => 'setMwsAuthToken',
        'secret_key' => 'setSecretKey',
        'seller_id' => 'setSellerId',
        'state' => 'setState'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'amazon_mws_endpoint' => 'getAmazonMwsEndpoint',
        'aws_access_key_id' => 'getAwsAccessKeyId',
        'has_mws_auth_token' => 'getHasMwsAuthToken',
        'marketplace_id' => 'getMarketplaceId',
        'mws_auth_token' => 'getMwsAuthToken',
        'secret_key' => 'getSecretKey',
        'seller_id' => 'getSellerId',
        'state' => 'getState'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    const STATE_UNCHECKED = 'UNCHECKED';
    const STATE_OK = 'OK';
    const STATE_ERROR = 'ERROR';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_UNCHECKED,
            self::STATE_OK,
            self::STATE_ERROR,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['amazon_mws_endpoint'] = isset($data['amazon_mws_endpoint']) ? $data['amazon_mws_endpoint'] : null;
        $this->container['aws_access_key_id'] = isset($data['aws_access_key_id']) ? $data['aws_access_key_id'] : null;
        $this->container['has_mws_auth_token'] = isset($data['has_mws_auth_token']) ? $data['has_mws_auth_token'] : null;
        $this->container['marketplace_id'] = isset($data['marketplace_id']) ? $data['marketplace_id'] : null;
        $this->container['mws_auth_token'] = isset($data['mws_auth_token']) ? $data['mws_auth_token'] : null;
        $this->container['secret_key'] = isset($data['secret_key']) ? $data['secret_key'] : null;
        $this->container['seller_id'] = isset($data['seller_id']) ? $data['seller_id'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = ["UNCHECKED", "OK", "ERROR"];
        if (!in_array($this->container['state'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'state', must be one of 'UNCHECKED', 'OK', 'ERROR'.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        $allowed_values = ["UNCHECKED", "OK", "ERROR"];
        if (!in_array($this->container['state'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets amazon_mws_endpoint
     * @return \eSagu\Amzn\RePricing\V1\Model\AmazonMWSEndpointDTO
     */
    public function getAmazonMwsEndpoint()
    {
        return $this->container['amazon_mws_endpoint'];
    }

    /**
     * Sets amazon_mws_endpoint
     * @param \eSagu\Amzn\RePricing\V1\Model\AmazonMWSEndpointDTO $amazon_mws_endpoint
     * @return $this
     */
    public function setAmazonMwsEndpoint($amazon_mws_endpoint)
    {
        $this->container['amazon_mws_endpoint'] = $amazon_mws_endpoint;

        return $this;
    }

    /**
     * Gets aws_access_key_id
     * @return string
     */
    public function getAwsAccessKeyId()
    {
        return $this->container['aws_access_key_id'];
    }

    /**
     * Sets aws_access_key_id
     * @param string $aws_access_key_id
     * @return $this
     */
    public function setAwsAccessKeyId($aws_access_key_id)
    {
        $this->container['aws_access_key_id'] = $aws_access_key_id;

        return $this;
    }

    /**
     * Gets has_mws_auth_token
     * @return bool
     */
    public function getHasMwsAuthToken()
    {
        return $this->container['has_mws_auth_token'];
    }

    /**
     * Sets has_mws_auth_token
     * @param bool $has_mws_auth_token
     * @return $this
     */
    public function setHasMwsAuthToken($has_mws_auth_token)
    {
        $this->container['has_mws_auth_token'] = $has_mws_auth_token;

        return $this;
    }

    /**
     * Gets marketplace_id
     * @return string
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id
     * @param string $marketplace_id
     * @return $this
     */
    public function setMarketplaceId($marketplace_id)
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Gets mws_auth_token
     * @return string
     */
    public function getMwsAuthToken()
    {
        return $this->container['mws_auth_token'];
    }

    /**
     * Sets mws_auth_token
     * @param string $mws_auth_token
     * @return $this
     */
    public function setMwsAuthToken($mws_auth_token)
    {
        $this->container['mws_auth_token'] = $mws_auth_token;

        return $this;
    }

    /**
     * Gets secret_key
     * @return string
     */
    public function getSecretKey()
    {
        return $this->container['secret_key'];
    }

    /**
     * Sets secret_key
     * @param string $secret_key
     * @return $this
     */
    public function setSecretKey($secret_key)
    {
        $this->container['secret_key'] = $secret_key;

        return $this;
    }

    /**
     * Gets seller_id
     * @return string
     */
    public function getSellerId()
    {
        return $this->container['seller_id'];
    }

    /**
     * Sets seller_id
     * @param string $seller_id
     * @return $this
     */
    public function setSellerId($seller_id)
    {
        $this->container['seller_id'] = $seller_id;

        return $this;
    }

    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     * @param string $state
     * @return $this
     */
    public function setState($state)
    {
        $allowed_values = array('UNCHECKED', 'OK', 'ERROR');
        if (!is_null($state) && (!in_array($state, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'state', must be one of 'UNCHECKED', 'OK', 'ERROR'");
        }
        $this->container['state'] = $state;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\eSagu\Amzn\RePricing\V1\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\eSagu\Amzn\RePricing\V1\ObjectSerializer::sanitizeForSerialization($this));
    }
}

