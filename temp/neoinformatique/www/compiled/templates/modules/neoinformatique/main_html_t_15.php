<?php 
if (jApp::config()->compilation['checkCacheFiletime'] &&
filemtime('C:\wamp2\www\jelix\neoinformatique/modules/neoinformatique/templates/main.tpl') > 1443817348){ return false;
} else {
 require_once('C:\wamp2\www\jelix\lib\jelix/plugins/tpl/html/function.jurl.php');
function template_meta_e8cabe6f92cac4f319dc4748ed7f2e29($t){

}
function template_e8cabe6f92cac4f319dc4748ed7f2e29($t){
?>
<div id="page"></div>
	

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">NeoInformatique</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <!--<li class="active"><a href="#">Home</a></li>-->
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container" style="margin-top:30px;">

      <div class="starter-template">
        <h1>Bootstrap starter template</h1>
        <div class="row">
	<div class="col-md-1">
<p>Vous etes sur le template bonjour.tpl</p>
	</div>
	<table class="table table-bordered">
            <thead>
              <tr>
                
                <th>First Name</th>
                <th>Titre de la news</th>
                <th>Description</th>
              </tr>
            </thead>
            <tbody>
            	<?php foreach($t->_vars['liste_news'] as $t->_vars['key']=>$t->_vars['news']):?>
              <tr>
                <td rowspan="2"><?php echo $t->_vars['key']; ?></td>
                <td><?php echo $t->_vars['news']->sujet; ?></td>
                <td><?php echo $t->_vars['news']->texte; ?></td>
              </tr>
              <?php endforeach;?>
            </tbody>
          </table>
		
		<p>si vous voulez acceder vers l'espace de gestion du contenu<a href="<?php jtpl_function_html_jurl( $t,'neoinformatique~admin:index');?>">cliquer ici</a></p>
		<p>Affichage de ma liste des news sans jelix <a href="<?php jtpl_function_html_jurl( $t,'neoinformatique~view');?>">cliquer ici</a></p>
		</div>
      </div>

    </div><!-- /.container -->

 
  </body><?php 
}
return true;}
