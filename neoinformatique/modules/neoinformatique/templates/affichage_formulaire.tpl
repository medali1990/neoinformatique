<p>la liste des news</p>
<table>
<tr><td>titre     </td><td>description     </td><td>la date</td></tr>
{foreach $liste as $news}

<tr><td>{$news->sujet}</td><td>{$news->texte}</td><td>{$news->news_date}</td></tr>
{/foreach}

</table>
<input type="boutton" value="jurl 'neoinformatique~default:index'">