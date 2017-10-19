@extends ('layout')

@section ('content')
    <title>Nieuwe wedstrijd</title>
    <h1>Plaats nieuwe wedstrijd</h1>

    <form method="POST" action="/club/matches">

        {{csrf_field()}}
        <div class="row">
        </div>
        <div class="row">
            <div class="col-sm-3">
                <label for="date">Datum</label>
                <input name="date" type="date" id="date" class="form-control" value="<?php echo date('Y-m-d'); ?>" >
            </div>
            <div class="col-sm-3">
                <label for="time">Tijdstip</label>
                <input name="time" type="time" id="time" class="form-control" value="14:30" >
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <label for="typeteam_id">Type team</label>
                <select name="typeteam_id" class="form-control" id="typeteam_id">
                    @foreach($typeteams as $type)
                        <option value="{{$type->id}}">{{$type->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-3">
                <label for="teamnumber">Elftal</label>
                <input name="teamnumber" type="number" id="teamnumber" class="form-control" >
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <label for="awayteam">Uitteam</label>
                <input name="awayteam" type="text" id="awayteam" class="form-control" >
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
            <label for="typematch_id">Type wedstrijd</label>
            <select name="typematch_id" class="form-control" id="typematch_id">
                @foreach($typematch as $type)
                    <option value="{{$type->id}}">{{$type->name}}</option>
                @endforeach
            </select>
            </div>
            <div class="col-sm-3">
                <label for="typecategory_id">Categorie</label>
                <select name="typecategory_id" class="form-control" id="typecategory_id" >
                    @foreach($category as $type)
                        <option value="{{$type->id}}">{{$type->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <label for="typeclass_id">Klasse</label>
                <select name="typeclass_id" class="form-control" id="typeclass_id">
                    @foreach($class as $type)
                        <option value="{{$type->id}}">{{$type->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <br>

        <div class="form-group">
            <button type="submit" class="btn btn-default">Opslaan</button>
        </div>

        @include ('partials.errors')
    </form>


@endsection