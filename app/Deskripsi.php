<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deskripsi extends Model
{
      protected $fillable = ['id', 'id_lokasi', 'gambar','deskripsi'];

}
