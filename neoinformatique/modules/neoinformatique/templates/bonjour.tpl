
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
            <li class="active"><a href="{jurl 'neoinformatique~default:index'}">Home</a></li>
            <li><a href="{jurl 'neoinformatique~admin:form_create'}">Creation formulaire</a></li>
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
            	{foreach $liste_news as $key=>$news}
              <tr>
                <td rowspan="2">{$key}</td>
                <td>{$news->sujet}</td>
                <td>{$news->texte}</td>
              </tr>
              {/foreach}
            </tbody>
          </table>
		
		<p>si vous voulez acceder vers l'espace de gestion du contenu<a href="{jurl 'neoinformatique~admin:index'}">cliquer ici</a></p>
		<p>Affichage de ma liste des news sans jelix <a href="{jurl 'neoinformatique~view'}">cliquer ici</a></p>
		</div>
      </div>

    </div><!-- /.container -->

 
  </body>