<?php
/**
* @package   neoinformatique
* @subpackage 
* @author    your name
* @copyright 2011 your name
* @link      http://www.yourwebsite.undefined
* @license    All rights reserved
*/


require_once (JELIX_LIB_CORE_PATH.'response/jResponseHtml.class.php');

class myHtmlResponse extends jResponseHtml {

    public $bodyTpl = 'neoinformatique~main';

    function __construct() {
        parent::__construct();

        // Include your common CSS and JS files here
         //$baseDirectory = $config->urlengine['basePath'];
        //$resp->addCSSLink(jUrl::get(’neoinformatique~www:getfile’, array(’targetmodule=>’mymodule’  -
//, ’file’=>’css/mystyles.css’)));
        //$this->addCssLink('/css/bootstrap-theme.min.css');
        //$resp->addCssLink(jApp::config()->urlengine['basepath'].'css/bootstrap.min.css');
        $this->addCssLink('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css');
        $this->addCssLink('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css');
        //$this->addCssLink('/css/bootstrap-theme.css.map');
        //$this->addCssLink('/css/bootstrap.min.css');
        //$this->addCssLink('/css/bootstrap.css.map');
        //$resp->addJsLink(jApp::config()->urlengine['basepath'].'js/bootstrap.min.js');
        $this->addJsLink('https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.js');
        $this->addJsLink('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js');
        

    }

    protected function doAfterActions() {
        // Include all process in common for all actions, like the settings of the
        // main template, the settings of the response etc..

        $this->body->assignIfNone('MAIN','<p>no content</p>');
    }
}
