<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Role
 * @package AppBundle\Entity
 *
 * @ORM\Entity()
 * @ORM\Table()
 */
class Role {

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
    private $characterName;

    /**
     * @var string
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @var Movie
     * @ORM\ManyToOne(targetEntity="Movie", inversedBy="roles")
     */
    private $movie;

    /**
     * @var Episode
     * @ORM\ManyToOne(targetEntity="Episode", inversedBy="roles")
     */
    private $episode;

    /**
     * @var Series
     * @ORM\ManyToOne(targetEntity="Series", inversedBy="roles")
     */
    private $series;

    /**
     * @var Season
     * @ORM\ManyToOne(targetEntity="Season", inversedBy="roles")
     */
    private $season;

    /**
     * @var Actor
     * @ORM\ManyToOne(targetEntity="Actor", inversedBy="roles")
     */
    private $actor;

    /**
     * @return mixed
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * @param mixed $actor
     */
    public function setActor($actor)
    {
        $this->actor = $actor;
    }

    /**
     * @return string
     */
    public function getCharacterName()
    {
        return $this->characterName;
    }

    /**
     * @param string $characterName
     */
    public function setCharacterName($characterName)
    {
        $this->characterName = $characterName;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return Episode
     */
    public function getEpisode()
    {
        return $this->episode;
    }

    /**
     * @param Episode $episode
     */
    public function setEpisode($episode)
    {
        $this->episode = $episode;
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
     * @return Movie
     */
    public function getMovie()
    {
        return $this->movie;
    }

    /**
     * @param Movie $movie
     */
    public function setMovie($movie)
    {
        $this->movie = $movie;
    }

    /**
     * @return Season
     */
    public function getSeason()
    {
        return $this->season;
    }

    /**
     * @param Season $season
     */
    public function setSeason($season)
    {
        $this->season = $season;
    }

    /**
     * @return Series
     */
    public function getSeries()
    {
        return $this->series;
    }

    /**
     * @param Series $series
     */
    public function setSeries($series)
    {
        $this->series = $series;
    }


} 