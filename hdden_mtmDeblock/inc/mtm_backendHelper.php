<?php
/**
 * Filename of current .php can be changed
 */
if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/wp-content/plugins/matomo/app/matomo.php')){
    include($_SERVER['DOCUMENT_ROOT'] . '/wp-content/plugins/matomo/app/matomo.php');
}