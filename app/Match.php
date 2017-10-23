<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model

    public function typecategory()
    {
        return $this->belongsTo(Typecategory::class);
    }

    public function typeteam()
    {
        return $this->belongsTo(Typeteam::class);
    }

    public function typematch()
    {
        return $this->belongsTo(Typematch::class);
    }

    public function typeclass()
    {
        return $this->belongsTo(Typeclass::class);
    }

    public function club(){
        return $this->belongsTo(Club::class);
    }

    protected $guarded = [];
}
