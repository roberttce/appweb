<?php
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;

class TEnrolled extends Model {
    protected $table = 'tenrolled';
    protected $primaryKey = 'idEnrolled';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = true;
    public function course()
    {
        return $this->belongsTo(TCourse::class, 'idCourse', 'idCourse');
    }
    public function person()
    {
        return $this->belongsTo(TPerson::class, 'idPerson', 'idPerson');
    }
}
?>