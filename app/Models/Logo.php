<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Logo extends Model
{
    protected $table = 'logo';
    protected $guarded = [''];
    public $timestamps = false;

    /**
    * Atributos Imagen y sub ruta
    */
    public function getVerImagenAttribute()
    {
        return asset('storage/'.$this->imagen);
    }
    /**
    * Atributos Solo Imagen y extension
    */
    public function getSoloImagenAttribute()
    {
        $imagen  = explode('/',$this->imagen);
    	return $imagen[1];
    }
}
