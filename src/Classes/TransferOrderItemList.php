<?php

namespace Fungku\NetSuite\Classes;

class TransferOrderItemList {
	public $item;
	public $replaceAll;
	static $paramtypesmap = array(
		"item" => "TransferOrderItem[]",
		"replaceAll" => "boolean",
	);
}

