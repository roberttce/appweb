<?php
namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class TUser extends Authenticatable
{
    protected $table = 'tuser';
    protected $primaryKey = 'idUser';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = true;
    protected $fillable = [
       'firstName', 'surName', 'email', 'password',
    ];
 
     
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function person()
    {
        return $this->hasOne(TPerson::class, 'idUser', 'idUser');
    }
}
?>