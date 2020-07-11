<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends model
{
    public static $table = 'usuarios';

    public function set_password($string){
        $this->set_attribute('Contrasena', Hash::make($string));
    }
}
