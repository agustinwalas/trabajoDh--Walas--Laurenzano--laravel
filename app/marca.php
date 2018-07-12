<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class marca extends Model
{
    protected $guarded = [];
    protected $marca = 'marca';

    public function modelo(){
      return $this->hasMany(modelo::class);
    }

    public function productos(){

    return $this->hasMany(Producto::class);

    }

}
