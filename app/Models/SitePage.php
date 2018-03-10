<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SitePage extends Model
{
   protected $fillable = ['title', 'alia', 'description', 'status', 'created_at', 'updated_at'];
}
