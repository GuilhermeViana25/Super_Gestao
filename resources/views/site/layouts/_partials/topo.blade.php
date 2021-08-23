<nav class="navbar navbar-expand-lg menu-paginas">

    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('site.index') }}">
            <img class="logo" src="{{ asset('img/logo.png') }}">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('site.index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('site.sobrenos') }}">Sobre Nós</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('site.contato') }}">Contato</a>
                </li>
            </ul>
        </div>
    </div>
    
</nav>