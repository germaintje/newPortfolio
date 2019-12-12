<?php
require_once './model/Logic.php';

class Controller{

    public function __construct() {
        $this->Logic = new Logic();
    }

    public function __destruct() {
    }

    public function handleRequest() {
        try {
            $op = isset($_REQUEST['op']) ? $_REQUEST['op'] : NULL;
            switch ($op) {
                case 'home':
                $this->collectHome();
                break;
                
                default:
                $this->collectHome();
            }
        } catch ( ValidationException $e ) {
            $errors = $e->getErrors();
        }
    }

    //default pagina
    public function collectHome(){   
            //$reads = $this->Logic->Reads();
        //de view die iets laat zien
        include 'view/home.php';
    }


}
?>