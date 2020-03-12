<?php
    // session_start();


use libs\system\Controller;
use src\model\UserRepository;
class UserController extends Controller{

    public function __construct(){
        parent::__construct();
    }

    public function accueil()
    {
        // $profil = $data['user']->getProfil()->getLibelle();
        $url= $_SERVER['REQUEST_URI'];
        // the first character if '/' error if we let it -> //
        $url = substr($url, 37);
        // echo $url;
        return $this->view->load($url);
    }

    
    
    public function connect(){  


        $userdb = new UserRepository();
              $user = $userdb->verifyUser($_POST['login'], $_POST['mdp']);
            if($user != NULL){
                // $_SESSION['user'] = $user;
                $data['user']= $user;
                $profil = $data['user']->getProfil()->getLibelle();
                /// we get the profil and depending on it we load the profil accueil corresponding
                return $this->view->redirect("User/accueil/accueil_".$profil, $data);
            }else{
                return $this->view->redirect("");
            }
        
    }  

    public function list_client(){
        $userdb = new UserRepository();
        $data['listeClient'] = $userdb->listeUserByIdProfil(2);
        return $this->view->load("user/listClient", $data);
    }

    public function list_user(){
        $userdb = new UserRepository();
        $data['listeUser'] = $userdb->listeUser();
        return $this->view->load("user/listUser", $data);
    }

    public function list_emp(){
        $userdb = new UserRepository();

        $liste = $userdb->listeUser();
        $listefinal = array();
        foreach($liste as $a){
            // var_dump($a);
            // var_dump($a->getProfil()->getId());
            // echo $a->getProfil();
            // die();
            if($a->getProfil()->getId()!=2){
                array_push($listefinal, $a);
            }
        }
        
        // $data['listeEmp'] = $userdb->listeUser();
        $data['listeEmp'] = $listefinal;
        return $this->view->load("user/listEmp", $data);
    }

    public function form_user(){
        $userdb = new UserRepository();
        $data['listeProfil'] = $userdb->listeOfProfil();
        return $this->view->load("user/addUser", $data);
    }

     /** 
     * url pattern for this method
     * localhost/projectName/Test/delete/value
     */
    public function delete($id){
        
        $tdb = new UserRepository();
        $tdb->deleteUser($id);
        return $this->list_user();
    }
}
?>