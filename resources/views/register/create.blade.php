@extends('layout')
@section('title', 'Registreren')

@section('content')
    <h1>Registreren</h1>
    <div id="accordion" role="tablist" aria-multiselectable="false">
    @include('register.club')
    @include('register.ref')@include ('partials.errors')
    </div>

@endsection
