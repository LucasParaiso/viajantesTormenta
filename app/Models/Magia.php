<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Magia extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    public function ficha() {
        return $this->belongsTo(Ficha::class);
    }
}
