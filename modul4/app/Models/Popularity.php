<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Popularity extends Model
{
    use HasFactory;

    // Table Name
    protected $table = 'popularity';
    // Primary Key
    public $primaryKey = 'id';
   // Timestamps
   public $timestamps = false;

   public function car(){
       return $this->hasMany('App\Models\Product');
   }
}
