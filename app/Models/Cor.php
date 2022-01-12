<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cor extends Model
{
   use HasFactory;

   protected $table = 'cor';
   protected $fillable = [''];

   public function Veiculos(){
    return $this->hasMany(Veiculos::class, 'id_cor');
 }
}
