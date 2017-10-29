<div class="card">
    <div class="card-header" role="tab" id="headingOne">
        <h5 class="mb-0">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseClub" aria-expanded="false" aria-controls="collapseOne">
                Verenigingen
            </a>
        </h5>
    </div>

    <div id="collapseClub" class="collapse" role="tabpanel" aria-labelledby="headingClub">
        <div class="card-block">
            <form method="POST" action="/register">
                {{csrf_field()}}
                <input type="number" id="type" name="type" value="1" hidden required>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="name">Naam vereniging</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="col-md-3">
                        <label for="name">Telefoonnummer</label>
                        <input type="number" class="form-control" id="phone" name="phone" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="password">Wachtwoord</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="col-md-3">
                        <label for="password_confirmation">Bevestig wachtwoord</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-4">
                        <label for="address">Straatnaam</label>
                        <input type="text" class="form-control" id="address" name="address" required>
                    </div>
                    <div class="col-md-1">
                        <label for="name">Huisnummer</label>
                        <input type="number" class="form-control" id="housenumber" name="housenumber" required>
                    </div>
                    <div class="col-md-1">
                        <label for="name">Toevoeging</label>
                        <input type="text" class="form-control" id="housenumberadd" name="housenumberadd">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2">
                        <label for="name">Postcode</label>
                        <input type="text" class="form-control" id="zip" name="zip" required>
                    </div>
                    <div class="col-md-4">
                        <label for="name">Stad</label>
                        <input type="text" class="form-control" id="city" name="city" required>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Registreer</button>
                </div>
            </form>
        </div>
    </div>
</div>
