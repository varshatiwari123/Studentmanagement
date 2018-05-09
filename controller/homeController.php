<?php
 require_once 'dashboardController.php';
 require_once 'UserController.php';
class HomeController {
      
     private $dashboardController = NULL;
     private $userController = NULL;
    
    public function __construct() {
        $this->dashboardController = new dashboardController();
         $this->userController = new UserController();
    }
    
   public function handleRequest() {
        
     $action = isset($_GET['action'])?$_GET['action']:NULL;
        try {
            if ( !$action ) {
                $this->dashboardController->index();
            } elseif ( $action == 'login' ) {
              
                $this->userController->handleRequest();
            } elseif ( $action == 'delete' ) {
                $this->deleteContact();
            } elseif ( $action == 'show' ) {
                $this->showContact();
            } else {
                $this->showError("Page not found", "Page for operation ".$action." was not found!");
            }
        } catch ( Exception $e ) {
            // some unknown Exception got through here, use application error page to display it
            $this->showError("Application error", $e->getMessage());
        }
   }
}

?>