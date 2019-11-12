<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create new post</title>
</head>
<body>
<h1>Créer un nouveau post</h1>
<form action="/posts" method="post">
    @csrf
    <div>
        <label for="title">Le titre</label>
    </div>
    <div>
        <input type="text" id="title" name="title">
    </div>
    <div>
        <label for="content">Contenu</label>
    </div>
    <div>
        <textarea type="text" id="content" name="content"></textarea>
    </div>
    <div>
        <label for="published_at_date">Quand voulez-vous publier cet article date</label>
    </div>
    <div>
        <input type="time" name="published_at_time" id="published_at_time">

    </div>
    <div>
        <label for="published_at_time">Quand voulez-vous publier cet article temps</label>
    </div>
    <div>
        <input type="date" name="published_at_date" id="published_at_date">
    </div>
    <div><input type="submit" value="enregistrer"></div>
</form>

</body>
</html>
