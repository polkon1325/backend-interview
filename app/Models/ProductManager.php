<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductManager extends Model
{
    // Reference from migration schema table
    protected $table = 'product_table';
    use HasFactory;
}
