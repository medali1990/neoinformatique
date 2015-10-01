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
        $fact=jDao::get('neoinformatique~news');
        $liste_news=$fact->findAll();

        $tpl=new jTpl();
        $tpl->assign('liste_news',$liste_news);
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

    function create_form(){
        $rep=$this->getResponse('html');
        $rep->title='creation d\'une news';

        $tpl=new jTpl();
        $rep->body->assign('MAIN',$tpl->fetch('formulaire_news'));

        return $rep;
    }

    function save_create(){
        $news=jDao::createRecord('neoinformatique~news');
        $news->sujet=$this->param('sujet');
        $news->texte=$this->param('texte');
        $news->news_date=$this->param('news_date');

        $fact=jDao::get('neoinformatique~news');
        $fact->insert($news);

        $rep=$this->getResponse('redirect');
        $rep->action='neoinformatique~default:index';
        return $rep;
    }
}
