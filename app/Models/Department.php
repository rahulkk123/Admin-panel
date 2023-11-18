<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CategoryTab;
class Department extends Model
{
    protected $table="departments";

    protected $fillable =['name', 'photo', 'description' ];


    public function category(){

        return $this->hasMany(CategoryTab::class,'department_id', 'id','name'); 
    } 

}

