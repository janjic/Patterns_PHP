<?php
/**
 * Created by PhpStorm.
 * User: janjic
 * Date: 1/7/2015
 * Time: 11:46 PM
 */

/**
 * @param $class_name
 * @throws Exception
 */
function __autoload($class_name)
{
    if (file_exists($class_name . '.php'))
    {
        require_once($class_name . '.php');
    } else {
        throw new Exception("Unable to load $class_name.");
    }
}
$pdfTemplate = new RenderPDFTemplate();

// $pdfTemplateAdapter will implement RenderTemplateInterface, just like RenderHTMLTemplate does
$pdfTemplateAdapter = new PDFTemplateAdapter($pdfTemplate);

// This is the top of the PDF
echo $pdfTemplateAdapter->renderHeader();