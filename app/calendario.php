<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calendario extends Model
{
    protected $table = 'calendario';
    protected $fillable = ['calendario_fecha'];
    protected $guarded = ['calendario_id'];
}
