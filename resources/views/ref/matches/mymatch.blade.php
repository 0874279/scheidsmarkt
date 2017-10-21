<div id="accordion" role="tablist" aria-multiselectable="true">
    <div class="card">
        <div class="card-header" role="tab" id="heading{{$match->id}}">
            <h5 class="mb-0">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$match->id}}" aria-expanded="false" aria-controls="collapseOne">
                     {{$match->club->name}} {{$match->teamnumber}} - {{$match->awayteam}} op {{$match->date}} om {{$match->time}}
                </a>
            </h5>
        </div>

        <div id="collapse{{$match->id}}" class="collapse" role="tabpanel" aria-labelledby="headingOne">
            <div class="card-block">
                <a href="/ref/matches/{{$match->id}}"> 0. Ga naar wedstrijd </a>

                <a href="/ref/matches/destroy/{{$match->id}}">Reactie verwijderen</a>
            </div>
        </div>
    </div>
</div>