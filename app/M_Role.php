<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class M_Role extends Model
{
    public $primaryKey = 'id_role';
    protected $table = 'tb_role';
    public $timestamps = false;

   	public function M_User(){
   		return $this->hasMany('App\M_User','id_role','id_role');
   	}
}
