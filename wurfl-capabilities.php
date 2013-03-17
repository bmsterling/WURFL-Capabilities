<?php

/*
    Plugin Name: WURFL Capabilities
    Plugin URI: https://github.com/bmsterling/WURFL-Capabilities
    Description: Using WURFL to expose capabilities of your users browser.
    Version: 0.2
    Author: Benjamin Sterling
    Author URI: http://kenzomedia.com
*/
require('WURFLCap.php');
global $wurflcap;

$wurflcap = new WURFLCap(__FILE__);
?>