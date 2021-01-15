<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laravelUser extends Model
{
    use HasFactory;
    
    protected $table = 'laravel_users';

    protected $fillable = ['username', 'password'];
}
