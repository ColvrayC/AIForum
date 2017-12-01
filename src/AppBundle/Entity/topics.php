<?php
// src/UserBundle/Entity/User.php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="topics")
 */
class Topics
{
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
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param string $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    /**
     * @return datetime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param datetime $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return date
     */
    public function getIdCat()
    {
        return $this->id_cat;
    }

    /**
     * @param date $id_cat
     */
    public function setIdCat($id_cat)
    {
        $this->id_cat = $id_cat;
    }

    /**
     * @return date
     */
    public function getIdBy()
    {
        return $this->id_by;
    }

    /**
     * @param date $id_by
     */
    public function setIdBy($id_by)
    {
        $this->id_by = $id_by;
    }

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     * @ORM\Column(name="subject", type="string")
     */
    protected $subject;

    /**
     * @var datetime
     * @ORM\Column(name="date", type="datetime")
     */
    protected $date;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Categories")
     * @ORM\JoinColumn(name="id_cat", referencedColumnName="id")
     */
    protected $category;

    /**
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
     * @ORM\JoinColumn(name="id_by", referencedColumnName="id")
     */
    protected $User;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

}