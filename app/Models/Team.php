<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    //Relación uno a muchos
    public function stats(){
        return $this->hasMany(Stat::class);
    }

    //Relación uno a muchos inversa
    public function school(){
        return $this->belongsTo(School::class);
    }

    public function cycle(){
        return $this->belongsTo(Cycle::class);
    }

    public function tournament(){
        return $this->belongsTo(Tournament::class);
    }
}
