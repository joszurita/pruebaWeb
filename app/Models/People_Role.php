<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People_Role extends Model
{
    public function role(){
        return $this-> belongsTo(Role::class);
    }
    public function people(){
        return $this-> belongsTo(People::class);
    }
}
