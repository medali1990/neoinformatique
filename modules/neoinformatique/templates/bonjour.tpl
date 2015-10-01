<p style="margin-left:300px;">Vous etes sur le template bonjour.tpl</p>
<table>
{foreach $liste_news as $news}
<tr><td>{$news->sujet}</td><td>{$news->texte}</td></tr>
{/foreach}
</table>
<p>si vous voulez acceder vers l'espace de gestion du contenu<a href="{jurl 'neoinformatique~admin:index'}">cliquer ici</a></p>