<div id="accordion" role="tablist" aria-multiselectable="true">
    <div class="card">
        <div class="card-header" role="tab" id="heading{{$match->id}}">
            <h5 class="mb-0">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$match->id}}" aria-expanded="false" aria-controls="collapseOne">
                     ID: {{$match->id}}, {{$match->club->name}} {{$match->teamnumber}} - {{$match->awayteam}} op {{$match->date}} om {{$match->time}}
                </a>
            </h5>
        </div>

        <div id="collapse{{$match->id}}" class="collapse" role="tabpanel" aria-labelledby="headingOne">
            <div class="card-block">
                <a href="/club/matches/{{$match->id}}"> 0. Ga naar wedstrijd </a>
                1. Wijzigen
                @include ('club.matches.assign')
                <a href="/club/matches/destroy/{{$match->id}}"> Verwijderen </a>
            </div>
        </div>
    </div>
</div>
