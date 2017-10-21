@extends ('layout')

@section ('content')
    <h1> Overzicht wedstrijden</h1>

    <div>
        @foreach ($matches as $match)

            @include ('ref.matches.match')
            <br>
        @endforeach

    </div>

@endsection
