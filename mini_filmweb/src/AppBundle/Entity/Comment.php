<?php

namespace AppBundle\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Comment
 * @package AppBundle\Entity
 *
 * @ORM\Entity()
 * @ORM\Table()
 */
class Comment {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var User
     * @ORM\ManyToOne(targetEntity="User", inversedBy="comments")
     */
    private $user;

    /**
     * @var DateTime
     * @ORM\Column(type="datetime")
     */
    private $time;

    /**
     * @var Opinion
     * @ORM\ManyToOne(targetEntity="Opinion", inversedBy="comments")
     */
    private $opinion;

    /**
     * @var string
     * @ORM\Column(type="text")
     */
    private $text;

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
     * @return Opinion
     */
    public function getOpinion()
    {
        return $this->opinion;
    }

    /**
     * @param Opinion $opinion
     */
    public function setOpinion($opinion)
    {
        $this->opinion = $opinion;
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

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }
} 