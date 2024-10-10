<?php

namespace App\Livewire\Forms;

use App\Models\Proyecto;
use Livewire\Attributes\Validate;
use Livewire\Form;

class proyCreateForm extends Form
{
    public $openSave = false;

    public $proy_nom;
    public $proy_sect = '';
    public $proy_tipo = '';
    public $proy_mpio = '';
    public $proy_fase = '';
    public $proy_stat = '';
    public $proy_seg = '';
    public $proy_desc = '';
    public $proy_inver;
    public $proy_e_dir;
    public $proy_e_ind;

    public function store()
    {
        $proy = Proyecto::create($this->only([
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
        ]));

        $this->openSave = false;
    }

   
}
