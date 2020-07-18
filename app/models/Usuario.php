<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable {
    public function set_password($string){
        $this->set_attribute('Contrasena', Hash::make($string));
    }
}
