<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['id_lokasi', 'id_guide', 'tgl_pergi','id_user'];
}
