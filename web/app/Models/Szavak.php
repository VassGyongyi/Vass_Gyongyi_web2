<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Szavak extends Model
{
    use HasFactory;
    protected $fillable = [
        'angol',
        'magyar',
        'temaId',
    
       
    ];
    public function tem(){
        return $this->belongsTo(Szavak::class,'id','temaId');
    }
}
