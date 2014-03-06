<?php

namespace MSP\RegistrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use MSP\RegistrationBundle\Entity\User;
use MSP\RegistrationBundle\Form\UserType;

class DefaultController extends Controller {

    public function indexAction($name) {
        return $this->render('MSPRegistrationBundle:Default:index.html.twig', array('name' => $name));
    }

    public function signupAction(Request $request) {
        $user = new User();
        $signupForm = $this->createForm(new UserType(),$user,array(
            'action' => $this->generateUrl('msp_signup'),
        ));

        $signupForm->handleRequest($request);

        if ($signupForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return $this->redirect($this->generateUrl('msp_login'));
        }
        return $this->render('MSPRegistrationBundle:Default:signup.html.twig', array('signupForm' => $signupForm->createView()));
    }

}
