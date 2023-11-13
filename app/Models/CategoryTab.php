<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryTab extends Model
{
    protected $tables="category_tabs";
    protected $fillable=['name', 'description', 'status', ];

}
