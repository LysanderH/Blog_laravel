<div role="navigation">
    <a href="/">Accueil</a> -
    <a href="/contact">Contact</a> -
    <a href="/about">À propos</a> -
    @auth
        <a href="/posts/create">Créer un post</a>
    @endauth
    @guest
        <a href="/login">Connecter</a>
    @else
        - <a href="/login">Déconnecter</a>
    @endguest
</div>
