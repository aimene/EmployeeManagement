<?php
class EmployeeController {
    public function construct(){}
    public function list(){
      $this->renderview('list');
    }

    public function renderview($viewname){
      echo '<!doctype html>';
      echo '<html lang="fr">';
      echo '<head>';
      include VIEWS.DS.'common'.DS.'head.php';
      echo '</head>';
      echo '<body>';
      include VIEWS.DS.'common'.DS.'nav.php';
      include VIEWS.DS.'home_'.strtolower($viewname).'.php';
      include VIEWS.DS.'common'.DS.'bs_js.php';
      echo '<body>';
  }
}
?>