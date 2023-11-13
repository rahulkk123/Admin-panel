<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    protected $table="users";
    protected $fillable=['name','email', 'mobile_number' ,'password', 'confirm_password'];
    public function setPasswordAttribute($value){
        $this->attributes['password']=bcrypt($value);
}
}
