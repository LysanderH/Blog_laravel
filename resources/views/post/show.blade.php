<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$post->title}}</title>
</head>
<body>
@component('components.main-navigation')
@endcomponent
<h1><a href="/posts/{{$post->id}}">{{$post->title}}</a></h1>
<div>
    {{$post->content}}
</div>
<div>
    <time datetime="{{$post->published_at}}"></time>{{$post->published_at->diffForHumans()}}
</div>
<div>
    <p>
        <a href="/author/{{$post->author->id}}/posts">Écrit par : {{$post->author->name}}</a>
    </p>
</div>
@can('update',$post)
    <div>
        <a href="/posts/{{$post->id}}/edit">Modifier</a>
    </div>
@endcan
</body>
</html>
