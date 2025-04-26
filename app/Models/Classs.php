<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classs extends Model
{
    use HasFactory;

    protected $table = 'classes';
    protected $guarded = [];


    public function students()
    {
        return $this->belongsToMany(Student::class, 'registeredOnes', 'class_id', 'student_id');
    }


}
