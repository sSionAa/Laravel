<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use App\Observers\NewsObserver;

#[ObservedBy([NewsObserver::class])]
class News extends Model
{
    //
    
}
