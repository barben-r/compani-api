<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';

    protected $fillable = [
        'id',
        'name',
        'credits'
    ];

    public $timestamps = false;
    public function courses(){
        return $this->belongsToMany(
            Teacher::class,//teake relationchip
            'teachers_courses', //table pibot o intersection
            'courses_id', //from
            'teachers_id' //to
        );
    }
}
