<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modification de {{$post->title}}</title>
</head>
<body>
<h1>Mettre à jour cet article</h1>
<div>
    <form action="/posts/{{$post->id}}" method="post">
        @csrf
        @method('PUT')

        <div>
            <label for="title">Le titre</label>
        </div>
        <div>
            <input type="text" id="title" name="title" value="{{$post->title}}">
        </div>
        <div>
            <label for="content">Contenu</label>
        </div>
        <div>
            <textarea type="text" id="content" name="content">{{$post->content}}</textarea>
        </div>
        <div><input type="submit" value="enregistrer"></div>
    </form>
</div>
</body>
</html>
