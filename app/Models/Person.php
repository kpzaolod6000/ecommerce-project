<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
    /**
     * Get all of the provider for the Person
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function provider(): HasMany
    {
        return $this->hasMany(Provider::class);
    }
}
