<?php
/**
 * Created by PhpStorm.
 * User: janjic
 * Date: 1/7/2015
 * Time: 10:43 PM
 */

/**
 * SECTION 1: a Widget interface and two different implementations.
 * Unlike in previous examples, where the Product was an Helper which generated
 * widgets, the actual instance created here is the Widget itself.
 * The problem solved, though, is the same: managing creation of widgets in the
 * middle of business logic.
 *
 * This class purpose is to generate blinking text in spite of all
 * usability recommendations. This is the Prototype.
 * As always, interfaces in php may be omitted. This is primary here for type
 * hinting.
 */
interface BlinkingWidget
{
}