<?php

namespace BackEndBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/admin")
     */
    public function adminAction()
    {
        return $this->render('backEnd/index.html.twig');
    }

    /**
     * @Route("/usermanagement", name="usermanagement")
     */
    public function userAction()
    {
        return $this->render('backEnd/user.html.twig');
    }
}
