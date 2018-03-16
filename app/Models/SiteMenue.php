<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteMenue extends Model
{
   // protected $fillable = ['title', 'alia', 'description', 'status', 'created_at', 'updated_at'];
   protected $guarded = ['id', 'created_at', 'updated_at'];

   public static function getSiteMenuesList(){
        $data= Static::where('status', '1')
                       ->where('menue_location', 'header')
                       ->select('id','menue_type','menue_name','parent','link')
                       ->orderBy('order', 'ASC')
                       ->orderBy('parent', 'ASC')
                       ->get();
                       return $data;
            //return response(['Product 1', 'Product 2', 'Product 3'],200);
        }

}
