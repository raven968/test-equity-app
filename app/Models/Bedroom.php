<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\Bedroom\{Attributes, Relationships};

class Bedroom extends Model
{
    use HasFactory, Attributes, Relationships;
    
    protected $guarded = [];
}
