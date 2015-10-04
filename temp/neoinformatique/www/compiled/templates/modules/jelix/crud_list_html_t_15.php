<?php 
if (jApp::config()->compilation['checkCacheFiletime'] &&
filemtime('C:\wamp2\www\jelix\lib\jelix/core-modules/jelix/templates/crud_list.tpl') > 1424786578){ return false;
} else {
 require_once('C:\wamp2\www\jelix\lib\jelix/plugins/tpl/common/function.cycle.php');
 require_once('C:\wamp2\www\jelix\lib\jelix/plugins/tpl/html/function.jurl.php');
 require_once('C:\wamp2\www\jelix\lib\jelix/plugins/tpl/html/function.pagelinks.php');
function template_meta_db7ca66f6ed1c8c65b9872ef562338bd($t){

}
function template_db7ca66f6ed1c8c65b9872ef562338bd($t){
?><h1><?php echo jLocale::get('jelix~crud.title.list'); ?></h1>

<table class="records-list">
<thead>
<tr>
    <?php foreach($t->_vars['properties'] as $t->_vars['propname']):?>

    <?php if(isset($t->_vars['controls'][$t->_vars['propname']])):?>
    <th><?php echo htmlspecialchars($t->_vars['controls'][$t->_vars['propname']]->label); ?></th>
    <?php else:?>

    <th><?php echo htmlspecialchars($t->_vars['propname']); ?></th>
    <?php endif;?>

    <?php endforeach;?>
    <th>&nbsp;</th>
</tr>
</thead>
<tbody>
<?php foreach($t->_vars['list'] as $t->_vars['record']):?>
<tr class="<?php jtpl_function_common_cycle( $t,array('odd','even'));?>">
    <?php foreach($t->_vars['properties'] as $t->_vars['propname']):?>
    <td><?php echo htmlspecialchars($t->_vars['record']->{$t->_vars['propname']}); ?></td>
    <?php endforeach;?>

    <td>
        <a href="<?php jtpl_function_html_jurl( $t,$t->_vars['viewAction'],array('id'=>$t->_vars['record']->{$t->_vars['primarykey']}, $t->_vars['offsetParameterName']=>$t->_vars['page']));?>"><?php echo jLocale::get('jelix~crud.link.view.record'); ?></a>
    </td>
</tr>
<?php endforeach;?>
</tbody>
</table>
<?php if($t->_vars['recordCount'] > $t->_vars['listPageSize']):?>
<p class="record-pages-list"><?php echo jLocale::get('jelix~crud.title.pages'); ?> : <?php jtpl_function_html_pagelinks( $t,$t->_vars['listAction'], array(), $t->_vars['recordCount'], $t->_vars['page'], $t->_vars['listPageSize'], $t->_vars['offsetParameterName'] );?></p>
<?php endif;?>

<p><a href="<?php jtpl_function_html_jurl( $t,$t->_vars['createAction']);?>" class="crud-link"><?php echo jLocale::get('jelix~crud.link.create.record'); ?></a>.</p>

<?php 
}
return true;}
