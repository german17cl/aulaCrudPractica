<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'profesion', 'grado', 'telefono'];

    


    public function courses(){
        return $this->hasMany(Course::class);
    }
}
