<?php
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;

class TPerson extends Model {
    protected $table = 'tperson';
    protected $primaryKey = 'idPerson';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = true;
    public function user()
    {
        return $this->belongsTo(TUser::class, 'idUser', 'idUser');
    }
}
?>