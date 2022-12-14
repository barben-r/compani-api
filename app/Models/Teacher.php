<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $table = 'teachers';

    protected $fillable = [
        'id',
        'name',
        'first_surname',
        'second_surname',
        'degree'
    ];

    public $timestamps = false;
    public function courses(){
        return $this->belongsToMany(
            Course::class,//teake relationchip
            'teachers_courses', //table pibot o intersection
            'teachers_id', //from
            'courses_id' //to
        );
    }
}
