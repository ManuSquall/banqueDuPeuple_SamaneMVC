<?php
namespace src\model;
use libs\system\Model;
class UserRepository extends Model
{
    /**
     * Methods with DQL (Doctrine Query Language)
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function getUserById($id)
    {
      if($this->db != null)
      {
        return $this->db->getRepository('User')->findOneBy(array('id' => $id));
      }
    }

    public function getProfilById($id)
    {
      if($this->db != null)
      {
        return $this->db->getRepository('Profil')->findOneBy(array('id' => $id));
      }
    }

    public function verifyUser($login, $mdp){
        if($this->db != null)
        {
                $user = $this->db->getRepository('User')->findOneBy(array('login' => $login, 'password' => $mdp));
            
            
            
            if($user == null){
                return null;
            }
            return $user;
        }
    }

    public function listeUserByIdProfil($id){
		if($this->db != null)
		{
			return $this->db->getRepository('User')->findBy(array('profil_id' => $id));
		}
    }

    public function listeUser(){
		if($this->db != null)
		{
			return $this->db->createQuery("SELECT u FROM User u")->getResult();

		}
    }
    
    public function listeOfProfil()
    {
      if($this->db != null)
      {
        return $this->db->getRepository('Profil')->findAll();
      }
    }
    
    public function deleteUser($id){
      if($this->db != null)
      {
        $user = $this->db->find('User', $id);
        if($user != null)
        {
          $this->db->remove($user);
          $this->db->flush();
        }else {
          die("Objet ".$id." does not existe!");
        }
      }
    }
    
    public function getUserProfil($user)
    {
          if($this->db != null)
      {
        return $this->db->getRepository('Profil')->findBy(array('id' => $user));
      }
    }
	
	public function addUser($user)
	{
		if($this->db != null)
		{
			$this->db->persist($user);
			$this->db->flush();

			return $user->getId();
		}
	}

}
?>