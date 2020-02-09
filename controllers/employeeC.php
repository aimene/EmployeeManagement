<?php
class EmployeeController {
    public function construct(){}

    public function list(){
      require_once CLASSES.DS.'view.php';
      $v=new View();
      $v->render('employee','list');
    }
}
?>