<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Bike extends Model
{
    public $timestamps = false;

    public function owner(): BelongsTo
    {
        return $this->belongsTo(Owner::class);
    }
}
