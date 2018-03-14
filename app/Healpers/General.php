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


    private function has_children($rows,$id) {
        foreach ($rows as $row) {
          if ($row['parent'] == $id)
            return true;
        }
        return false;
      }
      public function  build_menu($rows,$parent=0)
      {  
        $result = '<ol class="dd-list">';
        foreach ($rows as $row)
        {
          if ($row['parent'] == $parent){
            $result.= "<li class='dd-item dd3-item' data-id='{$row['id']}'><div class='dd-handle dd3-handle'></div><div class='dd3-content'>{$row['menue_name']}</div>";
            if ($this->has_children($rows,$row['id']))
              $result.= $this->build_menu($rows,$row['id']);
            $result.= "</li>";
          }
        }
        $result.= '</ol>';
        return $result;
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
