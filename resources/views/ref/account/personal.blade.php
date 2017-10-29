<form method="POST" action="/ref/account/update">
    {{csrf_field()}}
    <input type="number" id="type" name="type" value="2" hidden required>
    <div class="form-group row">
        <div class="col-md-6">
            <label for="name">Volledige naam</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$accountDetails->name}}" required>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{$accountDetails->email}}" required>
        </div>
        <div class="col-md-3">
            <label for="name">Telefoonnummer</label>
            <input type="number" class="form-control" id="phone" name="phone" value="{{$accountDetails->phone}}" required>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-4">
            <label for="address">Straatnaam</label>
            <input type="text" class="form-control" id="address" name="address" value="{{$accountDetails->address}}" required>
        </div>
        <div class="col-md-1">
            <label for="name">Huisnummer</label>
            <input type="number" class="form-control" id="housenumber" name="housenumber" value="{{$accountDetails->housenumber}}" required>
        </div>
        <div class="col-md-1">
            <label for="name">Toevoeging</label>
            <input type="text" class="form-control" id="housenumberadd" name="housenumberadd" value="{{$accountDetails->housenumberadd}}">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-2">
            <label for="name">Postcode</label>
            <input type="text" class="form-control" id="zip" name="zip" value="{{$accountDetails->zip}}" required>
        </div>
        <div class="col-md-4">
            <label for="name">Stad</label>
            <input type="text" class="form-control" id="city" name="city" value="{{$accountDetails->city}}" required>
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Opslaan</button>
    </div>
</form>