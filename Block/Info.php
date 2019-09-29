<?php
namespace Dfe\ACH\Block;
/**
 * 2019-09-29
 * @final Unable to use the PHP «final» keyword here because of the M2 code generation.
 * @method \Dfe\ACH\Method m()
 */
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
	final protected function prepare() {
		$this->si(['Routing Number' => $this->m()->routing(), 'Account Number' => $this->m()->account()]);
	}

	/**
	 * 2019-09-30
	 * @override
	 * @see \Df\Payment\Block\Info::prepareUnconfirmed()
	 * @used-by \Df\Payment\Block\Info::prepareToRendering()
	 */
	final protected function prepareUnconfirmed() {
		parent::prepareUnconfirmed();
		$this->prepare();
	}
}