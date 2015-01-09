<?php
/**
 * Created by PhpStorm.
 * User: janjic
 * Date: 1/7/2015
 * Time: 11:45 PM
 */

/**
 * Used for rendering PDF templates
 * //adaptee
 */
class RenderPDFTemplate implements PDFTemplateInterface
{

    public function renderTop()
    {
        return "This is the top of the PDF";
    }

    public function renderMiddle()
    {
        return "Hello World";
    }

    public function renderBottom()
    {
        return "This is the bottom of the PDF";
    }

}