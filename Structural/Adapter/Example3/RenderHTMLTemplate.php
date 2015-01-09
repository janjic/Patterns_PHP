<?php
/**
 * Created by PhpStorm.
 * User: janjic
 * Date: 1/7/2015
 * Time: 11:45 PM
 */

/**
 * Used for rendering HTML templates
 */
class RenderHTMLTemplate implements RenderTemplateInterface
{

    public function renderHeader()
    {
        return "<html><body>";
    }

    public function renderBody()
    {
        return "Hello World";
    }

    public function renderFooter()
    {
        return "</body></html>";
    }

}