<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table ='artikels';


	protected $fillable = ['id', 'judul','isi','slug','tag','created_at','updated_at'];
}
