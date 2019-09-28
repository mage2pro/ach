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
		  * @used-by see \Df\GingerPaymentsBase\ConfigProvider::config()
		  * https://github.com/mage2pro/ginger-payments-base/blob/1.2.3/ConfigProvider.php#L45
		  */
		'desc' => $s->description()
	] + parent::config();}
}