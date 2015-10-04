<?php

class adminCtrl extends jControllerDaoCrud {
	protected $dao = 'neoinformatique~news';
	protected $form = 'neoinformatique~jformnews';
	protected $crud_list='neoinformatique~crud_list';
	protected $crud_edit='neoinformatique~crud_edit';
	protected $crud_view='neoinformatique~crud_view';


	protected function _getResponse(){
		$rep=$this->getResponse('html');
		$rep->title='gestion des news';
		$rep->addCSSLink('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css');
        $rep->addCSSLink('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css');
        $rep->addJsLink('https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.js');
        $rep->addJsLink('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js');
        $rep->body->assignZone('menu','menuliste');
		return $rep;
	}
}
?>