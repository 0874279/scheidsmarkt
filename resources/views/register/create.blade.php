@extends('layout')

@section('content')
    <h1>Registreren</h1>
    <div id="accordion" role="tablist" aria-multiselectable="false">
    @include('register.club')
    @include('register.ref')
    </div>
@endsection
