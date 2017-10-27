
<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="editMatch" tabindex="-1" role="dialog" aria-labelledby="editMatch" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" action="/club/matches/{{$match->id}}/update/">
                <div class="modal-header">
                    <h5 class="modal-title" id="editMatch">Wijzigen wedstrijd</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body ">
                    <input type="hidden" name="matches_id" value="{{$match->id}}">
                    {{csrf_field()}}
                    {{ method_field('PATCH') }}
                    <div class="row">
                    </div>
                    <div class="row">
                        <div class="col-sm-5">
                            <label for="date">Datum</label>
                            <input name="date" type="date" id="date" class="form-control" value="{{$match->date}}" >
                        </div>
                        <div class="col-sm-5">
                            <label for="time">Tijdstip</label>
                            <input name="time" type="time" id="time" class="form-control" value="{{$match->time}}" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="typeteam_id">Type team</label>
                            <select name="typeteam_id" class="form-control" id="typeteam_id">
                                @foreach($typeteams as $type)
                                    <option value="{{$type->id}}">{{$type->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <label for="teamnumber">Elftal</label>
                            <input name="teamnumber" type="number" id="teamnumber" class="form-control" value="{{$match->teamnumber}}" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5">
                            <label for="awayteam">Uitteam</label>
                            <input name="awayteam" type="text" id="awayteam" class="form-control" value="{{$match->awayteam}}" >
                        </div>
                        <div class="col-sm-5">
                            <label for="typeclass_id">Klasse</label>
                            <select name="typeclass_id" class="form-control" id="typeclass_id">
                                @foreach($class as $type)
                                    <option value="{{$type->id}}">{{$type->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="typematch_id">Type wedstrijd</label>
                            <select name="typematch_id" class="form-control" id="typematch_id">
                                @foreach($typematch as $type)
                                    <option value="{{$type->id}}">{{$type->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <label for="typecategory_id">Categorie</label>
                            <select name="typecategory_id" class="form-control" id="typecategory_id" >
                                @foreach($category as $type)
                                    <option value="{{$type->id}}">{{$type->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    @include ('partials.errors')
                </div>
                <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuleren</button>
                        <button type="submit" class="btn btn-primary">Opslaan</button>
                </div>
            </form>
        </div>
    </div>
</div>