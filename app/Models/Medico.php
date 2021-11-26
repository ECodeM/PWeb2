<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model {

public $timestamps = false;


protected $table = 'medicos';
protected $fillable = [

    'nome',
    'idade',
    'especializacao',
    'hospital',
    'crm',
];

}
