<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;



class Admin extends Authenticatable
{
    use HasFactory;
    protected $table="users";
    
    protected $fillable=['name','email', 'mobile_number' ,'password', 'confirm_password'];
}
