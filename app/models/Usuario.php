<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public function set_password($string){
        $this->set_attribute('Contrasena', Hash::make($string));
    }
}
