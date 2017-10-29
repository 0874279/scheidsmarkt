@extends ('layout')
@section('title', 'Mijn account')


@section ('content')
    <div>
        <h2>Mijn account</h2>
        <div>
            <h3>Clubinstellingen</h3>
            @include('club.account.personal')
            @include('partials.errors')
        </div>
        <div>
            <h3>Wachtwoord aanpassen</h3>
        </div>
        <div>
            Nieuwsbrief ontvangen
            Updates ontvangen
        </div>
    </div>




@endsection

