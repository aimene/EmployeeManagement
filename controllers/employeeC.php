<?php
require_once CLASSES.DS.'controller.php';
class EmployeeController extends Controller {
    public function construct(){}

    public function list(){
      $this->renderview('employee','list');
    }
}
?>