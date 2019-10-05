# Magento 2 Google Tag Manager Extension 


This extension helps the owner of store simply install code to work with Google Tag Manager. 


![gtm configuration](https://i.imgur.com/ca9rD0p.png)



## How to install Extension

### Install via composer (recommend)

Run the following command in Magento 2 root folder:

```
composer require sparacino/module-gtm
php bin/magento module:enable Sparacino_GTM
php bin/magento setup:upgrade
php bin/magento cache:flush
php bin/magento cache:clean
```

### Install manual

Clone or download repository, then copy the contents inside your [Magento 2 root folder]/app/code/Sparacino/GTM.

```
php bin/magento module:enable Sparacino_GTM
php bin/magento setup:upgrade
php bin/magento cache:flush
php bin/magento cache:clean
```