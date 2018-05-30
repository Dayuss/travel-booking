<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = ['nama_wisata', 'alamat', 'jenis_wisata'];
}
