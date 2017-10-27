<div id="accordion" role="tablist" aria-multiselectable="true">
    <div class="card{{$match->id}}">
        <div class="card-header" role="tab" id="heading{{$match->id}}">
            <h5 class="mb-0">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$match->id}}" aria-expanded="true" aria-controls="collapse{{$match->id}}">
                     {{$match->club->name}} {{$match->teamnumber}} - {{$match->awayteam}} op {{$match->date}} om {{$match->time}}
                </a>
            </h5>
        </div>

        <div id="collapse{{$match->id}}" class="collapse" role="tabpanel" aria-labelledby="heading{{$match->id}}">
            <div class="card-block">
                <input type="button" class="btn btn-default" value="Ga naar wedstrijd" onclick="location.href ='/club/matches/{{$match->id}}'">
                <input type="button" class="btn btn-danger" value="Verwijderen" onclick="location.href ='/club/matches/destroy/{{$match->id}}'">
            </div>
        </div>
    </div>
</div>
