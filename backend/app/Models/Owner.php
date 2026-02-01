<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Owner extends Model
{
    public $timestamps = false;

    protected $fillable = [
        "name",
        "country",
        "sex",
    ];

    public function bikes():HasMany
    {
        return $this->hasMany(Bike::class);
    }
}
