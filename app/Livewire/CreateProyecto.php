<?php

namespace App\Livewire;

use App\Livewire\Forms\proyCreateForm;
use App\Livewire\Forms\proyEditForm;
use App\Models\Estatus;
use App\Models\Fase;
use App\Models\Municipio;
use App\Models\Proyecto;
use App\Models\Sector;
use App\Models\Seguimiento;
use App\Models\Tipo;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class CreateProyecto extends Component
{
    use WithPagination;
    public proyCreateForm $proyCreate;
    public proyEditForm $proyEdit;
    public $sectores;
    public $tipos;
    public $municipios;
    public $fases;
    public $status;
    public $seguimientos;
   

    public function mount(){
        $this->sectores = Sector::all();
        $this->tipos = Tipo::all();
        $this->municipios = Municipio::all();
        $this->fases = Fase::all();
        $this->status = Estatus::all();
        $this->seguimientos = Seguimiento::all();

    }

    public function save(){

        $this->proyCreate->store();
        $this->resetPage(pageName: 'pageProy');
        $this->dispatch('alertSave', 'Registro guardado...');


    }

    public function edit($proyId){
        $this->resetValidation(); 

        $this->proyEdit->find($proyId);
            
    }

    public function update(){
      
        $this->proyEdit->updateProy();
        $this->resetPage(pageName: 'pageProy');
    }
    #[On('delete')]
    public function destroy($proyId){

        $proy = Proyecto::find($proyId);
        $proy->delete();
        $this->resetPage(pageName: 'pageProy');
    }

    public function render()
    {
        $proyectos = Proyecto::paginate(4, pageName: 'pageProy');
        return view('livewire.create-proyecto', compact('proyectos'));
    }
}
