<?php
/**
 * Created by PhpStorm.
 * User: janjic
 * Date: 1/7/2015
 * Time: 11:45 PM
 */

/**
 * interface for creating render classes
 *
 * target
 */
interface RenderTemplateInterface
{
    public function renderHeader();

    public function renderBody();

    public function renderFooter();
}
