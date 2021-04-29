<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Startup extends Model
{
    use HasFactory;
    public function features(){
        return $this->belongsToMany('App\Models\Feature','feature_startup');

    }
}
