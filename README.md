# SalesPdfFonts
Changes the font used to generate sales PDFs to a font which supports more writing systems. 

In Magento versions 2.2.2 & 2.1.10 the [Libertine Font](https://en.wikipedia.org/wiki/Linux_Libertine) which is used to generate Sales PDFs does not support the Thai, Arabic and many other writing systems.  This module changes the font used to the [GNU Free Font](https://www.gnu.org/software/freefont/) which has much wider support of different writing systems.  See the [GNU Free Font](https://www.gnu.org/software/freefont/) web page for a full list of writing systems supported.

## Please Note
There are two open tickets for this on GitHub so this will hopefully be fixed in a later Magento releases.  In which case it may be better to upgrade your magento version than installing this module.
- https://github.com/magento/magento2/issues/9666
- https://github.com/magento/magento2/issues/12323

Nevertheless this module can be used as an example of how to change the font used by Magento to genreate sales PDFs. [Googles Noto Fonts](https://www.google.com/get/noto/) are good source of font famillies which support different writing systems.

## Installation
- Download this repository into your magento instance, in an app/code/Rossmc/SalesPdfFonts directory.
- Run `php bin/magento module:enable Rossmc/SalesPdfFonts`
- Run `php bin/magento cache:flush`
- Run `php bin/magento setup:upgrade`
