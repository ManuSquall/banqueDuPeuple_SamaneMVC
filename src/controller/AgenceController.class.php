<?php
    // session_start();


use libs\system\Controller;
use src\model\UserRepository;
use src\model\AgenceRepository;
class AgenceController extends Controller{

    public function __construct(){
        parent::__construct();
    }

    public function accueil()
    {
        // echo $_GET['id'];
        // gérer le retour a l'accueil à partir du titre du header
        if($_GET['id']== null){
            // $profil = $data['user']->getProfil()->getLibelle();
            $url= $_SERVER['REQUEST_URI'];
            // the first character if '/' error if we let it -> //
            $url = substr($url, 37);
            // echo $url;
            return $this->view->load($url);
        }else{
            $userdb = new UserRepository();
              $user = $userdb->getUserById($_GET['id']);

              // copier coller de la fonction connect:
              if($user != NULL){
                // $_SESSION['user'] = $user;
                $data['user']= $user;
                $profil = $data['user']->getProfil()->getLibelle();
                /// we get the profil and depending on it we load the profil accueil corresponding
                // echo $data['user']->getNom();
                // die();
                return $this->view->load("accueil/accueil_".$profil, $data);
            }else{
                return $this->view->redirect("");
                // return $this->accueil();
            }
        }
        
    }

    public function deconnect()
    {
        return $this->view->redirect("");
    }

    
    
    public function connect(){  


        $userdb = new UserRepository();
              $user = $userdb->verifyUser($_POST['login'], $_POST['mdp']);
            if($user != NULL){
                // $_SESSION['user'] = $user;
                $data['user']= $user;
                $profil = $data['user']->getProfil()->getLibelle();
                /// we get the profil and depending on it we load the profil accueil corresponding
                // echo $data['user']->getNom();
                // die();
                return $this->view->load("accueil/accueil_".$profil, $data);
            }else{
                return $this->view->redirect("");
                // return $this->accueil();
            }
        
    }  

    public function list_agence(){
        $userdb = new UserRepository();
        $agencedb = new AgenceRepository();
        $data['user']= $userdb->getUserById($_GET['id']);
        $data['listeAgence'] = $agencedb->listeOfAgence();
        return $this->view->load("agence/listAgence", $data);
    }

    public function list_user($id){
        $userdb = new UserRepository();
        if($id){
            $data['user']= $userdb->getUserById($id);
        }else{
            $data['user']= $userdb->getUserById($_GET['id']);
        }
        $data['listeUser'] = $userdb->listeUser();
        return $this->view->load("user/listUser", $data);
    }

    public function list_emp($id){
        $userdb = new UserRepository();
        if($id){
            $data['user']= $userdb->getUserById($id);
        }else{
            $data['user']= $userdb->getUserById($_GET['id']);
        }
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

    public function form_agence(){
        $userdb = new UserRepository();
        $agencedb = new AgenceRepository();
        $data['user']= $userdb->getUserById($_GET['id']);
        return $this->view->load("agence/addAgence", $data);
    }

     /** 
     * url pattern for this method
     * localhost/projectName/Test/delete/value
     */
    public function delete($id){
        $userdb = new UserRepository();
        $userdb->deleteUser($id);
        return $this->list_user();
    }

    public function create_agence(){

        $agencedb = new AgenceRepository();
        if(isset($_POST['save']))
        {
            extract($_POST);
            $data['ok'] = 0;
            if(!empty($numero) && !empty($ville) && !empty($region)) {
                
                $agenceObject = new Agence();
                
                $agenceObject->setNumero(addslashes($numero));
                $agenceObject->setVille(addslashes($ville));
                $agenceObject->setRegion(addslashes($region));
                

                $ok = $agencedb->addAgence($agenceObject);
                $data['ok'] = $ok;
            }
            return $this->list_agence($_GET['id']);
        }else{
            return $this->list_agence($_GET['id']);

        }
        
    }




}
?>