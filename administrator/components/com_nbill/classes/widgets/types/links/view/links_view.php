<?php
/**
* View for menu links widget
* @version 1
* @package nBill
* @copyright (C) 2015 Netshine Software Limited
* @license GPL v2 https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html
*
* @access private*
*/

//Ensure this file has been reached through a valid entry point (not always necessary eg. for class files, but included on every file to be safe!)
(defined('_VALID_MOS') || defined('_JEXEC') || defined('ABSPATH') || defined('NBILL_VALID_NBF')) or die('Access Denied.');

class LinksView extends nBillWidgetView
{
    public $menu_links = array();
}