<?php
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;

class TCourse extends Model {
    protected $table = 'tcourse';
    protected $primaryKey = 'idCourse';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = true;
    public function enrolled()
    {
        return $this->hasOne(TEnrolled::class, 'idEnrolled', 'idEnrolled');
    }
    public function competences()
    {
        return $this->hasMany(TCompetence::class, 'idCourse', 'idCourse');
    }
}
?>