<?php
/**
 * Created by PhpStorm.
 * User: dan
 * Date: 22/01/2017
 * Time: 19:25
 */
if (getenv('COMPOSER_VENDOR_DIR')) {
    require_once getenv('COMPOSER_VENDOR_DIR').'/autoload.php';
}
else {
    require_once __DIR__.'/../vendor/autoload.php';
}
