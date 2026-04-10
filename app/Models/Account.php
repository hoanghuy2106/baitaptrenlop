<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; 
use Illuminate\Notifications\Notifiable;

class Account extends Authenticatable 
{
    use Notifiable;

    // 1. Phải là user_accounts
    protected $table = 'user_accounts'; 

    protected $fillable = ['username', 'password', 'fullname'];

    protected $hidden = ['password'];

    // 2. BẮT BUỘC: Laravel mặc định tìm cột 'email', nên ta phải chỉ định lại là 'username'
    public function getAuthIdentifierName()
    {
        return 'username';
    }
}