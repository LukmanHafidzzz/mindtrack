<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LevelUser extends Model
{
    use HasFactory;

    protected $table = 'level_users';

    protected $fillable = [
        'level_name',
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'level_user_id');
    }
}
