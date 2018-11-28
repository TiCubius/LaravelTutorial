<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    // Autorise la création d'un utilisateur avec ces champs
    protected $fillable = ["lastname", "firstname", "email", "password", "role_id"];
}
