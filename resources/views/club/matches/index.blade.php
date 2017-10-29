@extends ('layout')
@section('title', 'Overzicht verzoeken')


@section ('content')
    <h2> Overzicht verzoeken</h2>

    <div>
        @foreach ($matches as $match)

            @include ('club.matches.match')
            <br>
        @endforeach

    </div>


@endsection
