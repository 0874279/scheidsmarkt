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
            <form>
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">Naam vereniging</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
            </form>
            </div>
        </div>
    </div>
