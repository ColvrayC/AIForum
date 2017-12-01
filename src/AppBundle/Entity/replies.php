<?php
/**
 * Created by PhpStorm.
 * User: Camille Colvray
 * Date: 01/12/2017
 * Time: 10:43
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="replies")
 */
class Replies
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     * @ORM\Column(name="context", type="string")
     */
    protected $context;

    /**
     * @var datetime
     * @ORM\Column(name="date", type="datetime")
     */
    protected $date;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Topics")
     * @ORM\JoinColumn(name="id_topic", referencedColumnName="id")
     */
    protected $topic;


    /**
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
     * @ORM\JoinColumn(name="id_by", referencedColumnName="id")
     */
    protected $user;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

}