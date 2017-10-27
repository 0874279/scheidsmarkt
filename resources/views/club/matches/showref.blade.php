@extends ('layout')

@section ('content')
<h1>{{$match->club->name}} {{$match->typeteam->name}} {{$match->teamnumber}} - {{$match->awayteam}}</h1>
<h3>Scheidsrechter: {{$referee->name}}</h3>
    Datum {{$match->date}} <br>
    Tijdstip {{$match->time}} <br>
    Type wedstrijd {{$match->typematch->name}} <br>
    Categorie {{$match->typecategory->name}} <br>
    Klasse {{$match->typeclass->name}}<br>
    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#editMatch">Wijzigen</button>
    @include ('club.matches.edit')
    <input type="button" class="btn btn-default" value="Terug naar overzicht" onclick="location.href ='/club/matches'">
    <input type="button" class="btn btn-danger" value="Verwijderen" onclick="location.href ='/club/matches/destroy/{{$match->id}}'">
@endsection