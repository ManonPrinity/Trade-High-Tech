<?php

namespace Ecommerce\AccountBundle\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Request;
use Ecommerce\AccountBundle\Form\RegisterType;
use Ecommerce\AccountBundle\Entity\Accounts;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AuthController extends Controller
{
	public function loginAction(Request $request)
	{
		$session = $request->getSession();
		if($session->get('user')) {
			return $this->redirectToRoute('ecommerce_homepage');
		}

		if($request->getMethod() == 'POST') {
			$username = $request->get('username');
			$password = $request->get('password');

			$repository = $this->getDoctrine()->getRepository('AccountBundle:Accounts');
			$user = $repository->findOneByUsername($username);

			if($user) {
				$encoder = $this->container->get('security.password_encoder');
				$encoded = $encoder->encodePassword($user, $password);
			}
			if($user && $encoded == $user->getPassword()) {
				$session->set('user', $user);
				return $this->redirectToRoute('ecommerce_homepage');
			} else {
				$error = 'Identifiants incorrects';
				return $this->render('AccountBundle:Auth:login.html.twig', array(
				                                                                 'error' => $error,
				                                                                 ));
			}

		}
		return $this->render('AccountBundle:Auth:login.html.twig', array(
		                                                                 'error' => null,
		                                                                 ));
	}
	public function registrationAction(Request $request)
	{

		$user = new Accounts();
		$form   = $this->createForm(RegisterType::class, $user);

		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {

			$plainPassword = $form['plainPassword']->getData();

			$encoder = $this->container->get('security.password_encoder');
			$encoded = $encoder->encodePassword($user, $plainPassword);
			$user->setPassword($encoded);
			$user->setUsername($form['username']->getData());
			$user->setEmail($form['email']->getData());
			$user->setRoles('ROLE_USER');

			$em = $this->getDoctrine()->getManager();
			$em->persist($user);
			$em->flush();

			return $this->redirectToRoute('ecommerce_homepage');
		}

		return $this->render('AccountBundle:Auth:registration.html.twig', array(
		                                                                        'form' => $form->createView(),
		                                                                        ));
	}

	public function logoutAction(Request $request)
	{
		$session = $request->getSession();
		$session->remove('user');

		return $this->redirectToRoute('ecommerce_homepage');
	}


}
