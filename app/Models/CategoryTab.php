<?php

namespace App\Models;
use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryTab extends Model
{
    protected $tables="category_tabs";
    protected $fillable=['name', 'description', 'status', ];

    public function department(){

        return $this->belongsTo(Department::class);
    }

}
