<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Table Name
    protected $table = 'popularity';
    // Primary Key
    public $primaryKey = 'id';
   // Timestamps
   public $timestamps = false;

   public function views(){
       return $this->belongsTo('App\Models\Popularity');
   }
}
