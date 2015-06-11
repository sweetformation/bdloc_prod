<?php

namespace Bdloc\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function homeAction()
    {
        /*$slugger = $this->get('bd.slugger');
        $slug = $slugger->sluggify("ASKDH354DQF324fdqfqsf");
        echo $slug;

        echo $slugger->yo;

        print_r($slugger);
        $slugger->test();*/

        if (!empty($this->getUser())) {
            return $this->redirect($this->generateUrl("bdloc_app_book_catalogredirect"));
        }
        return $this->render("default/home.html.twig");
    }
}
