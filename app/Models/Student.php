<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;


    protected $table = 'students';
    protected $guarded = [];


    public function classes()
    {
        return $this->belongsToMany(Classs::class, 'registeredOnes', 'student_id', 'class_id');
    }


}
