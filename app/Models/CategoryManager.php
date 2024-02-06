<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryManager extends Model
{
    // Reference from migration schema table
    protected $table = 'category_table';
    use HasFactory;

    // By default, Eloquent expects created_at and updated_at columns to exist on your tables. 
    // In this case, hindi natin kailangan kaya need i-disable
    public $timestamps = false;
}
