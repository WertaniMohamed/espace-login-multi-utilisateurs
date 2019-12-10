<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class EmployerController extends AbstractController
{
    /**
     * @Route("/employer", name="employer")
     */
    public function index()
    {
        //$entityManager = $this->getDoctrine()->getManager();
        $repositoryUser = $this->getDoctrine()->getRepository(User::class);
        $users = $repositoryUser->findAll();

        return $this->render('employer/index.html.twig', [
            'controller_name' => 'EmployerController',
            'users' => $users,
        ]);
    }

    public function registerUser(Request $request)
    {
        $succesfullyRegistered = $this->register("demo@email.com", "demoUsername", "demoPassword");

        if ($succesfullyRegistered) {
            // the user is now registered !
            return "the user is now registered !";
        } else {
            // the user exists already !
            return "the user exists already !";
        }
    }

    /**
     * This method registers an user in the database manually.
     *
     * @return boolean User registered / not registered
     **/
    private function register($email, $username, $password)
    {
        $userManager = $this->get('fos_user.user_manager');

        // Or you can use the doctrine entity manager if you want instead the fosuser manager
        // to find
        //$em = $this->getDoctrine()->getManager();
        //$usersRepository = $em->getRepository("mybundleuserBundle:User");
        // or use directly the namespace and the name of the class
        // $usersRepository = $em->getRepository("mybundle\userBundle\Entity\User");
        //$email_exist = $usersRepository->findOneBy(array('email' => $email));

        $email_exist = $userManager->findUserByEmail($email);

        // Check if the user exists to prevent Integrity constraint violation error in the insertion
        if ($email_exist) {
            return false;
        }

        $user = $userManager->createUser();
        $user->setUsername($username);
        $user->setEmail($email);
        $user->setEmailCanonical($email);
        $user->setLocked(0); // don't lock the user
        $user->setEnabled(1); // enable the user or enable it later with a confirmation token in the email
        // this method will encrypt the password with the default settings :)
        $user->setPlainPassword($password);
        $userManager->updateUser($user);

        return true;
    }
}
