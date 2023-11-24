<?php

namespace App\Models;
use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryTab extends Model
{
    protected $tables="category_tabs";
    protected $fillable=['name', 'description', 'status', ];

    public function departments(){

        return $this->belongsTo(Department::class);
    }
    
    public function products(){

        return $this->hasMany(Product::class,'category_id','id'); 
    }  
    

}
