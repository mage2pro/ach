<?php
namespace Dfe\ACH;
// 2019-09-28
/** @method Settings s() */
final class ConfigProvider extends \Df\Payment\ConfigProvider {
	/**
	 * 2019-09-28
	 * @override
	 * @see \Df\Payment\ConfigProvider::config()
	 * @used-by \Df\Payment\ConfigProvider::getConfig()
	 * @return array(string => mixed)
	 */
	protected function config() {/** @var Settings $s */ $s = $this->s(); return [
		 /**
		  * 2019-09-28
		  * 1) «We would like to have a free text box with help text
		  * that we can define from the Magento -> «Configuration» -> «Payment Methods» screen.
		  * Just like the «Invoice Me» payment method.
		  * You can use the following for the default help text, but we definitely want to be able to modify it:
		  * 	"Please input the Routing and Account numbers from the bottom of a bank check that's in your name.
		  * 	The Routing number is the 9-digit number at the bottom left of the check.
		  * 	The Account number is the one to the right of that.
		  * 	You do not need to include the check #, which is to the right of the Account #."
		  * » https://www.upwork.com/ab/f/contracts/22916307
		  * 2) @see \Df\GingerPaymentsBase\ConfigProvider::config()
		  * https://github.com/mage2pro/ginger-payments-base/blob/1.2.3/ConfigProvider.php#L45
		  */
		'desc' => $s->description()
	] + parent::config();}
}