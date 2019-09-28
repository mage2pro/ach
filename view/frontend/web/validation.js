// 2019-09-29
// The myracehorse.com website has a header with position:fixed.
// On a validation error, Magento wrongly scrolls the page, and the problem input becames hidden under the header.
// I fixed it by the mixin.
define(['jquery', 'mage/utils/wrapper'], function($, w) {'use strict'; return function(sb) {$.extend(sb.prototype, {
	listenFormValidateHandler: w.wrap(sb.prototype.listenFormValidateHandler, function(_super, ev, v) {
		_super();
		var firstActive = $(v.errorList[0].element || []);
		if (firstActive.length) {
			var $header = $('header.main-header');
			$('html, body').stop().animate({scrollTop: firstActive.offset().top - 2 * $header.height()});
		}
	})
});
return sb;};});