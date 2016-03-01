<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\Date;

/**
 * Class Actor
 * @package AppBundle\Entity
 *
 * @ORM\Entity()
 * @ORM\Table()
 */
class Actor {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $lastName;

    /**
     * @var Date
     * @ORM\Column(type="date")
     */
    private $birthDate;

    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="Role", mappedBy="actor")
     */
    private $roles;

    /**
     * @var string
     * @ORM\Column(type="text", nullable=true)
     */
    private $biographicNote;

    /**
     * @return string
     */
    public function getBiographicNote()
    {
        return $this->biographicNote;
    }

    /**
     * @param string $biographicNote
     */
    public function setBiographicNote($biographicNote)
    {
        $this->biographicNote = $biographicNote;
    }

    /**
     * @return Date
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * @param Date $birthDate
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return ArrayCollection
     */
    public function getRoles()
    {
        return $this->roles ?: new ArrayCollection();
    }

    /**
     * @param ArrayCollection $roles
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;
    }
} 