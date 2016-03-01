<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Director
 * @package AppBundle\Entity
 *
 * @ORM\Entity()
 * @ORM\Table()
 */
class Director {

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
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="Movie", mappedBy="director")
     */
    private $movies;

    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="Series", mappedBy="director")
     */
    private $series;

    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="Season", mappedBy="director")
     */
    private $seasons;

    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="Episode", mappedBy="director")
     * @ORM\OrderBy({"number" = "ASC"})
     */
    private $episodes;

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
     * @return ArrayCollection
     */
    public function getEpisodes()
    {
        return $this->episodes;
    }

    /**
     * @param ArrayCollection $episodes
     */
    public function setEpisodes($episodes)
    {
        $this->episodes = $episodes;
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
     * @return ArrayCollection
     */
    public function getMovies()
    {
        return $this->movies;
    }

    /**
     * @param ArrayCollection $movies
     */
    public function setMovies($movies)
    {
        $this->movies = $movies;
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
    public function getSeasons()
    {
        return $this->seasons;
    }

    /**
     * @param ArrayCollection $seasons
     */
    public function setSeasons($seasons)
    {
        $this->seasons = $seasons;
    }

    /**
     * @return ArrayCollection
     */
    public function getSeries()
    {
        return $this->series;
    }

    /**
     * @param ArrayCollection $series
     */
    public function setSeries($series)
    {
        $this->series = $series;
    }
} 