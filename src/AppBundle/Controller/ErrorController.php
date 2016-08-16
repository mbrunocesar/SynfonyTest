<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ErrorController extends Controller
{
    /**
     * @Route("/not-a-valid-user", name="Not Valid User")
     */
    public function notValidAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('error/not-valid.html.twig', [
            'base_dir' => '',
        ]);
    }
}
