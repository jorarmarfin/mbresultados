<?php

namespace App\Models;

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blog';
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
    * Atributos Posteado
    */
    public function getPosteadoAttribute()
    {
        $usuario = User::find($this->idusuario);
        return $usuario->name;
    }
    /**
    * Atributos Fecha Carbon
    */
    public function getFechaDiaAttribute()
    {
        $date = Carbon::createFromFormat('Y-m-d',$this->fecha)->day;
        return str_pad($date, 2, "0", STR_PAD_LEFT);;
    }
    /**
    * Atributos Fecha Carbon
    */
    public function getFechaMesAnioAttribute()
    {
        $date = Carbon::createFromFormat('Y-m-d',$this->fecha);
        switch ($date->month) {
            case 1:
                $mes = 'Ene.';
                break;
            case 2:
                $mes = 'Feb.';
                break;
            case 3:
                $mes = 'Mar.';
                break;
            case 4:
                $mes = 'Abr.';
                break;
            case 5:
                $mes = 'May.';
                break;
            case 6:
                $mes = 'Jun.';
                break;
            case 7:
                $mes = 'Jul.';
                break;
            case 8:
                $mes = 'Ago.';
                break;
            case 9:
                $mes = 'Set.';
                break;
            case 10:
                $mes = 'Oct.';
                break;
            case 11:
                $mes = 'Nov.';
                break;
            case 12:
                $mes = 'Dic.';
                break;

        }
        $year = $date->year;

        return $mes.' '.substr($year, -2);
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
