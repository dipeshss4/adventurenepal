<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class destination extends Model
{
   protected $fillable =['name','destination_type','is_popular','images','description','remarks'];
}
