<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $table='orders';
    protected $fillable=['fname', 'lname', 'email', 'mobile', 'address' ,'area', 'post',	'city',	'pincode',	'district'	,'state',	'country'];
}
