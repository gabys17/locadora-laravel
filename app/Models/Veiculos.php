<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculos extends Model
{
    use HasFactory;

    protected $table = 'veiculos';
    protected $fillable = [''];

    public function Marca(){
        return $this->belongsTo(Marca::class, 'id_marca');
     }

    public function Cor(){
        return $this->belongsTo(Cor::class, 'id_cor');
     }

}
