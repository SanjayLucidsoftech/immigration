<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteMenue extends Model
{
   // protected $fillable = ['title', 'alia', 'description', 'status', 'created_at', 'updated_at'];
   protected $table = 'site_menues';
   protected $guarded = ['id', 'created_at', 'updated_at'];


            // SiteMenue model
            // loads only direct children - 1 level
            public function children()
            {
            return $this->hasMany('SiteMenue', 'parent');
            }

            // recursive, loads all descendants
            public function childrenRecursive()
            {
            return $this->children()->with('childrenRecursive');
            // which is equivalent to:
            // return $this->hasMany('SiteMenue', 'parent')->with('childrenRecursive);
            }

            // parent
            public function parent()
            {
            return $this->belongsTo('SiteMenue','parent');
            }

            // all ascendants
            public function parentRecursive()
            {
            return $this->parent()->with('parentRecursive');
            }


   public static function getSiteMenuesList(){
        $data= Static::where('status', '1')
                       ->where('menue_location', 'header')
                       ->select('id','menue_type','menue_name','parent','link')
                       ->orderBy('parent', 'ASC')
                       ->orderBy('order', 'ASC')
                       ->get();
                       return $data;
            //return response(['Product 1', 'Product 2', 'Product 3'],200);
        }

        

}
