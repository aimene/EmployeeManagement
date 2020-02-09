<?php
class EmployeeController {
    public function construct(){}
    public function list(){
      $this->renderview('employee','list');
    }

    public function renderview($controller, $viewname){
      echo '<!doctype html>';
      echo '<html lang="fr">';
      echo '<head>';
      include VIEWS.DS.'common'.DS.'head.php';
      echo '</head>';
      echo '<body>';
      include VIEWS.DS.'common'.DS.'nav.php';
      include VIEWS.DS.strtolower($controller).'_'.strtolower($viewname).'.php';
      include VIEWS.DS.'common'.DS.'bs_js.php';
      echo '<body>';
  }
}
?>