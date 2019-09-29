<?php
namespace Dfe\ACH\Block;
// 2019-09-29
/** @final Unable to use the PHP «final» keyword here because of the M2 code generation. */
class Info extends \Df\Payment\Block\Info {
	/**
	 * 2019-09-30
	 * @override
	 * @see \Df\Payment\Block\Info::msgUnconfirmed()
	 * @used-by \Df\Payment\Block\Info::rUnconfirmed()
	 * @return string|null
	 */
	final protected function msgUnconfirmed() {return null;}

	/**
	 * 2019-09-29
	 * @override
	 * @see \Df\Payment\Block\Info::prepare()
	 * @used-by \Df\Payment\Block\Info::prepareToRendering()
	 */
	final protected function prepare() {}
}