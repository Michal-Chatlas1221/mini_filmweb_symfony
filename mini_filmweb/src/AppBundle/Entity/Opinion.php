<?php

namespace AppBundle\Entity;

use AppBundle\ModelInterfaces\Informative;
use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Opinion
 * @package AppBundle\Entity
 *
 * @ORM\Entity()
 * @ORM\Table()
 */
class Opinion implements Informative {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var Profile
     * @ORM\ManyToOne(targetEntity="Profile", inversedBy="opinions")
     */
    private $profile;

    /**
     * @var Movie
     * @ORM\ManyToOne(targetEntity="Movie", inversedBy="opinions")
     */
    private $movie;

    /**
     * @var Episode
     * @ORM\ManyToOne(targetEntity="Episode", inversedBy="opinions")
     */
    private $episode;

    /**
     * @var Season
     * @ORM\ManyToOne(targetEntity="Season", inversedBy="opinions")
     */
    private $season;

    /**
     * @var Series
     * @ORM\ManyToOne(targetEntity="Series", inversedBy="opinions")
     */
    private $series;

    /**
     * @var string
     * @ORM\Column(type="text")
     */
    private $text;

    /**
     * @var DateTime
     * @ORM\Column(type="datetime")
     */
    private $time;

    /**
     * @return mixed
     */
    public function getEpisode()
    {
        return $this->episode;
    }

    /**
     * @param mixed $episode
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
     * @return mixed
     */
    public function getMovie()
    {
        return $this->movie;
    }

    /**
     * @param mixed $movie
     */
    public function setMovie($movie)
    {
        $this->movie = $movie;
    }

    /**
     * @return mixed
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * @param mixed $profile
     */
    public function setProfile($profile)
    {
        $this->profile = $profile;
    }

    /**
     * @return mixed
     */
    public function getSeason()
    {
        return $this->season;
    }

    /**
     * @param mixed $season
     */
    public function setSeason($season)
    {
        $this->season = $season;
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
    public function setSeries($series)
    {
        $this->series = $series;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return DateTime
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param DateTime $time
     */
    public function setTime($time)
    {
        $this->time = $time;
    }
} 