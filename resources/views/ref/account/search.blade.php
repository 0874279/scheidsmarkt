@extends ('layout')
@section('title', 'Zoek vereniging')


@section ('content')
    <div>
    <h2>Zoek een vereniging</h2>


        @forelse ($clubs as $club)
            <b>Naam vereniging: {{$club->name}}</b> <br>
            Adres: {{$club->address}} {{$club->housenumber}}, {{$club->city}} <br>
            Email: {{$club->email}} <br>
            Telefoonnummer: {{$club->phone}} <br>
        @empty
            Geen verenigingen gevonden.

        @endforelse

    </div>




@endsection

