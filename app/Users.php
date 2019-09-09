<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model {
    //
    protected $table = 'user';
    protected $primaryKey = 'userId';
    public $timestamps = false;

    public function status() {
    	 return $this->hasOne('App\Status','statusId','statusId');
    }
}
