<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
 
    protected $table="users";

    protected $fillable=['name','email_id', 'mobile_number' ,'password', 'confirm_password'];

    public function setPasswordAttribute($value){
        $this->attributes['password']=bcrypt($value);
    }
}
