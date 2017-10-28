@extends ('layout')
@section('title', 'Overzicht wedstrijden')

@section ('content')

    <h2> Overzicht wedstrijden</h2>

    <div>
        @foreach ($matches as $match)

            @include ('ref.matches.match')
            <br>
        @endforeach

    </div>

@endsection
