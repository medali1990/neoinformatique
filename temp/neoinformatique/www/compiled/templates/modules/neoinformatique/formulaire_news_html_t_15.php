<?php 
if (jApp::config()->compilation['checkCacheFiletime'] &&
filemtime('C:\wamp2\www\jelix\neoinformatique/modules/neoinformatique/templates/formulaire_news.tpl') > 1443726834){ return false;
} else {
 require_once('C:\wamp2\www\jelix\lib\jelix/plugins/tpl/html/function.formurl.php');
 require_once('C:\wamp2\www\jelix\lib\jelix/plugins/tpl/html/function.formurlparam.php');
 require_once('C:\wamp2\www\jelix\lib\jelix/plugins/tpl/html/function.jurl.php');
function template_meta_79067173f2b1dbdab8df9ee09cc4ef2e($t){

}
function template_79067173f2b1dbdab8df9ee09cc4ef2e($t){
?><?php echo $t->_vars['MAIN']; ?>
<h1>Creation d'une news</h1>
<form action="<?php jtpl_function_html_formurl( $t,'neoinformatique~default:save_create');?>" method="POST">
	<?php jtpl_function_html_formurlparam( $t);?>
	<label for="sujet">Sujet</label>   <input name="sujet" type="text">
	<label for="texte">Description</label>   <input name="texte" type="textarea">
	<label for="news_date">Date</label>   <input name="news_date" type="date">
	<input type="submit" value="Enregister">
	<a href=<?php jtpl_function_html_jurl( $t,'neoinformatique~default:index');?>>Annuler</a>
</form><?php 
}
return true;}
