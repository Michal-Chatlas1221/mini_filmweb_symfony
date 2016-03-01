<?php

namespace AppBundle\Entity;

use AppBundle\ModelInterfaces\Picture;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Movie
 * @package AppBundle\Entity
 *
 * @ORM\Entity()
 * @ORM\Table()
 */
class Movie implements Picture {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="Role", mappedBy="movie")
     */
    private $roles;

    /**
     * @var Director
     * @ORM\ManyToOne(targetEntity="Director", inversedBy="movies")
     */
    private $director;

    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="Rating", mappedBy="movie")
     */
    private $ratings;

    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="Opinion", mappedBy="movie")
     */
    private $opinions;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    private $length;

    /**
     * @return mixed
     */
    public function getDirector()
    {
        return $this->director;
    }

    /**
     * @param mixed $director
     */
    public function setDirector($director)
    {
        $this->director = $director;
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
     * @return mixed
     */
    public function getOpinions()
    {
        return $this->opinions;
    }

    /**
     * @param mixed $opinions
     */
    public function setOpinions($opinions)
    {
        $this->opinions = $opinions;
    }

    /**
     * @return mixed
     */
    public function getRatings()
    {
        return $this->ratings;
    }

    /**
     * @param mixed $ratings
     */
    public function setRatings($ratings)
    {
        $this->ratings = $ratings;
    }

    /**
     * @return mixed
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * @param mixed $roles
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;
    }

    /**
     * @return mixed
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param mixed $length
     */
    public function setLength($length)
    {
        $this->length = $length;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
} 