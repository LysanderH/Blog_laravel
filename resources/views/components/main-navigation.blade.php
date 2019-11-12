<div role="navigation">
    <a href="/">Accueil</a> -
    <a href="/contact">Contact</a> -
    <a href="/about">À propos</a> -
    @auth
        <a href="/posts/create">Créer un post</a>
    @endauth
    @if(auth())
        <a href="/login">Connecter</a>
    @else
        <a href="/logout">Déconnecter</a>
    @endif
</div>
