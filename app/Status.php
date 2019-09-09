<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    //It assumes table table names are plural
    protected $table = 'status';
    protected $primaryKey = 'statusId';
    public $timestamps = false;
}
