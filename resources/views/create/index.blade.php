@extends ('layout')

@section ('content')

    <h1>Plaats nieuwe wedstrijd</h1>

    <form>
        <div class="row">
            <div class="col-sm-6">
                <label for="Placeholder1">Placeholder hometeam</label>
                <input type="number" id="club_id" class="form-control" value="TeamX" placeholder="TeamX" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <label for="date">Datum</label>
                <input type="date" id="date" class="form-control" value="<?php echo date('Y-m-d'); ?>">
            </div>
            <div class="col-sm-3">
                <label for="time">Tijdstip</label>
                <input type="time" id="time" class="form-control" value="14:30">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <label for="typeteam_id">Type team</label>
                <select class="form-control" id="typeteam_id">
                    @foreach($typeteam as $type)
                        <option value="{{$type->id}}">{{$type->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-3">
                <label for="teamnumber">Elftal</label>
                <input type="number" id="teamnumber" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <label for="awayteam">Uitteam</label>
                <input type="text" id="awayteam" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
            <label for="matchtype_id">Type wedstrijd</label>
            <select class="form-control" id="matchtype_id">
                <option>Move this to database!</option>
                <option>Competitiewedstrijd</option>
                <option>Bekerwedstrijd</option>
                <option>Oefenwedstrijd</option>
                <option>Toernooi</option>
                <option>Zaalwedstrijd</option>
            </select>
            </div>
            <div class="col-sm-3">
                <label for="categorytype_id">Categorie</label>
                <select class="form-control" id="categorytype_id">
                    <option>Move this to database!</option>
                    <option>A Categorie</option>
                    <option>B Categorie</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <label for="class_id">Klasse</label>
                <select class="form-control" id="class_id">
                    <option>Move this to database!</option>
                    <option>Reserve 4e klasse</option>
                    <option>Reserve 5e klasse</option>
                    <option>Etc..</option>
                </select>
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>


@endsection