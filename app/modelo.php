<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelo extends Model
{
    protected $guarded = [];

    public function marcaM(){
      return $this->belongsTo(marca::class);
    }





}
