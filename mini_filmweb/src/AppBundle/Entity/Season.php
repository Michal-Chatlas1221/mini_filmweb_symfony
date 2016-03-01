<?php

namespace AppBundle\Entity;

use AppBundle\ModelInterfaces\Picture;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Season
 * @package AppBundle\Entity
 *
 * @ORM\Entity()
 * @ORM\Table()
 */
class Season implements Picture {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="Role", mappedBy="season")
     */
    private $roles;

    /**
     * @var Director
     * @ORM\ManyToOne(targetEntity="Director", inversedBy="seasons")
     */
    private $director;

    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="Rating", mappedBy="season")
     */
    private $ratings;

    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="Opinion", mappedBy="season")
     */
    private $opinions;

    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    private $number;

    /**
     * @var Series
     * @ORM\ManyToOne(targetEntity="Series", inversedBy="seasons")
     */
    private $series;

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
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param mixed $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @return mixed
     */
    public function getSeries()
    {
        return $this->series;
    }

    /**
     * @param mixed $series
     */
    public function seSeries($series)
    {
        $this->series = $series;
    }
} 