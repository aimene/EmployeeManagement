<?php
class EmployeeController {
    public function construct(){}

    public function index() {
      $this->list();
    }
    public function list(){
      require_once MODELS.DS.'employeeM.php';
      $m=New EmployeeModel();
      $employees=$m->listAll();
      // Affichage au sein de la vue des données récupérées via le model
      require_once CLASSES.DS.'view.php';
      $v=new View();
      $v->setVar('employeelist',$employees);
      $v->render('employee','list');
    }
    public function view($id=null){
      require_once MODELS.DS.'employeeM.php';
      $m=New EmployeeModel();
      require_once CLASSES.DS.'view.php';
      $v=new View();
      if ($employee=$m->listOne($id)) $v->setVar('e',$employee);
      // Affichage au sein de la vue des données récupérées via le model
      $v->render('employee','view');
    }
    public function edit($id=null){
      require_once MODELS.DS.'employeeM.php';
      $m=New EmployeeModel();
      require_once CLASSES.DS.'view.php';
    //  die($edit);
      if(isset($id)){
        if(isset($_POST['NationalIDNumber']) && isset($_POST['LoginID']))
          $m->updateOne($id,$_POST['NationalIDNumber'],$_POST['LoginID']);
       $v=new View();
        if ($employee=$m->listOne($id)) $v->setVar('e',$employee);
        // Affichage au sein de la vue des données récupérées via le model
        $v->render('employee','edit');
      }
    }

    public function editView($id=null){
      require_once MODELS.DS.'employeeM.php';
      $m=New EmployeeModel();
      require_once CLASSES.DS.'view.php';
    //  die($edit);
      if(isset($id)){
        $v=new View();
        if ($employee=$m->listOne($id)) $v->setVar('e',$employee);
        // Affichage au sein de la vue des données récupérées via le model
        $v->render('employee','edit');
      }
    }
    public function delete($id=null){
      require_once MODELS.DS.'employeeM.php';
      $m=New EmployeeModel();
      $m->deleteOne($id);
      $this->list();
    }

}
?>