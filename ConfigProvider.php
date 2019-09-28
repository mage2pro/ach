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
		'desc' => $s->description()
	] + parent::config();}
}