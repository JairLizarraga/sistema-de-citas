<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    protected $table = 'cita';
    protected $fillable = ['ciudadano_id', 'tramite_id', 'modulo_id', 'calendario_id', 'cita_fecha']
    protected $guarded = ['ciudadano_id'];
}
