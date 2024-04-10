<?php

namespace App\Models\Traits\Bedroom;

use App\Models\BedroomGuest;

trait Relationships
{
    public function guests()
    {
        return $this->hasMany(BedroomGuest::class);
    }
}