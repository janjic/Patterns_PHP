<?php
/**
 * Created by PhpStorm.
 * User: janjic
 * Date: 1/7/2015
 * Time: 10:04 PM
 */

class MegaCommsManager extends CommsManager {
    function getHeaderText() {
        return "MegaCal header\n";
    }

    function getApptEncoder() {
        return new MegaApptEncoder();
    }

    function getTtdEncoder() {
    }

    function getContactEncoder() {

    }

    function getFooterText() {
        return "MegaCal footer\n";
    }
}