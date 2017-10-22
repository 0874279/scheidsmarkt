
<!-- Button trigger modal -->
<button type="button" data-toggle="modal" data-target="#assignRef{{$match->id}}">Scheidsrechter toewijzen</button>
<!-- Modal -->
<div class="modal fade" id="assignRef{{$match->id}}" tabindex="-1" role="dialog" aria-labelledby="modal{{$match->id}}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal{{$match->id}}">Scheidsrechter voor {{$match->club->name}} {{$match->teamnumber}} - {{$match->awayteam}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>