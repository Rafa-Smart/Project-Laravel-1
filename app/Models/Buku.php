<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = "Books";
    protected $fillable = ['id','category_id','judul','penulis','penerbit','tahun' ];
}
