<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Typeteam extends Model
{
    public function typematches(){
        return $this->hasMany(Match::class);
    }
}
