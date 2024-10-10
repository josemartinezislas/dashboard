<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRol extends Model
{
    use HasFactory;
    protected $table = 't_user_t_rol';

    protected $fillable=['users_id', 't_roles_id'];

    public function users(){
        return $this->hasMany(User::class);
    }
}
