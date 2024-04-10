<?php

namespace App\Models\Traits\Bedroom;

trait Attributes
{
    public function getStatusAttribute(): string
    {
        return count($this->guests) < $this->capacity ? "Libre" : "Ocupada";
    }
}