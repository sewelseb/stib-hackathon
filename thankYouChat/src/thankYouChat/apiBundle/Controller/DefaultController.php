<?php

namespace thankYouChat\apiBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;



class DefaultController extends FOSRestController
{
    public function indexAction()
    {
        $test = "test";


        $view = $this->view($test, 200)
            ->setTemplate("thankYouChatapiBundle:Default:index.html.twig")
        ;

        return $this->handleView($view);


        //return $this->render('thankYouChatapiBundle:Default:index.html.twig');
    }
}
