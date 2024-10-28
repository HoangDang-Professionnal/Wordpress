<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v16/common/user_lists.proto

namespace Google\Ads\GoogleAds\V16\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A rule item composed of a date operation.
 *
 * Generated from protobuf message <code>google.ads.googleads.v16.common.UserListDateRuleItemInfo</code>
 */
class UserListDateRuleItemInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Date comparison operator.
     * This field is required and must be populated when creating new date
     * rule item.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v16.enums.UserListDateRuleItemOperatorEnum.UserListDateRuleItemOperator operator = 1;</code>
     */
    protected $operator = 0;
    /**
     * String representing date value to be compared with the rule variable.
     * Supported date format is YYYY-MM-DD.
     * Times are reported in the customer's time zone.
     *
     * Generated from protobuf field <code>optional string value = 4;</code>
     */
    protected $value = null;
    /**
     * The relative date value of the right hand side denoted by number of days
     * offset from now. The value field will override this field when both are
     * present.
     *
     * Generated from protobuf field <code>optional int64 offset_in_days = 5;</code>
     */
    protected $offset_in_days = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $operator
     *           Date comparison operator.
     *           This field is required and must be populated when creating new date
     *           rule item.
     *     @type string $value
     *           String representing date value to be compared with the rule variable.
     *           Supported date format is YYYY-MM-DD.
     *           Times are reported in the customer's time zone.
     *     @type int|string $offset_in_days
     *           The relative date value of the right hand side denoted by number of days
     *           offset from now. The value field will override this field when both are
     *           present.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V16\Common\UserLists::initOnce();
        parent::__construct($data);
    }

    /**
     * Date comparison operator.
     * This field is required and must be populated when creating new date
     * rule item.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v16.enums.UserListDateRuleItemOperatorEnum.UserListDateRuleItemOperator operator = 1;</code>
     * @return int
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * Date comparison operator.
     * This field is required and must be populated when creating new date
     * rule item.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v16.enums.UserListDateRuleItemOperatorEnum.UserListDateRuleItemOperator operator = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setOperator($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V16\Enums\UserListDateRuleItemOperatorEnum\UserListDateRuleItemOperator::class);
        $this->operator = $var;

        return $this;
    }

    /**
     * String representing date value to be compared with the rule variable.
     * Supported date format is YYYY-MM-DD.
     * Times are reported in the customer's time zone.
     *
     * Generated from protobuf field <code>optional string value = 4;</code>
     * @return string
     */
    public function getValue()
    {
        return isset($this->value) ? $this->value : '';
    }

    public function hasValue()
    {
        return isset($this->value);
    }

    public function clearValue()
    {
        unset($this->value);
    }

    /**
     * String representing date value to be compared with the rule variable.
     * Supported date format is YYYY-MM-DD.
     * Times are reported in the customer's time zone.
     *
     * Generated from protobuf field <code>optional string value = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->value = $var;

        return $this;
    }

    /**
     * The relative date value of the right hand side denoted by number of days
     * offset from now. The value field will override this field when both are
     * present.
     *
     * Generated from protobuf field <code>optional int64 offset_in_days = 5;</code>
     * @return int|string
     */
    public function getOffsetInDays()
    {
        return isset($this->offset_in_days) ? $this->offset_in_days : 0;
    }

    public function hasOffsetInDays()
    {
        return isset($this->offset_in_days);
    }

    public function clearOffsetInDays()
    {
        unset($this->offset_in_days);
    }

    /**
     * The relative date value of the right hand side denoted by number of days
     * offset from now. The value field will override this field when both are
     * present.
     *
     * Generated from protobuf field <code>optional int64 offset_in_days = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setOffsetInDays($var)
    {
        GPBUtil::checkInt64($var);
        $this->offset_in_days = $var;

        return $this;
    }

}

