<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TRating extends Model
{
    protected $table = 'trating';
    protected $primaryKey = 'idRating';
    protected $keyType = 'string';
    public $incrementing = false; 
    public $timestamps = true;
}
