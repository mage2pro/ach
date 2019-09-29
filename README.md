An ACH payment module for Magento 2.
The module is **free** and **open source**.

![](https://mage2.pro/uploads/default/original/2X/d/d655e6942c02834346c88ae1292cbaec1d8d784c.png)

## How to install
[Hire me in Upwork](https://www.upwork.com/fl/mage2pro), and I will: 
- install and configure the module properly on your website
- answer your questions
- solve compatiblity problems with third-party checkout, shipping, marketing modules
- implement new features you need 

### Self-installation
```
bin/magento maintenance:enable
rm -rf composer.lock
composer clear-cache
composer require mage2pro/ach:*
bin/magento setup:upgrade
bin/magento cache:enable
rm -rf var/di var/generation generated/code
bin/magento setup:di:compile
rm -rf pub/static/*
bin/magento setup:static-content:deploy -f en_US <additional locales>
bin/magento maintenance:disable
```

## How to update
```
bin/magento maintenance:enable
composer remove mage2pro/ach
rm -rf composer.lock
composer clear-cache
composer require mage2pro/ach:*
bin/magento setup:upgrade
bin/magento cache:enable
rm -rf var/di var/generation generated/code
bin/magento setup:di:compile
rm -rf pub/static/*
bin/magento setup:static-content:deploy -f en_US <additional locales>
bin/magento maintenance:disable
```