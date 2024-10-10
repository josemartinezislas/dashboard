<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

    protected $fillable=['nombre'];

    protected $table = 't_roles';

    public function user()
    {
        // relacion juchos a muchos
        return $this->belongsToMany(User::class, 'rol_id');
    }
}
