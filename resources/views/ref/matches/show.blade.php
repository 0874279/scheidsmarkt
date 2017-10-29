@extends ('layout')
@section('title', 'Wedstrijd')


@section ('content')
<h1>{{$match->club->name}} {{$match->typeteam->name}} {{$match->teamnumber}} - {{$match->awayteam}}</h1>
    Datum {{$match->date}} <br>
    Tijdstip {{$match->time}} <br>
    Type wedstrijd {{$match->typematch->name}} <br>
    Categorie {{$match->typecategory->name}} <br>
    Klasse {{$match->typeclass->name}}<br>
    Scheidsrechter: NTB <br><br>

    Reageren <br>
    Reactie verwijderen <br>
    Annuleren <br>
    Terug naar overzicht
@endsection