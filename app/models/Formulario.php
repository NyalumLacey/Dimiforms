<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    public static $table = 'usuarios';
    
    public function set_password($string){
        $this->set_attribute('Contrasena', Hash::make($string));
    }
}
