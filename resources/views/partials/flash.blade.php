@if ($message = session('message'))
    <div class="alert alert-success" id="flash-message" role="alert">
        {{$message}}
        {{session()->flash('message', null)}}
    </div>
@endif