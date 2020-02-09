<?php
class EmployeeController {
    public function construct(){}

    public function list(){
      require_once MODELS.DS.'employeeM.php';
      $m=New EmployeeModel();
      $employees=$m->list();
      //var_dump($employees);die();
      // Affichage des donnnées récupérées au sein de la vue
      require_once CLASSES.DS.'view.php';
      $v=new View();
      $v->setVar('employeelist',$employees);
      $v->render('employee','list');
    }
}
?>