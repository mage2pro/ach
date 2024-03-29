<?php
namespace Dfe\ACH;
# 2019-09-28
final class Method extends \Df\Payment\Method {
	/**
	 * 2019-09-29
	 * @used-by \Dfe\ACH\Block\Info::prepare()
	 */
	function account():string {return $this->iia(self::$II_ACCOUNT);}

	/**
	 * 2019-09-29
	 * @used-by \Dfe\ACH\Block\Info::prepare()
	 */
	function routing():string {return $this->iia(self::$II_ROUTING);}

	/**
	 * 2019-09-28
	 * @override
	 * @see \Df\Payment\Method::amountLimits()
	 * @used-by \Df\Payment\Method::isAvailable()
	 * @return null
	 */
	protected function amountLimits() {return null;}

	/**
	 * 2019-09-29
	 * @override
	 * @see \Df\Payment\Method::iiaKeys()
	 * @used-by \Df\Payment\Method::assignData()
	 * @return string[]
	 */
	protected function iiaKeys():array {return [self::$II_ACCOUNT, self::$II_ROUTING];}

	/**
	 * 2019-09-28
	 * @used-by \Df\Payment\Method::codeS()
	 * @see \Df\Payment\Settings::prefix()
	 */
	const CODE = 'dfe_ach';

	/**
	 * 2019-09-29
	 * @used-by self::account()
	 * @used-by self::iiaKeys()
	 */
	private static $II_ACCOUNT = 'account';

	/**
	 * 2019-09-29
	 * @used-by self::iiaKeys()
	 * @used-by self::routing()
	 */
	private static $II_ROUTING = 'routing';
}