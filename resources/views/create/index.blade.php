@extends ('layout')

@section ('content')

    <h1>Plaats nieuwe wedstrijd</h1>

    <form>
        <div class="form-horizontal col-sm-4">
            <label for="date">Datum</label>
            <input type="date" class="form-control" id="date">
            <label for="date">Tijdstip</label>
            <input type="time" class="form-control" id="time">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox"> Check me out
            </label>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>

@endsection