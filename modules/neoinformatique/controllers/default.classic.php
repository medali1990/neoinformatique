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
        $rep->title='neoinformatique siteWeb';
        $moi='un lien';
        $nom='<a href="#">'.$moi.'</a>';

        $tpl=new jTpl();
        $tpl->assign('nom', $nom);
        $rep->body->assign('MAIN', $tpl->fetch('bonjour'));
        return $rep;
    }


    function test_tab(){

        $rep=$this->getResponse('html');
        $tab=array(1,2,3,4);
        $tpl = new jTpl();
        $tpl->assign('tab',$tab);
        $rep->body->assign('MAIN',$tpl->fecth('test_tab'));
        return $rep;
    }
}
