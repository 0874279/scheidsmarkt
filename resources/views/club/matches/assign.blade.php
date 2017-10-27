
<!-- Button trigger modal -->
<button type="button" data-toggle="modal" data-target="#assignRef{{$match->id}}">Scheidsrechter toewijzen</button>
<!-- Modal -->
<div class="modal fade" id="assignRef{{$match->id}}" tabindex="-1" role="dialog" aria-labelledby="modal{{$match->id}}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="GET" action="/club/matches/{{$match->id}}/assign/">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal{{$match->id}}">Scheidsrechter voor {{$match->club->name}} {{$match->teamnumber}} - {{$match->awayteam}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        <input type="hidden" name="matches_id" value="{{$match->id}}">
                    @unless ($respondedRefs->count())
                        Er zijn geen reacties van scheidsrechters.
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Sluiten</button>
                        </div>
                    @else
                    @foreach ($respondedRefs as $respondedRef)
                        <div class="radio">
                        <label><input type="radio" name="refs_id" value="{{$respondedRef->refs->id}}">{{$respondedRef->refs->name}}</label>
                        </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Sluiten</button>
                                <button type="submit" class="btn btn-primary">Opslaan</button>
                            </div>
                    @endforeach
                    @endunless
                </div>
            </form>
        </div>
    </div>
</div>