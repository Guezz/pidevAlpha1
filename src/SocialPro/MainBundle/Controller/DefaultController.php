<?php

namespace SocialPro\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SocialProMainBundle:Default:index.html.twig');
    }
}
