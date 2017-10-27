@extends ('layout')

@section ('content')
    <div>
    <h1> Aangestelde wedstrijden</h1>
            @foreach ($assignedMatches as $mymatch)
                {{$matches[$mymatch]}}
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
