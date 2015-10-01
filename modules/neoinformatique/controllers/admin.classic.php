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

		return $rep;
	}
}
?>