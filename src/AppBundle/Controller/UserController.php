<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\User;


class UserController extends Controller
{

    /**
     * @Route("/users")
     * @Method("GET")
     */
    public function listAction()
    {
        $users = $this->userModel()->findAll();

        foreach ($users as $user) {
            $key = $user->getIdUser();
            $response[$key]['id'] = $key;
            $response[$key]['name'] = $user->getName();
            $response[$key]['phone'] = $user->getPhone();
            $response[$key]['email'] = $user->getEmail();
        }
        $response['status'] = "OK";

        return new Response(json_encode($response));
    }


    /**
     * @Route("/user/{id}")
     * @Method("GET")
     */
    public function viewAction($id)
    {
        $response['validate'] = $this->isValidUser($id);

        $user = $this->userModel()->findOneByIdUser($id);
        if (isset($user)) {
            $response['status'] = "OK";

            $response['id'] = $id;
            $response['name'] = $user->getName();
            $response['phone'] = $user->getPhone();
            $response['email'] = $user->getEmail();

        } else {
            $response['status'] = "FAIL";
            $response['reason'] = "User not found";
        }

        return new Response(json_encode($response));
    }


    /**
     * @Route("/user/{id}")
     * @Method("PUT")
     */
    public function updateAction($id, Request $request)
    {
        $put = $request->request;

        $em = $this->getDoctrine()->getManager();

        $user = $em->getRepository('AppBundle:User')->find($id);
        if (isset($user)) {

            if ($put->get('name')) {
                $user->setName($put->get('name'));
            }

            if ($put->get('phone')) {
                $user->setPhone($put->get('phone'));
            }

            if ($put->get('email')) {
                $user->setEmail($put->get('email'));
            }

            try {
                $em->flush();

                $response['status'] = "OK";

            } catch (Exception $e) {
                $response['status'] = "FAIL";
                $response['reason'] = "DB Error";
            }

        } else {
            $response['status'] = "FAIL";
            $response['reason'] = "User not found";
        }

        return new Response(json_encode($response));
    }


    /**
     * @Route("/user/{id}")
     * @Method("DELETE")
     */
    public function deleteAction($id)
    {
        $user = $this->userModel()->findOneByIdUser($id);
        if (isset($user)) {
            $response['nome'] = $user->getName();

            try {
                $manager = $this->getDoctrine()->getManager();

                $manager->remove($user);
                $manager->flush();

                $response['status'] = "OK";
            } catch (Exception $e) {
                $response['status'] = "FAIL";
                $response['reason'] = "DB Error";
            }

        } else {
            $response['status'] = "FAIL";
            $response['reason'] = "User not found";
        }

        return new Response(json_encode($response));
    }


    /**
     * @Route("/user/")
     */
    public function insertAction(Request $post)
    {
        $postId = $post->get('id');

        $user = $this->userModel()->findOneByIdUser($postId);
        if (!isset($user)) {
            $user = new User();

            if (isset($postId)) {
                $user->setIdUser($post->get('id'));
            }

            $user->setName($post->get('name'));
            $user->setPhone($post->get('phone'));
            $user->setEmail($post->get('email'));

            try {
                $em = $this->getDoctrine()->getManager();

                $em->persist($user);
                $em->flush();

                $response['status'] = "OK";
                $response['id'] = $user->getIdUser();

            } catch (Exception $e) {
                $response['status'] = "FAIL";
                $response['reason'] = "DB Error";
            }

        } else {
            $response['status'] = "FAIL";
            $response['reason'] = "A user with this ID is already found";
        }

        return new Response(json_encode($response));
    }


    private function userModel() {
        return $this->getDoctrine()->getRepository('AppBundle:User');
    }

    private function isValidUser($id) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://private-d65c6-phpdevtest.apiary-mock.com/user/{$id}/isvalid");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $response = curl_exec($ch);

        try {
            $data = json_decode($response);
            $isValid = isset($data) ? $data->validate : false;
        } catch (Exception $e) {
            $isValid = false;
        }

        return $isValid;
    }

}
