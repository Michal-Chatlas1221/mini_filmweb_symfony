<?php

namespace AppBundle\Entity;

use AppBundle\ModelInterfaces\Picture;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Series
 * @package AppBundle\Entity
 *
 * @ORM\Entity()
 * @ORM\Table()
 */
class Series implements Picture {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="Role", mappedBy="series")
     */
    private $roles;

    /**
     * @var Director
     * @ORM\ManyToOne(targetEntity="Director", inversedBy="series")
     */
    private $director;

    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="Rating", mappedBy="series")
     */
    private $ratings;

    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="Opinion", mappedBy="series")
     */
    private $opinions;

    /**
     * @var Season
     * @ORM\OneToMany(targetEntity="Season", mappedBy="series")
     */
    private $seasons;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $name;

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

    /**
     * @return Season
     */
    public function getSeasons()
    {
        return $this->seasons;
    }

    /**
     * @param Season $seasons
     */
    public function setSeasons($seasons)
    {
        $this->seasons = $seasons;
    }
} 