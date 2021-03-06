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

                <form method="post" action="/ref/matches/">
                    {{csrf_field()}}

                    <input type="hidden" name="match_id" value="{{$match->id}}">
                    <button type="submit" class="btn btn-default" name="submit_param" value="submit_value" class="link-button">Reageren</button>
                    <input type="button" class="btn btn-default" value="Ga naar wedstrijd" onclick="location.href ='/ref/matches/{{$match->id}}'">

                </form>
            </div>
        </div>
    </div>
</div>