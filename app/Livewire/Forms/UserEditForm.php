<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Form;

class UserEditForm extends Form
{
    public $openEdit = false;
    public $userId = "";
    public $name;
    public $rol_id = "";
    public $email;
    public $status = "";

    public function editUser($userId){

        $this->openEdit = true;

        $this->userId = $userId;

        $user = User::find($userId);

        $this->name = $user->name;
        $this->rol_id = $user->rol_id;
        $this->email = $user->email;

        $this->status = $user->status;

        
        $this->status = ($this->status >= 1) ? true : false;
        //dispatch('status', $this->status);
//dd($this->status);
    }

    public function updateUser(){

       // dd($this->status);

        $user = User::find($this->userId);
        

       //$user->update($this->only('name', 'rol_id', 'email'));
       $user->update($this->only('rol_id', 'status'));

       
      // $this->reset();
      // $this->openEdit = false;
    }
}
