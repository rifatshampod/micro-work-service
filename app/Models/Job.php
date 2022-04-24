<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    // to fetch data from table with different name as the model
    //public $table="jobs"; 
    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'name',
        'category_id',
        'description',
        'requirement',
        'target',
        'completion',
        'availability',
        'due_availability',
        'price',
        'campaign_cost',
        'total_cost',
        'featured',
    ];
}