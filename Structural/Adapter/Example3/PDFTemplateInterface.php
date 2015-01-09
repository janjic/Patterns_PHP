<?php
/**
 * Created by PhpStorm.
 * User: janjic
 * Date: 1/7/2015
 * Time: 11:45 PM
 */

/**
 * Separate interface just for rendering PDF's
 * Having a separate interface from RenderTemplateInterface could be a requirement from a third party
 */
interface PDFTemplateInterface
{
    public function renderTop();

    public function renderMiddle();

    public function renderBottom();
}