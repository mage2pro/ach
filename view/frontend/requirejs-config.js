// 2019-09-29
// The myracehorse.com website has a header with position:fixed.
// On a validation error, Magento wrongly scrolls the page, and the problem input becames hidden under the header.
// I fixed it by the mixin.
var config = {config: {mixins: {'mage/validation': {'Dfe_ACH/validation': true}}}};