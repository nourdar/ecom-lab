<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /** @use HasFactory<\Database\Factories\RoleFactory> */
    use HasFactory;
    protected $fillable = ['name', 'description'];

    // علاقة Role مع Users (دور المستخدم)
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
