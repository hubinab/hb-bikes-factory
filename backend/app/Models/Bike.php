<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Bike extends Model
{
    // copilot ez kell a factory mukodesehez
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        "manufacturer",
        "model",
        "license_plate",
        "color",
        "horsepower",
        "consumption",
        "year",
        "owner_id",
    ];

    public function owner(): BelongsTo
    {
        return $this->belongsTo(Owner::class);
    }
}
