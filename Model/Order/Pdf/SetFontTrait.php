<?php

namespace Rossmc\SalesPdfFonts\Model\Order\Pdf;

trait SetFontTrait {

    protected function getFontsDir()
    {
        $path = 'app/code/Rossmc/SalesPdfFonts/view/adminhtml/web/fonts/';
        return $this->_rootDirectory->getAbsolutePath($path);
    }

    /**
     * Set font as regular
     *
     * @param  \Zend_Pdf_Page $object
     * @param  int $size
     * @return \Zend_Pdf_Resource_Font
     */
    protected function _setFontRegular($object, $size = 7)
    {
        $font = \Zend_Pdf_Font::fontWithPath(
            $this->getFontsDir() . ('gnufreefont/FreeSerif.ttf')
        );
        $object->setFont($font, $size);
        return $font;
    }

    /**
     * Set font as bold
     *
     * @param  \Zend_Pdf_Page $object
     * @param  int $size
     * @return \Zend_Pdf_Resource_Font
     */
    protected function _setFontBold($object, $size = 7)
    {
        $font = \Zend_Pdf_Font::fontWithPath(
            $this->getFontsDir() . ('gnufreefont/FreeSerifBold.ttf')
        );
        $object->setFont($font, $size);
        return $font;
    }

    /**
     * Set font as italic
     *
     * @param  \Zend_Pdf_Page $object
     * @param  int $size
     * @return \Zend_Pdf_Resource_Font
     */
    protected function _setFontItalic($object, $size = 7)
    {
        $font = \Zend_Pdf_Font::fontWithPath(
            $this->getFontsDir() . ('gnufreefont/FreeSerifItalic.ttf')
        );
        $object->setFont($font, $size);
        return $font;
    }
}