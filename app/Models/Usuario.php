<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    
    protected $table = 't_usuarios';
    protected $fillable=['nombre', 'rol_id' ];

    public function rol(){
        return $this->belongsTo(Rol::class, 'rol_id');
    }
}
