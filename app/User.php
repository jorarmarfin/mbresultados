<?php

namespace App;

use App\Models\Catalogo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','username', 'email', 'password','idrole','foto','activo'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    /**
    * Atributos Foto
    */
    public function getUserFotoAttribute()
    {
        $foto = asset('/storage/'.$this->foto);
        return $foto;
    }
    /**
     * Atributos de la clase Users
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
    /**
    * Atributos Rol
    */
    public function getRoleAttribute()
    {
        $role = Catalogo::find($this->idrole);
        return $role->codigo;
    }
    /**
     * Establecemos el la relacion con catalogo
     * @return [type] [description]
     */
    public function Rol()
    {
        return $this->hasOne(Catalogo::class,'id','idrole');
    }
}
