<?php
/**
* @package   neoinformatique
* @subpackage
* @author    your name
* @copyright 2011 your name
* @link      http://www.yourwebsite.undefined
* @license    All rights reserved
*/

require (realpath(__DIR__.'/../../../jelix/lib/jelix/').'/'.'init.php');

jApp::initPaths(
    __DIR__.'/',
    __DIR__.'/www/',
    __DIR__.'/var/',
    __DIR__.'/var/log/',
    __DIR__.'/var/config/',
    __DIR__.'/scripts/'
);
jApp::setTempBasePath(realpath(__DIR__.'/../temp/neoinformatique/').'/');
