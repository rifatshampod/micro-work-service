<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    // to fetch data from table with different name as the model
    //public $table="jobs"; 
    public $timestamps = false;
}
