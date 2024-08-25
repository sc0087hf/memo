<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Chef extends Model
{
    use HasFactory;

    public function foods(): BelongsToMany
    {
        return $this->belongsToMany(Food::class)->withTimestamps();
    }
}
