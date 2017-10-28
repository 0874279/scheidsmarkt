@extends ('layout')
@section('title', 'Mijn reacties')

@section ('content')
    <div>
    <h2> Aangestelde wedstrijden</h2>
            @foreach ($assigned_matches as $assigned_match)
                @include ('ref.matches.assignedmatch')
                <br>
            @endforeach

    </div>
    <div>
    <h2> Mijn Reacties</h2>

    <div>
        @foreach ($matches as $match)
            @include ('ref.matches.mymatch')
            <br>
        @endforeach
    </div>
    </div>

@endsection
