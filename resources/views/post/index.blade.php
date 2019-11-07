<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description"
          content="la page d'accueil avec tous les articles">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
<h1>Home</h1>
@component('components.main-navigation')
@endcomponent
<div>
    @foreach($posts as $post)
        <article>
            <h2><a href="/posts/{{$post->id}}">{{$post->title}}</a></h2>
            <div>
                <p>{{$post->content}}</p>
            </div>
            <p><a href="/author/{{$post->author->id}}/posts">{{$post->author->name}}</a></p>
        </article>
        @auth
            @can('update', $post)
            <a href="/posts/{{$post->id}}/edit">Bearbeiten ce post</a>
            @endcan
        @endauth
    @endforeach
    {{ $posts->links() }}

</div>
</body>
</html>
