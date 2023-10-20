<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;
    // public $table="users"; use this if your table does not follow the singular-plural naming convention.
    public $timestamp=false;
}
