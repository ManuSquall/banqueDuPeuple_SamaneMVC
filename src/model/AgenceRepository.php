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

    

}
?>