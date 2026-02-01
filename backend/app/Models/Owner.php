<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Owner extends Model
{
    // copilot ez kell a factory mukodesehez
    use HasFactory;

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
