<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    protected $guarded = array("id", "insert_date_time", "insert_name");
    protected $table = 'ideas';
}
