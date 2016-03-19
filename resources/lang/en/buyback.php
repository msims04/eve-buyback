<?php

return [

	'acceptable'       => 'acceptable',
	'asking'           => 'asking',
	'breakdown'        => 'breakdown',
	'buyback'          => 'buyback',
	'buying'           => 'buying',
	'calculated'       => 'calculated',
	'category'         => 'category|categories',
	'contract'         => 'contract|contracts',
	'detail'           => 'detail|details',
	'group'            => 'group|groups',
	'issued'           => 'issued',
	'issuer'           => 'issuer',
	'location'         => 'location',
	'login'            => 'login',
	'logout'           => 'logout',
	'manage'           => 'manage',
	'margin'           => 'margin',
	'market'           => 'market',
	'material'         => 'material|materials',
	'name'             => 'name|names',
	'payout'           => 'payout',
	'quantity'         => 'quantity|quantities',
	'raw'              => 'raw',
	'reprocessable'    => 'reprocessable',
	'selling'          => 'selling',
	'submit'           => 'submit',
	'title'            => 'title',
	'total'            => 'total',
	'subtotal'         => 'subtotal',
	'unit'             => 'unit',
	'unwanted'         => 'unwanted',
	'volume'           => 'volume',
	'wanted'           => 'wanted',


	'buttons' => [
		'add'           => 'Add',
		'cancel'        => 'Cancel',
		'edit'          => 'Edit',
		'remove'        => 'Remove',
		'update_prices' => 'Update Prices',
	],

	'headers' => [
		'buy_modifier'  => 'Buy Modifier',
		'buy_price'     => 'Buy Price',
		'buy_settings'  => 'Buy Settings',
		'categories'    => 'Category|Categories',
		'groups'        => 'Group|Groups',
		'item_settings' => 'Item Settings',
		'modifier'      => 'Modifier',
		'motd'          => 'Message of the Day',
		'name'          => 'Name',
		'price'         => 'Price',
		'sell'          => 'Sell',
		'sell_modifier' => 'Sell Modifier',
		'sell_price'    => 'Sell Price',
		'sell_settings' => 'Sell Settings',
		'types'         => 'Type|Types',
	],

	'messages' => [
		'add_items'                  => 'Add Item?|Add Items?',
		'add_items_failure'          => 'Failed to add the item.|Failed to add the items.',
		'add_items_success'          => 'The item has been added.|The items have been added.',
		'add_items_nothing'          => 'There were no items to add.',
		'ajax_requests_only'         => 'Only ajax requests are allowed for this endpoint.',
		'buy_raw'                    => 'Buy the actual item|Buy the actual items',
		'buy_recycled'               => 'Buy modules that reprocess into the item|Buy modules that reprocess into the items',
		'buy_refined'                => 'Buy rocks that reprocess into the item|Buy rocks that reprocess into the items',
		'edit_items'                 => 'Edit Item?|Edit Items?',
		'edit_items_failure'         => 'Failed to edited the item.|Failed to edited the items.',
		'edit_items_success'         => 'The item has been edited.|The items have been edited.',
		'edit_items_nothing'         => 'There were no items to edit.',
		'lock_prices'                => 'Lock the prices from being auto-updated',
		'markdown_enabled'           => 'You may use markdown language to format the text.',
		'motd_edited'                => 'The motd has been edited.',
		'motd_failure'               => 'Failed to edit the motd.',
		'motd_removed'               => 'The motd has been removed.',
		'remove_items'               => 'Remove Item?|Remove Items?',
		'remove_items_confirm'       => 'Are you sure you want to remove this item?|Are you sure you want to remove these items?',
		'remove_items_success'       => 'The item has been removed.|The items have been removed.',
		'remove_items_failure'       => 'Failed to remove the item.|Failed to remove the items.',
		'remove_items_nothing'       => 'There were no items to remove.',
		'sell_items'                 => 'Sell the item|Sell the items',
		'update_item_prices_failure' => 'Failed to update the item prices.',
		'update_item_prices_success' => 'The item prices have been updated.',
	],


	/*'config'                    => [
		'items'                 => [
			'add'               => 'Add',
			'add_failed'        => 'Failed to add items to the buyback.',
			'add_items'         => 'Add Items?',
			'added'             => 'The items were added to the buyback.',
			'buy_modifier'      => 'Buy Modifier',
			'buy_raw'           => 'Buy Raw',
			'buy_price'         => 'Buy Price',
			'buy_raw_help'      => 'Buy the actual item|Buy the actual items',
			'buy_recycled'      => 'Buy Recycled',
			'buy_recycled_help' => 'Buy modules that reprocess into the item|Buy modules that reprocess into the items',
			'buy_refined'       => 'Buy Refined',
			'buy_refined_help'  => 'Buy rocks that reprocess into the item|Buy rocks that reprocess into the items',
			'buy_settings'      => 'Buy Settings',
			'cancel'            => 'Cancel',
			'category'          => 'Category|Categories',
			'confirm_remove'    => 'Are you sure you want to remove this item?|Are you sure you want to remove these items?',
			'edit'              => 'Edit',
			'group'             => 'Group|Groups',
			'header'            => 'Buyback Items',
			'item'              => 'Item|Items',
			'item_settings'     => 'Item Settings',
			'lock_prices'       => 'Lock Prices',
			'lock_prices_help'  => 'Lock the prices from being auto-updated',
			'modifier'          => 'Modifier',
			'name'              => 'Name',
			'price'             => 'Price',
			'remove'            => 'Remove',
			'remove_item'       => 'Remove Item?|Remove Items?',
			'removed'           => 'The buyback items have been removed.',
			'sell'              => 'Sell',
			'sell_help'         => 'Sell the item|Sell the items',
			'sell_modifier'     => 'Sell Modifier',
			'sell_price'        => 'Sell Price',
			'sell_settings'     => 'Sell Settings',
			'update'            => 'Update',
			'update_failed'     => 'Failed to update buyback items.',
			'update_item'       => 'Update Item?|Update Items?',
			'update_prices'     => 'Update Prices',
			'updated_prices'    => 'The buyback prices have been updated.',
			'updated'           => 'The buyback items have been updated.',
		],
	],

	'buying_raw'       => 'Buying the actual item',
	'buying_recycled'  => 'Buying items that reprocess into this item',
	'buying_refined'   => 'Buying rocks that reprocess into this item',
	'config_success'   => 'The configuration was successfully updated.',
	'config_failure'   => 'The configuration could not be updated.',
	'contract_total'   => 'Contract Total: :total',
	'instructions'     => '<p><h4>Paste your inventory</h4></p><p><h5>This page is IGB and drunk friendly: just hit Ctrl+V!</h5</p>',
	'login_failed'     => 'You were unable to be logged in.',
	'login_success'    => 'You have been logged in.',
	'logout_success'   => 'You have been logged out.',*/
];
