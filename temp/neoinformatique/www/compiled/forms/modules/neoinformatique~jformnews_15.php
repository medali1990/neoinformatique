<?php 
if (jApp::config()->compilation['checkCacheFiletime'] &&

filemtime('C:\wamp2\www\jelix\neoinformatique/modules/neoinformatique/forms/jformnews.form.xml') > 1443726834){ return false;
}else{

class cForm_neoinformatique_Jx_jformnews extends jFormsBase {
 public function __construct($sel, &$container, $reset = false){
          parent::__construct($sel, $container, $reset);
$ctrl= new jFormsControlinput('sujet');
$ctrl->required=true;
$ctrl->datatype->addFacet('maxLength',255);
$ctrl->label='Sujet';
$this->addControl($ctrl);
$ctrl= new jFormsControltextarea('texte');
$ctrl->required=true;
$ctrl->label='Texte';
$this->addControl($ctrl);
$ctrl= new jFormsControlinput('news_date');
$ctrl->datatype= new jDatatypedate();
$ctrl->required=true;
$ctrl->label='News Date';
$this->addControl($ctrl);
$ctrl= new jFormsControlsubmit('_submit');
$ctrl->label='ok';
$ctrl->datasource= new jFormsStaticDatasource();
$this->addControl($ctrl);
  }
}
 return true;}