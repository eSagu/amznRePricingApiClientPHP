<?php
/**
 * RepricingItemSalesRankingsDTO
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
 * RepricingItemSalesRankingsDTO Class Doc Comment
 *
 * @category    Class
 * @description The repricing item&#39;s sales rankings as amzn.
 * @package     eSagu\Amzn\RePricing\V1
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RepricingItemSalesRankingsDTO implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'RepricingItemSalesRankingsDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'inserted' => '\DateTime',
        'updated' => '\DateTime',
        'lowest_display_on_website_sales_rank_name' => 'string',
        'lowest_display_on_website_sales_rank' => 'int',
        'sales_rankings' => 'map[string,int]'
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
        'inserted' => 'inserted',
        'updated' => 'updated',
        'lowest_display_on_website_sales_rank_name' => 'lowestDisplayOnWebsiteSalesRankName',
        'lowest_display_on_website_sales_rank' => 'lowestDisplayOnWebsiteSalesRank',
        'sales_rankings' => 'salesRankings'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'inserted' => 'setInserted',
        'updated' => 'setUpdated',
        'lowest_display_on_website_sales_rank_name' => 'setLowestDisplayOnWebsiteSalesRankName',
        'lowest_display_on_website_sales_rank' => 'setLowestDisplayOnWebsiteSalesRank',
        'sales_rankings' => 'setSalesRankings'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'inserted' => 'getInserted',
        'updated' => 'getUpdated',
        'lowest_display_on_website_sales_rank_name' => 'getLowestDisplayOnWebsiteSalesRankName',
        'lowest_display_on_website_sales_rank' => 'getLowestDisplayOnWebsiteSalesRank',
        'sales_rankings' => 'getSalesRankings'
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
        $this->container['inserted'] = isset($data['inserted']) ? $data['inserted'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['lowest_display_on_website_sales_rank_name'] = isset($data['lowest_display_on_website_sales_rank_name']) ? $data['lowest_display_on_website_sales_rank_name'] : null;
        $this->container['lowest_display_on_website_sales_rank'] = isset($data['lowest_display_on_website_sales_rank']) ? $data['lowest_display_on_website_sales_rank'] : null;
        $this->container['sales_rankings'] = isset($data['sales_rankings']) ? $data['sales_rankings'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

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

        return true;
    }


    /**
     * Gets inserted
     * @return \DateTime
     */
    public function getInserted()
    {
        return $this->container['inserted'];
    }

    /**
     * Sets inserted
     * @param \DateTime $inserted
     * @return $this
     */
    public function setInserted($inserted)
    {
        $this->container['inserted'] = $inserted;

        return $this;
    }

    /**
     * Gets updated
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
     * Sets updated
     * @param \DateTime $updated
     * @return $this
     */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;

        return $this;
    }

    /**
     * Gets lowest_display_on_website_sales_rank_name
     * @return string
     */
    public function getLowestDisplayOnWebsiteSalesRankName()
    {
        return $this->container['lowest_display_on_website_sales_rank_name'];
    }

    /**
     * Sets lowest_display_on_website_sales_rank_name
     * @param string $lowest_display_on_website_sales_rank_name
     * @return $this
     */
    public function setLowestDisplayOnWebsiteSalesRankName($lowest_display_on_website_sales_rank_name)
    {
        $this->container['lowest_display_on_website_sales_rank_name'] = $lowest_display_on_website_sales_rank_name;

        return $this;
    }

    /**
     * Gets lowest_display_on_website_sales_rank
     * @return int
     */
    public function getLowestDisplayOnWebsiteSalesRank()
    {
        return $this->container['lowest_display_on_website_sales_rank'];
    }

    /**
     * Sets lowest_display_on_website_sales_rank
     * @param int $lowest_display_on_website_sales_rank
     * @return $this
     */
    public function setLowestDisplayOnWebsiteSalesRank($lowest_display_on_website_sales_rank)
    {
        $this->container['lowest_display_on_website_sales_rank'] = $lowest_display_on_website_sales_rank;

        return $this;
    }

    /**
     * Gets sales_rankings
     * @return map[string,int]
     */
    public function getSalesRankings()
    {
        return $this->container['sales_rankings'];
    }

    /**
     * Sets sales_rankings
     * @param map[string,int] $sales_rankings
     * @return $this
     */
    public function setSalesRankings($sales_rankings)
    {
        $this->container['sales_rankings'] = $sales_rankings;

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


