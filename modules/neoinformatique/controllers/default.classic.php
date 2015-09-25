<?php
/**
* @package   neoinformatique
* @subpackage neoinformatique
* @author    your name
* @copyright 2011 your name
* @link      http://www.yourwebsite.undefined
* @license    All rights reserved
*/

class defaultCtrl extends jController {
    /**
    *
    */
    function index() {
        $rep = $this->getResponse('html');
        $nom="med";
        $noncmoi="med";
        $rep->title="hello world";
        $tpl = new jTpl();
        $tpl->assign('nom', $noncmoi);
        $rep->body->assign('nom', $tpl->fetch('bonjour'));

        return $rep;
    }


    function test_tab(){

        $rep=$this->getResponse('html');

        $tpl = new jTpl();
        $rep->body->assign('MAIN',$tpl->fecth('template_test_tab'));
        return $rep;
    }
}
