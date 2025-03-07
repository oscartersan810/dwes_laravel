<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{

    public function maquinas()
{
    return $this->hasMany(MaquinasVirtuales::class, 'id_usuario');
}

    protected $guarded=[];
    use HasFactory;
}
