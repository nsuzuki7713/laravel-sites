<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = array("id", "insert_date_time", "insert_name");
    protected $table = 'comments';
}
