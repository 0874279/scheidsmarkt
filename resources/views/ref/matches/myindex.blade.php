@extends ('layout')

@section ('content')
    <div>
    <h1> Aangestelde wedstrijden</h1>
            @foreach ($assigned_matches as $assigned_match)
                @include ('ref.matches.assignedmatch')
                <br>
            @endforeach

    </div>
    <div>
    <h1> Mijn Reacties</h1>

    <div>
        @foreach ($matches as $match)
            @include ('ref.matches.mymatch')
            <br>
        @endforeach
    </div>
    </div>

@endsection
