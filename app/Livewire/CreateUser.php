<?php

namespace App\Livewire;

use App\Livewire\Forms\UserEditForm;
use App\Models\Rol;
use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Component;

class CreateUser extends Component
{

    public $nombre = "";
    
    public $roles;
   // public $users;

    public UserEditForm $userEdit;

    public function mount()
    {
        $this->roles = Rol::all();
        //$this->users = User::all();

        
    }

    public function edit($userId){


        $this->userEdit->editUser($userId);
        
    }

    public function update(){

        $this->userEdit->updateUser();
       $this->dispatch('alertSave', 'Registro guardado...');
      
        
    }

    #[On('delete')]
    public function save($postId) {

        dd($this->rol_id);

            }


    public function render()
    {
        $users = User::all();
        return view('livewire.create-user', compact('users'));
    }
}
