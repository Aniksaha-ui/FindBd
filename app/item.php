<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class item extends Model
{
   protected $fillable = [
        'i_name', 'c_id','m_id','image','status','date','quantity','price'
    ];
}
