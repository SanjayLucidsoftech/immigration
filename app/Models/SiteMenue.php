<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteMenue extends Model
{
   // protected $fillable = ['title', 'alia', 'description', 'status', 'created_at', 'updated_at'];
   protected $guarded = ['id', 'created_at', 'updated_at'];
}
