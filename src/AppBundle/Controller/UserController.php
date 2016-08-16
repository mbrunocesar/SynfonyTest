<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class UserController extends Controller
{
    /**
     * @Route("/users", name="View All Users")
     * @Method("GET")
     */
    public function listAction()
    {
        // replace this example code with whatever you need
        return $this->render('user/list.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }

    /**
     * @Route("/user/{id}", name="View User")
     * @Method("GET")
     */
    public function viewAction($id)
    {
        // replace this example code with whatever you need
        return $this->render('user/view.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }

    /**
     * @Route("/user/{id}", name="Update User")
     * @Method("PUT")
     */
    public function updateAction($id)
    {
        // replace this example code with whatever you need
        return $this->render('user/view.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }

    /**
     * @Route("/user/{id}", name="Delete User")
     * @Method("DELETE")
     */
    public function deleteAction($id)
    {

        // replace this example code with whatever you need
        return $this->render('user/view.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }



}
