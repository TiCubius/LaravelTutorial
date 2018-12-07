<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Model
{
    // Autorise la création d'un utilisateur avec ces champs
    protected $fillable = ["lastname", "firstname", "email", "password", "role_id"];

    /**
     * Un utilisateur possède plusieurs posts
     *
     * @return HasMany
     */
    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }
}
