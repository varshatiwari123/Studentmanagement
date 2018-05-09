<?php
 require_once 'dashboardController.php';
class UserController {
       
   public function handleRequest() {
       // echo "user controller echo";die;
     $method = isset($_GET['method'])?$_GET['method']:NULL;
        try {
            if ( $method=='register' ) {
                $this->register();
            } elseif ( $method == 'login' ) {
                $this->login();
            } else {
                $this->showError("Page not found", "Page for operation ".$method." was not found!");
            }
        } catch ( Exception $e ) {
            // some unknown Exception got through here, use application error page to display it
            $this->showError("Application error", $e->getMessage());
        }
   }
   public function register() {
      
          
           include 'view/register.php';
          
      
      
   }
      public function login() {
      
          echo "blah die";die;
          // include 'view/register.php';
          
      
      
   }
}
?>