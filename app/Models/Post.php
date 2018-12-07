<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    // Autorise la création d'un article avec ces champs
    protected $fillable = ["user_id", "title", "content"];

    /**
     * Un article appartient à un utilisateur
     *
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
