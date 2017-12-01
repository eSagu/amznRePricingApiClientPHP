<?php
/**
 * RepricingFeedSubmissionDTO
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
 * RepricingFeedSubmissionDTO Class Doc Comment
 *
 * @category    Class
 * @package     eSagu\Amzn\RePricing\V1
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RepricingFeedSubmissionDTO implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'RepricingFeedSubmissionDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'feed_submission_id' => 'string',
        'feed_type' => 'string',
        'inserted' => '\DateTime',
        'processing_status' => 'string',
        'updated' => '\DateTime'
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
        'feed_submission_id' => 'feedSubmissionId',
        'feed_type' => 'feedType',
        'inserted' => 'inserted',
        'processing_status' => 'processingStatus',
        'updated' => 'updated'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'feed_submission_id' => 'setFeedSubmissionId',
        'feed_type' => 'setFeedType',
        'inserted' => 'setInserted',
        'processing_status' => 'setProcessingStatus',
        'updated' => 'setUpdated'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'feed_submission_id' => 'getFeedSubmissionId',
        'feed_type' => 'getFeedType',
        'inserted' => 'getInserted',
        'processing_status' => 'getProcessingStatus',
        'updated' => 'getUpdated'
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

    const FEED_TYPE_PRODUCT_DATA = '_POST_PRODUCT_DATA_';
    const FEED_TYPE_PRODUCT_RELATIONSHIP_DATA = '_POST_PRODUCT_RELATIONSHIP_DATA_';
    const FEED_TYPE_INVENTORY_AVAILABILITY_DATA = '_POST_INVENTORY_AVAILABILITY_DATA_';
    const FEED_TYPE_PRODUCT_OVERRIDES_DATA = '_POST_PRODUCT_OVERRIDES_DATA_';
    const FEED_TYPE_PRODUCT_PRICING_DATA = '_POST_PRODUCT_PRICING_DATA_';
    const FEED_TYPE_PRODUCT_IMAGE_DATA = '_POST_PRODUCT_IMAGE_DATA_';
    const FEED_TYPE_FLAT_FILE_INVLOADER_DATA = '_POST_FLAT_FILE_INVLOADER_DATA_';
    const FEED_TYPE_FLAT_FILE_BOOKLOADER_DATA = '_POST_FLAT_FILE_BOOKLOADER_DATA_';
    const FEED_TYPE_FLAT_FILE_CONVERGENCE_LISTINGS_DATA = '_POST_FLAT_FILE_CONVERGENCE_LISTINGS_DATA_';
    const FEED_TYPE_FLAT_FILE_LISTINGS_DATA = '_POST_FLAT_FILE_LISTINGS_DATA_';
    const FEED_TYPE_FLAT_FILE_PRICEANDQUANTITYONLY_UPDATE_DATA = '_POST_FLAT_FILE_PRICEANDQUANTITYONLY_UPDATE_DATA_';
    const FEED_TYPE_UIEE_BOOKLOADER_DATA = '_POST_UIEE_BOOKLOADER_DATA_';
    const FEED_TYPE_STD_ACES_DATA = '_POST_STD_ACES_DATA_';
    const PROCESSING_STATUS_AWAITING_ASYNCHRONOUS_REPLY = '_AWAITING_ASYNCHRONOUS_REPLY_';
    const PROCESSING_STATUS_CANCELLED = '_CANCELLED_';
    const PROCESSING_STATUS_DONE = '_DONE_';
    const PROCESSING_STATUS_IN_PROGRESS = '_IN_PROGRESS_';
    const PROCESSING_STATUS_IN_SAFETY_NET = '_IN_SAFETY_NET_';
    const PROCESSING_STATUS_SUBMITTED = '_SUBMITTED_';
    const PROCESSING_STATUS_UNCONFIRMED = '_UNCONFIRMED_';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getFeedTypeAllowableValues()
    {
        return [
            self::FEED_TYPE_PRODUCT_DATA,
            self::FEED_TYPE_PRODUCT_RELATIONSHIP_DATA,
            self::FEED_TYPE_INVENTORY_AVAILABILITY_DATA,
            self::FEED_TYPE_PRODUCT_OVERRIDES_DATA,
            self::FEED_TYPE_PRODUCT_PRICING_DATA,
            self::FEED_TYPE_PRODUCT_IMAGE_DATA,
            self::FEED_TYPE_FLAT_FILE_INVLOADER_DATA,
            self::FEED_TYPE_FLAT_FILE_BOOKLOADER_DATA,
            self::FEED_TYPE_FLAT_FILE_CONVERGENCE_LISTINGS_DATA,
            self::FEED_TYPE_FLAT_FILE_LISTINGS_DATA,
            self::FEED_TYPE_FLAT_FILE_PRICEANDQUANTITYONLY_UPDATE_DATA,
            self::FEED_TYPE_UIEE_BOOKLOADER_DATA,
            self::FEED_TYPE_STD_ACES_DATA,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getProcessingStatusAllowableValues()
    {
        return [
            self::PROCESSING_STATUS_AWAITING_ASYNCHRONOUS_REPLY,
            self::PROCESSING_STATUS_CANCELLED,
            self::PROCESSING_STATUS_DONE,
            self::PROCESSING_STATUS_IN_PROGRESS,
            self::PROCESSING_STATUS_IN_SAFETY_NET,
            self::PROCESSING_STATUS_SUBMITTED,
            self::PROCESSING_STATUS_UNCONFIRMED,
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
        $this->container['feed_submission_id'] = isset($data['feed_submission_id']) ? $data['feed_submission_id'] : null;
        $this->container['feed_type'] = isset($data['feed_type']) ? $data['feed_type'] : null;
        $this->container['inserted'] = isset($data['inserted']) ? $data['inserted'] : null;
        $this->container['processing_status'] = isset($data['processing_status']) ? $data['processing_status'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = ["_POST_PRODUCT_DATA_", "_POST_PRODUCT_RELATIONSHIP_DATA_", "_POST_INVENTORY_AVAILABILITY_DATA_", "_POST_PRODUCT_OVERRIDES_DATA_", "_POST_PRODUCT_PRICING_DATA_", "_POST_PRODUCT_IMAGE_DATA_", "_POST_FLAT_FILE_INVLOADER_DATA_", "_POST_FLAT_FILE_BOOKLOADER_DATA_", "_POST_FLAT_FILE_CONVERGENCE_LISTINGS_DATA_", "_POST_FLAT_FILE_LISTINGS_DATA_", "_POST_FLAT_FILE_PRICEANDQUANTITYONLY_UPDATE_DATA_", "_POST_UIEE_BOOKLOADER_DATA_", "_POST_STD_ACES_DATA_"];
        if (!in_array($this->container['feed_type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'feed_type', must be one of '_POST_PRODUCT_DATA_', '_POST_PRODUCT_RELATIONSHIP_DATA_', '_POST_INVENTORY_AVAILABILITY_DATA_', '_POST_PRODUCT_OVERRIDES_DATA_', '_POST_PRODUCT_PRICING_DATA_', '_POST_PRODUCT_IMAGE_DATA_', '_POST_FLAT_FILE_INVLOADER_DATA_', '_POST_FLAT_FILE_BOOKLOADER_DATA_', '_POST_FLAT_FILE_CONVERGENCE_LISTINGS_DATA_', '_POST_FLAT_FILE_LISTINGS_DATA_', '_POST_FLAT_FILE_PRICEANDQUANTITYONLY_UPDATE_DATA_', '_POST_UIEE_BOOKLOADER_DATA_', '_POST_STD_ACES_DATA_'.";
        }

        $allowed_values = ["_AWAITING_ASYNCHRONOUS_REPLY_", "_CANCELLED_", "_DONE_", "_IN_PROGRESS_", "_IN_SAFETY_NET_", "_SUBMITTED_", "_UNCONFIRMED_"];
        if (!in_array($this->container['processing_status'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'processing_status', must be one of '_AWAITING_ASYNCHRONOUS_REPLY_', '_CANCELLED_', '_DONE_', '_IN_PROGRESS_', '_IN_SAFETY_NET_', '_SUBMITTED_', '_UNCONFIRMED_'.";
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

        $allowed_values = ["_POST_PRODUCT_DATA_", "_POST_PRODUCT_RELATIONSHIP_DATA_", "_POST_INVENTORY_AVAILABILITY_DATA_", "_POST_PRODUCT_OVERRIDES_DATA_", "_POST_PRODUCT_PRICING_DATA_", "_POST_PRODUCT_IMAGE_DATA_", "_POST_FLAT_FILE_INVLOADER_DATA_", "_POST_FLAT_FILE_BOOKLOADER_DATA_", "_POST_FLAT_FILE_CONVERGENCE_LISTINGS_DATA_", "_POST_FLAT_FILE_LISTINGS_DATA_", "_POST_FLAT_FILE_PRICEANDQUANTITYONLY_UPDATE_DATA_", "_POST_UIEE_BOOKLOADER_DATA_", "_POST_STD_ACES_DATA_"];
        if (!in_array($this->container['feed_type'], $allowed_values)) {
            return false;
        }
        $allowed_values = ["_AWAITING_ASYNCHRONOUS_REPLY_", "_CANCELLED_", "_DONE_", "_IN_PROGRESS_", "_IN_SAFETY_NET_", "_SUBMITTED_", "_UNCONFIRMED_"];
        if (!in_array($this->container['processing_status'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets feed_submission_id
     * @return string
     */
    public function getFeedSubmissionId()
    {
        return $this->container['feed_submission_id'];
    }

    /**
     * Sets feed_submission_id
     * @param string $feed_submission_id
     * @return $this
     */
    public function setFeedSubmissionId($feed_submission_id)
    {
        $this->container['feed_submission_id'] = $feed_submission_id;

        return $this;
    }

    /**
     * Gets feed_type
     * @return string
     */
    public function getFeedType()
    {
        return $this->container['feed_type'];
    }

    /**
     * Sets feed_type
     * @param string $feed_type
     * @return $this
     */
    public function setFeedType($feed_type)
    {
        $allowed_values = array('_POST_PRODUCT_DATA_', '_POST_PRODUCT_RELATIONSHIP_DATA_', '_POST_INVENTORY_AVAILABILITY_DATA_', '_POST_PRODUCT_OVERRIDES_DATA_', '_POST_PRODUCT_PRICING_DATA_', '_POST_PRODUCT_IMAGE_DATA_', '_POST_FLAT_FILE_INVLOADER_DATA_', '_POST_FLAT_FILE_BOOKLOADER_DATA_', '_POST_FLAT_FILE_CONVERGENCE_LISTINGS_DATA_', '_POST_FLAT_FILE_LISTINGS_DATA_', '_POST_FLAT_FILE_PRICEANDQUANTITYONLY_UPDATE_DATA_', '_POST_UIEE_BOOKLOADER_DATA_', '_POST_STD_ACES_DATA_');
        if (!is_null($feed_type) && (!in_array($feed_type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'feed_type', must be one of '_POST_PRODUCT_DATA_', '_POST_PRODUCT_RELATIONSHIP_DATA_', '_POST_INVENTORY_AVAILABILITY_DATA_', '_POST_PRODUCT_OVERRIDES_DATA_', '_POST_PRODUCT_PRICING_DATA_', '_POST_PRODUCT_IMAGE_DATA_', '_POST_FLAT_FILE_INVLOADER_DATA_', '_POST_FLAT_FILE_BOOKLOADER_DATA_', '_POST_FLAT_FILE_CONVERGENCE_LISTINGS_DATA_', '_POST_FLAT_FILE_LISTINGS_DATA_', '_POST_FLAT_FILE_PRICEANDQUANTITYONLY_UPDATE_DATA_', '_POST_UIEE_BOOKLOADER_DATA_', '_POST_STD_ACES_DATA_'");
        }
        $this->container['feed_type'] = $feed_type;

        return $this;
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
     * Gets processing_status
     * @return string
     */
    public function getProcessingStatus()
    {
        return $this->container['processing_status'];
    }

    /**
     * Sets processing_status
     * @param string $processing_status
     * @return $this
     */
    public function setProcessingStatus($processing_status)
    {
        $allowed_values = array('_AWAITING_ASYNCHRONOUS_REPLY_', '_CANCELLED_', '_DONE_', '_IN_PROGRESS_', '_IN_SAFETY_NET_', '_SUBMITTED_', '_UNCONFIRMED_');
        if (!is_null($processing_status) && (!in_array($processing_status, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'processing_status', must be one of '_AWAITING_ASYNCHRONOUS_REPLY_', '_CANCELLED_', '_DONE_', '_IN_PROGRESS_', '_IN_SAFETY_NET_', '_SUBMITTED_', '_UNCONFIRMED_'");
        }
        $this->container['processing_status'] = $processing_status;

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


