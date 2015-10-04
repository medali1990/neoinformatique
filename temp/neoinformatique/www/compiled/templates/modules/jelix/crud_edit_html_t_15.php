<?php 
if (jApp::config()->compilation['checkCacheFiletime'] &&
filemtime('C:\wamp2\www\jelix\lib\jelix/core-modules/jelix/templates/crud_edit.tpl') > 1424786578){ return false;
} else {
 require_once('C:\wamp2\www\jelix\lib\jelix/plugins/tpl/html/function.jurl.php');
function template_meta_c03655eb51fe83cd6f6dfa0a9512650e($t){
if(isset($t->_vars['form'])) { $builder = $t->_vars['form']->getBuilder('html');
    $builder->setOptions(array());
    $builder->outputMetaContent($t);}
if(isset($t->_vars['form'])) { $builder = $t->_vars['form']->getBuilder('html');
    $builder->setOptions(array());
    $builder->outputMetaContent($t);}

}
function template_c03655eb51fe83cd6f6dfa0a9512650e($t){
?><?php if($t->_vars['id'] === null):?>

<h1><?php echo jLocale::get('jelix~crud.title.create'); ?></h1>
<?php  $formfull = $t->_vars['form'];
    $formfullBuilder = $formfull->getBuilder('html');
    $formfullBuilder->setOptions(array());
    $formfullBuilder->setAction( $t->_vars['submitAction'],array());
    $formfullBuilder->outputHeader();
    $formfullBuilder->outputAllControls();
    $formfullBuilder->outputFooter();?>


<?php else:?>

<h1><?php echo jLocale::get('jelix~crud.title.update'); ?></h1>
<?php  $formfull = $t->_vars['form'];
    $formfullBuilder = $formfull->getBuilder('html');
    $formfullBuilder->setOptions(array());
    $formfullBuilder->setAction( $t->_vars['submitAction'], array('id'=>$t->_vars['id'], $t->_vars['offsetParameterName']=>$t->_vars['page']));
    $formfullBuilder->outputHeader();
    $formfullBuilder->outputAllControls();
    $formfullBuilder->outputFooter();?>


<?php endif;?>



<p><a href="<?php jtpl_function_html_jurl( $t,$t->_vars['listAction'], array($t->_vars['offsetParameterName']=>$t->_vars['page']));?>" class="crud-link"><?php echo jLocale::get('jelix~crud.link.return.to.list'); ?></a>.</p><?php 
}
return true;}
