<?php
namespace App\Healpers;
class General {
      public static function classActivePath($path)
      {
          $path = explode('.', $path);
          $segment = 1;
          foreach($path as $p) {
              if((request()->segment($segment) == $p) == false) {
                  return '';
              }
              $segment++;
          }
          return ' active';
      }

      public static function clean($string) {
        $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
        $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
     
        return preg_replace('/-+/', '-', $string); // Replaces multiple hyphens with single one.
     }

     public function  build_option($rows,$parent=0)
      {  
        $result = '';
        foreach ($rows as $row)
        {
          if ($row['parent'] == $parent){
            $result.= "<option>{$row['menue_name']}";
            if ($this->has_children($rows,$row['id']))
              $result.= $this->build_menu($rows,$row['id']);
            $result.= "</option>";
          }
        }
        $result.= '';
        return $result;
      }


      
      
      
}
?>
