<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CategoryTab;
use App\Models\ProductImage;
class Product extends Model
{
    use HasFactory;
    protected $table = "products";
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'description', 'price', 'active', 'category_id'];

    public function subcategory()
    {

        return $this->belongsTo(CategoryTab::class);
    }

    
    public function products(){

        return $this->hasMany(ProductImage::class,'product_id','id'); 
    } 
}
