<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity 
 * @Table(name="agence")
 **/
class Agence
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="string") **/
    private $ville;
    /** @Column(type="string") **/
    private $region;
    /** @Column(type="string") **/
    private $numero;
    
     /**
     * One agence has many user. This is the inverse side.
     * @OneToMany(targetEntity="User", mappedBy="agence")
     */
    private $users;
    
    
    public function __construct()
    {
        $this->users = new ArrayCollection();
    }
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getVille()
    {
        return $this->ville;
    }
    public function setVille($ville)
    {
        $this->ville = $ville;
    }

    public function getRegion()
    {
        return $this->region;
    }
    public function setRegion($region)
    {
        $this->region = $region;
    }

    public function getNumero()
    {
        return $this->numero;
    }
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }
    
    public function getUsers()
    {
        return $this->users;
    }
    public function setUsers($users)
    {
        $this->formations = $users;
    }
    
}

?>