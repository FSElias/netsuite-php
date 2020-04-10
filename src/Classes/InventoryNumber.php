<?php
/**
 * This file is part of the SevenShores/NetSuite library
 * AND originally from the NetSuite PHP Toolkit.
 *
 * New content:
 * @package    ryanwinchester/netsuite-php
 * @copyright  Copyright (c) Ryan Winchester
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache-2.0
 * @link       https://github.com/ryanwinchester/netsuite-php
 *
 * Original content:
 * @copyright  Copyright (c) NetSuite Inc.
 * @license    https://raw.githubusercontent.com/ryanwinchester/netsuite-php/master/original/NetSuite%20Application%20Developer%20License%20Agreement.txt
 * @link       http://www.netsuite.com/portal/developers/resources/suitetalk-sample-applications.shtml
 *
 * generated:  2020-04-10 09:56:55 PM UTC
 */

namespace NetSuite\Classes;

class InventoryNumber extends Record {
    /**
     * @var string
     */
    public $inventoryNumber;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $item;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $units;
    /**
     * @var string
     */
    public $expirationDate;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var \NetSuite\Classes\InventoryNumberLocationsList
     */
    public $locationsList;
    /**
     * @var \NetSuite\Classes\CustomFieldList
     */
    public $customFieldList;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;
    static $paramtypesmap = array(
        "inventoryNumber" => "string",
        "item" => "RecordRef",
        "status" => "string",
        "units" => "string",
        "expirationDate" => "dateTime",
        "memo" => "string",
        "locationsList" => "InventoryNumberLocationsList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
