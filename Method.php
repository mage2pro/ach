<?php
namespace Dfe\ACH;
// 2019-09-28
final class Method extends \Df\Payment\Method {
	/**
	 * 2019-09-28 The result should be in the basic monetary unit (like dollars), not in fractions (like cents).
	 * @override
	 * @see \Df\Payment\Method::amountLimits()
	 * @used-by \Df\Payment\Method::isAvailable()
	 * @return \Closure
	 */
	protected function amountLimits() {return null;}
}