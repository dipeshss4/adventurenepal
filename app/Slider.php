<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
   protected  $fillable=[
       'name','image','description','status'
   ];
}
