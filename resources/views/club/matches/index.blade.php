@extends ('layout')

@section ('content')
    <h1> Geplaatste wedstrijden</h1>

    <div>
        @foreach ($matches as $match)

            @include ('club.matches.match')
            <br>
        @endforeach

    </div>


@endsection
