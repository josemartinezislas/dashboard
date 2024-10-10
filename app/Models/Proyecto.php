<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;

    protected $fillable = [
        'proy_nom',
        'proy_sect',
        'proy_tipo',
        'proy_mpio',
        'proy_fase',
        'proy_stat',
        'proy_seg',
        'proy_desc',
        'proy_inver',
        'proy_e_dir',
        'proy_e_ind'
    ];

    protected $table = 't_proyectos';

    public function sector()
    {
        return $this->belongsTo(Sector::class, 'proy_sect');
    }
    public function tipo()
    {
        return $this->belongsTo(Tipo::class, 'proy_tipo');
    }
    public function municipio()
    {
        return $this->belongsTo(Municipio::class, 'proy_mpio');
    }
    public function fase()
    {
        return $this->belongsTo(Fase::class, 'proy_fase');
    }
    public function status()
    {
        return $this->belongsTo(Estatus::class, 'proy_stat');
    }
}
