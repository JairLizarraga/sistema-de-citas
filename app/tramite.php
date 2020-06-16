<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tramite extends Model
{
    
    protected $table = 'tramite';
    protected $fillable = ['tramite_id', 'tramite_requisitos'];
    protected $guarded = ['tramite_id'];
}
