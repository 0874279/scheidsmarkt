<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Match_Ref extends Pivot
{
    protected $guarded = [];

    protected $table = "match_ref";

    public function match(){
        return $this->belongsTo(Match::class);
    }

    public function refs(){
        return $this->belongsTo(Ref::class);
    }
}
