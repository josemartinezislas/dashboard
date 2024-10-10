<?php

namespace App\Livewire\Forms;

use App\Models\Proyecto;
use Livewire\Attributes\Validate;
use Livewire\Form;

class proyEditForm extends Form
{
    public $proy_nom;
    public $proy_sect = '';
    public $proy_tipo = '';
    public $proy_mpio = '';
    public $proy_fase = '';
    public $proy_stat = '';
    public $proy_seg = '';
    public $proy_desc;
    public $proy_inver;
    public $proy_e_dir;
    public $proy_e_ind;

    public $openEdit = false;
    public $proyId = '';

    public function find($proyId){
        
        $this->openEdit = true;

        $this->proyId = $proyId;

        $proy = Proyecto::find($proyId);

       // dd($proy->proy_nom);
        $this->proy_nom = $proy->proy_nom;
        $this->proy_sect = $proy->proy_sect;
        $this->proy_tipo = $proy->proy_tipo;
        $this->proy_mpio = $proy->proy_mpio;
        $this->proy_fase = $proy->proy_fase;
        $this->proy_stat = $proy->proy_stat;
        $this->proy_seg = $proy->proy_seg;
        $this->proy_desc = $proy->proy_desc;
        $this->proy_inver = $proy->proy_inver;
        $this->proy_e_dir = $proy->proy_e_dir;
        $this->proy_e_ind = $proy->proy_e_ind;
    }

    public function updateProy(){
        //dd($this->proyId);
        $proy = Proyecto::find($this->proyId);
        
        $proy->update($this->only('proy_nom', 'proy_sect', 'proy_tipo', 'proy_mpio', 'proy_fase', 'proy_stat', 'proy_seg', 'proy_desc', 'proy_inver', 'proy_e_dir', 'proy_e_ind'));
        $this->openEdit = false;
    }
    
}
