<?php
/**
 * Created by PhpStorm.
 * User: janjic
 * Date: 1/7/2015
 * Time: 11:46 PM
 */

/**
 * The adapter - this will encapsulate an instance of the RenderPDFTemplate class
 * to work polymorphically with the RenderTemplateInterface interface
 */
class PDFTemplateAdapter implements RenderTemplateInterface
{
    private $pdfTemplate;

    public function __construct(PDFTemplateInterface $pdfTemplate)
    {
        $this->pdfTemplate = $pdfTemplate;
    }

    public function renderHeader()
    {
        return $this->pdfTemplate->renderTop();
    }

    public function renderBody()
    {
        return $this->pdfTemplate->renderMiddle();
    }

    public function renderFooter()
    {
        return $this->pdfTemplate->renderBottom();
    }
}