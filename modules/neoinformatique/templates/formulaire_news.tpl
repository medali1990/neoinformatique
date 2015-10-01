{$MAIN}
<h1>Creation d'une news</h1>
<form action="{formurl 'neoinformatique~default:save_create'}" method="POST">
	{formurlparam}
	<label for="sujet">Sujet</label>   <input name="sujet" type="text">
	<label for="texte">Description</label>   <input name="texte" type="textarea">
	<label for="news_date">Date</label>   <input name="news_date" type="date">
	<input type="submit" value="Enregister">
	<a href={jurl 'neoinformatique~default:index'}>Annuler</a>
</form>