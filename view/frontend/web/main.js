// 2019-09-27
define([
	'df', 'df-lodash', 'Df_Payment/custom', 'jquery', 'Df_Core/Mask', 'mage/validation'
], function(df, _, parent, $) {'use strict';
/** 2017-09-06 @uses Class::extend() https://github.com/magento/magento2/blob/2.2.0-rc2.3/app/code/Magento/Ui/view/base/web/js/lib/core/class.js#L106-L140 */
return parent.extend({
	defaults: {df: {formTemplate: 'Dfe_ACH/main'}, account: '', routing: ''},
	/**
	 * 2017-09-06
	 * These data are submitted to the M2 server part
	 * as the `additional_data` property value on the «Place Order» button click:
	 * @used-by Df_Payment/mixin::getData():
	 *		getData: function() {return {additional_data: this.dfData(), method: this.item.method};},
	 * https://github.com/mage2pro/core/blob/2.8.4/Payment/view/frontend/web/mixin.js#L224
	 * @override
	 * @see Df_Payment/mixin::dfData()
	 * @returns {Object}
	 */
	dfData: function() {return _.assign(this._super(), {account: this.account(), routing: this.routing()});},
	/**
	 * 2016-08-19
	 * Magento <= 2.1.0 calls an `afterRender` handler outside of the `this` context.
	 * It passes `this` to an `afterRender` handler as the second argument:
	 * https://github.com/magento/magento2/blob/2.0.9/app/code/Magento/Ui/view/base/web/js/lib/ko/bind/after-render.js#L19
	 * Magento >= 2.1.0 calls an `afterRender` handler within the `this` context:
	 * https://github.com/magento/magento2/blob/2.1.0/app/code/Magento/Ui/view/base/web/js/lib/knockout/bindings/after-render.js#L20
	 * @param {HTMLElement} e
	 */
	dfOnRender: function(e) {
		var $e = $(e);
		/**
		 * 2019-09-28
		 * 1) https://igorescobar.github.io/jQuery-Mask-Plugin/docs.html#translation
		 * 2) «The account number can be a variable length, but I've never seen one less than 8 characters,
		 * so let's warn them if there are <8.»: https://www.upwork.com/ab/f/contracts/22916307
		 * 2019-09-29
		 * It seems that the minimum account number length is 4, not 8:
		 * https://stackoverflow.com/questions/1540285
		 */
		$e.mask($e.hasClass('routing') ? '000000000' : '0000ZZZZZZZZZZZZZ', {translation: {
			'Z': {optional: true, pattern: /[0-9]/}}
		});
	},
	/**
	 * 2019-09-29
	 * @override
	 * @see Df_Payment/custom::initialize()
	 * @returns {exports}
	*/
	initialize: function() {
		$.validator.addMethod(
			'dfe_ach_routing', function(v) {return v && 9 === v.length;}
			,$.mage.__('Routing numbers have exactly 9 digits.')
		);
		$.validator.addMethod(
			'dfe_ach_account', function(v) {return v && 3 < v.length;}
			,$.mage.__('Account numbers have at least 4 digits.')
		);
		return this._super();
	},
	/**
	 * 2017-09-06 The method should return `this` because it is used in a chain:
	 *	this._super()
	 *		.initObservable()
	 *		.initModules()
	 *		.initStatefull()
	 *		.initLinks()
	 *		.initUnique();
	 * @used-by Magento_Ui/js/lib/core/element/element::initialize()
	 * https://github.com/magento/magento2/blob/2.2.0-RC1.3/app/code/Magento/Ui/view/base/web/js/lib/core/element/element.js#L104
	 * @override
	 * @see Magento_Ui/js/lib/core/collection::initObservable()
	 * https://github.com/magento/magento2/blob/2.3.2/app/code/Magento/Ui/view/base/web/js/lib/core/collection.js#L36-L48
	 * @returns {Element} Chainable
	*/
	initObservable: function() {
		this._super().observe(['account', 'routing']);
		this.account.subscribe(function() {this.validateElement('#dfe_ach_account');}, this);
		this.routing.subscribe(function() {this.validateElement('#dfe_ach_routing');}, this);
		return this;
	},
});});