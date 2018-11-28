<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    // La table roles ne contient pas de champ "created_at" et "updated_at"
    public $timestamps = false;
}
