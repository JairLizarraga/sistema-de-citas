<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModuloAtencion extends Model
{   
    protected $table = 'modulo_atencion';
    protected $fillable = ['modulo_nombre', 'modulo_direccion', 'modulo_telefono', 'modulo_email'];
    protected $guarded = ['modulo_id'];
}
