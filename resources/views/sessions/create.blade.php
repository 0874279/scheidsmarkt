@extends('layout')

@section('content')

    <div class="col-md-8">
        <h1>Log in</h1>
        <form method="POST" action="/login">

            {{csrf_field()}}
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="password">Wachtwoord</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Log in</button>
            </div>

            @include('partials.errors')
        </form>
    </div>
@endsection
