<?php
namespace src\model;
use libs\system\Model;
class AgenceRepository extends Model
{
    /**
     * Methods with DQL (Doctrine Query Language)
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function getAgenceById($id)
	{
		if($this->db != null)
		{
			return $this->db->getRepository('Agence')->findOneBy(array('id' => $id));
		}
    }
    
    public function listeOfAgence()
	{
		if($this->db != null)
		{
			return $this->db->getRepository('Agence')->findAll();
		}
    }

    public function addAgence($agence)
	{
		if($this->db != null)
		{
			$this->db->persist($agence);
			$this->db->flush();

			return $agence->getId();
		}
	}

    

}
?>