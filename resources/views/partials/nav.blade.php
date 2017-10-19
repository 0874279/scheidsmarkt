<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{url('/')}}">ScheidsMarkt</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{url('/')}}">Home</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Informatie Scheidsmarkt
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{url('/about')}}">Over Scheidsmarkt</a>
                    <a class="dropdown-item" href="{{url('/howto')}}">Hoe werkt Scheidsmarkt</a>
                    <a class="dropdown-item" href="{{url('/contact')}}">Contact</a>
                </div>
            </li>

        @if (Auth::check())


                <li class="nav-item">
                    <a class="nav-link" href="{{url('/club/matches/')}}">Overzicht verzoeken</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{url('/club/matches/create')}}">Plaats nieuw verzoek</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Mijn account</a>
                </li>
            </ul>
        <span class="navbar-right">
            <a href="{{url('/?')}}"> Ingelogd als {{Auth::user()->name}} </a> &nbsp
            </span>
        <span class="navbar-right">
                  |   <a href="{{url('/logout')}}">Uitloggen </a>
            </span>

        @else
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/register')}}">Registreren</a>
                </li>
            </ul>
            <span class="navbar-item">
                <a class="nav-link" href="{{url('/login')}}">Inloggen </a>
            </span>
        @endif
    </div>
</nav>