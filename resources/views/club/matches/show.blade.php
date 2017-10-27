@extends ('layout')

@section ('content')
<h1>ID: {{$match->id}} {{$match->club->name}} {{$match->typeteam->name}} {{$match->teamnumber}} - {{$match->awayteam}} </h1>
    Datum {{$match->date}} <br>
    Tijdstip {{$match->time}} <br>
    Type wedstrijd {{$match->typematch->name}} <br>
    Categorie {{$match->typecategory->name}} <br>
    Klasse {{$match->typeclass->name}}<br>
    Scheidsrechter: Nog geen scheidsrechter toegewezen <br>

    Wijzigen
@include ('club.matches.assign')
    <a href="/club/matches/destroy/{{$match->id}}"> Verwijderen </a>
    <a href="/club/matches">Terug naar overzicht</a>
@endsection