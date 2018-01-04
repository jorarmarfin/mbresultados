<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'curso';
    protected $guarded = [''];
    public $timestamps = false;

    /**
     * Atributos de la clase Users
     */
    public function setTituloAttribute($value)
    {
        $this->attributes['titulo'] = $value;
        $this->attributes['slug'] = str_slug($value);
    }

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
    /**
    * Devuelve los valores Activos
    * @param  [type]  [description]
    * @return [type]            [description]
    */
    public function scopeActivo($cadenaSQL){
        return $cadenaSQL->where('activo',1);
    }
}
