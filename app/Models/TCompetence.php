<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TCompetence extends Model
{
    protected $table = 'tcompetence';
    protected $primaryKey = 'idCompetence';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = true;
    public function course()
    {
        return $this->belongsTo(TCourse::class, 'idCourse', 'idCourse');
    }
}
