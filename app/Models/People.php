<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    public  $fillable = [
        'nameUser',
        'nameComplete',
        'email',
        'number',
        'age',
        'dayBirthday'
    ];
    public function role(){
        return $this-> hasMany(Role::class);
    }
}
