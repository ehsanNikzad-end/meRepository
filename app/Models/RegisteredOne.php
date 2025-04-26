<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Classs;

class RegisteredOne extends Model
{
    use HasFactory;

    protected $table = 'registeredones'; // 👈 lowercase + plural = good
    protected $guarded = []; // you can also use `$fillable` if you want more control

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }

    public function classs()
    {
        return $this->belongsTo(Classs::class, 'class_id', 'id');
    }
}
