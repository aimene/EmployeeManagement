<?php
require_once CLASSES.DS.'controller.php';
class HomeController extends Controller {
    public function construct(){}

    public function index(){
        //Pas de données à gérer
        //La vue à afficher est la vue index
        $this->renderview('home','index');
    }
}
?>