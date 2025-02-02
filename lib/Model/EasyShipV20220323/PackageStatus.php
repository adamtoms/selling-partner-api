<?php
/**
 * PackageStatus
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Easy Ship
 *
 * The Selling Partner API for Easy Ship helps you build applications that help sellers manage and ship Amazon Easy Ship orders. Your Easy Ship applications can: * Get available time slots for packages to be scheduled for delivery. * Schedule, reschedule, and cancel Easy Ship orders. * Print labels, invoices, and warranties. See the [Marketplace Support Table](https://developer-docs.amazon.com/sp-api/docs/easy-ship-api-v2022-03-23-use-case-guide) for the differences in Easy Ship operations by marketplace.
 *
 * The version of the OpenAPI document: 2022-03-23
 * Contact: marketplaceapitest@amazon.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\EasyShipV20220323;
use \SellingPartnerApi\ObjectSerializer;
use \SellingPartnerApi\Model\ModelInterface;

/**
 * PackageStatus Class Doc Comment
 *
 * @category Class
 * @description The status of the package.
 * @package  SellingPartnerApi
 * @group 
 */
class PackageStatus
{
    /**
     * Possible values of this enum
     */
    const READY_FOR_PICKUP = 'ReadyForPickup';
    const PICKED_UP = 'PickedUp';
    const AT_ORIGIN_FC = 'AtOriginFC';
    const AT_DESTINATION_FC = 'AtDestinationFC';
    const DELIVERED = 'Delivered';
    const REJECTED = 'Rejected';
    const UNDELIVERABLE = 'Undeliverable';
    const RETURNED_TO_SELLER = 'ReturnedToSeller';
    const LOST_IN_TRANSIT = 'LostInTransit';
    const LABEL_CANCELED = 'LabelCanceled';
    const DAMAGED_IN_TRANSIT = 'DamagedInTransit';
    const OUT_FOR_DELIVERY = 'OutForDelivery';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::READY_FOR_PICKUP,
            self::PICKED_UP,
            self::AT_ORIGIN_FC,
            self::AT_DESTINATION_FC,
            self::DELIVERED,
            self::REJECTED,
            self::UNDELIVERABLE,
            self::RETURNED_TO_SELLER,
            self::LOST_IN_TRANSIT,
            self::LABEL_CANCELED,
            self::DAMAGED_IN_TRANSIT,
            self::OUT_FOR_DELIVERY,
        ];
    }
}


