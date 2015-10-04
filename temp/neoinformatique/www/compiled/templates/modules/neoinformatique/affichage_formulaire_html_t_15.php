<?php 
if (jApp::config()->compilation['checkCacheFiletime'] &&
filemtime('C:\wamp2\www\jelix\neoinformatique/modules/neoinformatique/templates/affichage_formulaire.tpl') > 1443735281){ return false;
} else {
function template_meta_ed4ab1db61e812d3ab4174035b7d851f($t){

}
function template_ed4ab1db61e812d3ab4174035b7d851f($t){
?><p>la liste des news</p>
<table>
<tr><td>titre     </td><td>description     </td><td>la date</td></tr>
<?php foreach($t->_vars['liste'] as $t->_vars['news']):?>

<tr><td><?php echo $t->_vars['news']->sujet; ?></td><td><?php echo $t->_vars['news']->texte; ?></td><td><?php echo $t->_vars['news']->news_date; ?></td></tr>
<?php endforeach;?>

</table>
<input type="boutton" value="jurl 'neoinformatique~default:index'"><?php 
}
return true;}
