<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity 
 * @Table(name="profil")
 **/
class Profil
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="string") **/
    private $libelle;
    
     /**
     * One profil has many user. This is the inverse side.
     * @OneToMany(targetEntity="User", mappedBy="profil")
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

    public function getLibelle()
    {
        return $this->libelle;
    }
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
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