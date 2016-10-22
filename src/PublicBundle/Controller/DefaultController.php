<?php

namespace PublicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('PublicBundle:Default:index.html.twig');
    }



    /**
     * @Route("/aboutus")
    */
    public function aboutUsAction()
    {
      $title =      '_section_aboutus_title';
      $subtitle =   '_section_aboutus_subtitle';

        return $this->render('PublicBundle:Default:aboutus.html.twig',['section'=>['title'=>$title,'subtitle'=>$subtitle]]);
    }


    /**
     * @Route("/services")
    */
    public function servicesAction()
    {
      $title =      '_section_services_title';
      $subtitle =   '_section_services_subtitle';

        return $this->render('PublicBundle:Default:services.html.twig',['section'=>['title'=>$title,'subtitle'=>$subtitle]]);
    }



    /**
     * @Route("/contactus")
    */
    public function contactUsAction()
    {

        $title =      '_section_contactus_title';
        $subtitle =   '_section_contactus_subtitle';

        return $this->render('PublicBundle:Default:contactus.html.twig',['section'=>['title'=>$title,'subtitle'=>$subtitle]]);
    }

    /**
     * @Route("/workwithus")
    */
    public function workWithUsAction()
    {
      $title =      '_section_workwithus_title';
      $subtitle =   '_section_workwithus_subtitle';

        return $this->render('PublicBundle:Default:workwithus.html.twig',['section'=>['title'=>$title,'subtitle'=>$subtitle]]);
    }


    /**
     * @Route("/track")
    */
    public function trackAction()
    {
      $title =      '_section_track_title';
      $subtitle =   '_section_track_subtitle';

        return $this->render('PublicBundle:Default:track.html.twig',['section'=>['title'=>$title,'subtitle'=>$subtitle]]);
    }

    /**
     * @Route("/comingsoon")
    */
    public function comingSoonAction()
    {
      $title =      '_section_comingsoon_title';
      $subtitle =   '_section_comingsoon_subtitle';

        return $this->render('PublicBundle:Default:comingsoon.html.twig',['section'=>['title'=>$title,'subtitle'=>$subtitle]]);
    }
}
