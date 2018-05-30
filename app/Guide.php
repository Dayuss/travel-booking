<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guide extends Model
{
    protected $fillable = ['nama', 'no_hp', 'id_lokasi'];
}
