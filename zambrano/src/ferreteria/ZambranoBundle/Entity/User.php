<?php
    namespace ferreteria\ZambranoBundle\Entity;
    use Symfony\Component\Security\Core\User\UserInterface;
    use Doctrine\ORM\Mapping as ORM;
    
    /**
     *@ORM\Entity
     *@ORM\Table(name="admin_user") 
     */
    class User implements UserInterface ,\Serializable
    {  
        /**
        * @var integer $id
        *
        * @ORM\Column(name="id", type="integer")
        * @ORM\Id
        * @ORM\GeneratedValue(strategy="AUTO")
        */
        private $id;
        /**
        * @ORM\Column(type="string", length=255)
        */
        protected $username;
        /**
        * @ORM\Column(name="password", type="string", length=255)
        */
        protected $password;
        /**
        * @ORM\Column(type="string", length=255)
        */
        protected $nombre;
        /**
        * @ORM\Column(type="string", length=255)
        */
        protected $apellido;
        /**
        * se utilizó user_roles para no hacer conflicto al aplicar ->toArray
        en getRoles()
        * @ORM\ManyToMany(targetEntity="Role")
        * @ORM\JoinTable(name="user_role",
        * joinColumns={@ORM\JoinColumn(name="user_id",
        referencedColumnName="id")},
        * inverseJoinColumns={@ORM\JoinColumn(name="role_id",referencedColumnName="id")}
        * )
        */
        
        protected $user_roles;
        public function __construct()
        {
        $this->user_roles = new \Doctrine\Common\Collections\ArrayCollection();
        }
        /**
        * Get id
        *
        * @return integer
        */
        public function getId()
        {
        return $this->id;
        }
        /**
        * Set username
        *
        * @param string $username
        */
        public function setUsername($username)
        {
        $this->username = $username;
        }
        /**
        * Get username
        *
        * @return string
        */
        public function getUsername()
        {
        return $this->username;
        }
 
        /**
        * Set password
        *
        * @param string $password
        */
        public function setPassword($password)
        {
        $this->password = $password;
        }
        /**
        * Get password
        *
        * @return string
        */
        public function getPassword()
        {
        return $this->password;
        }
        
        /**
        * Set nombre
        *
        * @param string $nombre
        */
        public function setNombre($nombre)
        {
            $this->nombre = $nombre;
        }
        
        /**
        * Get nombre
        *
        * @return string
        */
        public function getNombre()
        {
        return $this->nombre;
        }
        
        /**
        * Set apellido
        *
        * @param string $apellido
        */
        public function setApellido($apellido)
        {
            $this->apellido = $apellido;
        }
        
        /**
        * Get apellido
        *
        * @return string
        */
        public function getApellido()
        {
        return $this->apellido;
        }
        /**
        * Get salt
        *
        * @return string
        */
        public function getSalt()
        {
        //return $this->salt;
        }

        /**
        * Add user_roles
        *
        * @param ferreteria\ZambranoBundle\Entity\Role $userRoles
        */
        public function addRole(\ferreteria\ZambranoBundle\Entity\Role $userRoles)
        {
        $this->user_roles[] = $userRoles;
        }
        public function setUserRoles($roles) {
        $this->user_roles = $roles;
        }
        /**
        * Get user_roles
        *
        * @return Doctrine\Common\Collections\Collection
        */
        public function getUserRoles()
        {
        return $this->user_roles;
        }
        /**
        * Get roles
        *
        * @return Doctrine\Common\Collections\Collection
        */
        public function getRoles()
        {
        return $this->user_roles->toArray(); //IMPORTANTE: el mecanismo de seguridad de Sf2 requiere ésto como un array
        }
        /**
        * Compares this user to another to determine if they are the same.
        *
        * @param UserInterface $user The user
        * @return boolean True if equal, false othwerwise.
        */
        public function equals(UserInterface $user) {
        return md5($this->getUsername()) == md5($user->getUsername());
        }
        /**
        * Erases the user credentials.
        */
        public function eraseCredentials() {
        }
        
        /**
 * Serializes the content of the current User object
 * @return string
 */
public function serialize()
{
    return \json_encode(
            array($this->id, $this->username, $this->password,
                    $this->user_roles));
}

/**
 * Unserializes the given string in the current User object
 * @param serialized
 */
public function unserialize($serialized)
{
    list($this->id, $this->username, $this->password,
                     $this->user_roles) = \json_decode(
            $serialized);
}

public function __toString() {
return $this->getUsername();
}
       
      

       
    }
?>
