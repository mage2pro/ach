<?php
namespace Dfe\ACH;
// 2019-09-28
final class Method extends \Df\Payment\Method {
	/**
	 * 2019-09-29
	 * @return string
	 */
	function account() {return $this->iia(self::$II_ACCOUNT);}

	/**
	 * 2019-09-29
	 * @return string
	 */
	function routing() {return $this->iia(self::$II_ROUTING);}

	/**
	 * 2019-09-28
	 * @override
	 * @see \Df\Payment\Method::amountLimits()
	 * @used-by \Df\Payment\Method::isAvailable()
	 * @return \Closure
	 */
	protected function amountLimits() {return null;}

	/**
	 * 2019-09-29
	 * @override
	 * @see \Df\Payment\Method::iiaKeys()
	 * @used-by \Df\Payment\Method::assignData()
	 * @return string[]
	 */
	protected function iiaKeys() {return [self::$II_ACCOUNT, self::$II_ROUTING];}

	/**
	 * 2019-09-28
	 * @used-by \Df\Payment\Method::codeS()
	 * @see \Df\Payment\Settings::prefix()
	 */
	const CODE = 'dfe_ach';

	/**
	 * 2019-09-29
	 * @used-by iiaKeys()
	 * @used-by account()
	 */
	private static $II_ACCOUNT = 'account';

	/**
	 * 2019-09-29
	 * @used-by iiaKeys()
	 * @used-by routing()
	 */
	private static $II_ROUTING = 'routing';
}