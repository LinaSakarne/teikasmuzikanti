<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AUsers extends Model
{
     protected $table='users';
     
     public function isAdmin() {
        return ($this->name == 'Administrator');
     }
}
