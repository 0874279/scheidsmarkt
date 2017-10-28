<div id="accordion" role="tablist" aria-multiselectable="true">
    <div class="card">
        <div class="card-header" role="tab" id="heading{{$assigned_match->id}}">
            <h5 class="mb-0">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$assigned_match->id}}" aria-expanded="false" aria-controls="collapseOne">
                     {{$assigned_match->club->name}} {{$assigned_match->teamnumber}} - {{$assigned_match->awayteam}} op {{$assigned_match->date}} om {{$assigned_match->time}}
                </a>
            </h5>
        </div>

        <div id="collapse{{$assigned_match->id}}" class="collapse" role="tabpanel" aria-labelledby="headingOne">
            <div class="card-block">
                <input type="button" class="btn btn-default" value="Ga naar wedstrijd" onclick="location.href ='/ref/matches/{{$assigned_match->id}}'">
                <input type="button" class="btn btn-danger" value="Afmelden" onclick="location.href ='/ref/matches/destroy/{{$assigned_match->id}}'">
            </div>
        </div>
    </div>
</div>