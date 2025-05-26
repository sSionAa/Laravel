<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    /** @use HasFactory<\Database\Factories\EmployeeFactory> */
    use HasFactory;
    protected $table = 'employees';
    protected $connection = 'sqlite';
    public $timestamps = true;
    //Указываем, какие поля можно массово присваивать
    protected $fillable = ['name', 'surname', 'email'];
}
