<?php
namespace Dfe\ACH;
// 2019-09-28
final class Method extends \Df\Payment\Method {
	/**
	 * 2019-09-28
	 * @override
	 * @see \Df\Payment\Method::amountLimits()
	 * @used-by \Df\Payment\Method::isAvailable()
	 * @return \Closure
	 */
	protected function amountLimits() {return null;}

	/**
	 * 2019-09-28
	 * @used-by \Df\Payment\Method::codeS()
	 * @see \Df\Payment\Settings::prefix()
	 */
	const CODE = 'dfe_ach';
}