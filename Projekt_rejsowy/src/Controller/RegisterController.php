<?php

namespace App\Controller;
use App\Entity\User;
use App\Entity\Roles;
use App\Entity\UserRole;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;



date_default_timezone_set("America/New_York");
class RegisterController extends AbstractController
{   
    //jeżeli użytkownik wykona akcję i przejdzie na template /new_user, 
     //rejestracja nowego użytkownika w bazie

    #[Route('/register', name: 'register', methods:['POST'])]
   
    public function register(Request $request, EntityManagerInterface $entityManager
    ,UserPasswordHasherInterface $passwordHasher): Response
    {
        $user = new User();
        $username = $request->request->get('username');
        $email = $request->request->get('email');
        $password = $request->request->get('password');
        $firstName = $request->request->get('first_name');
        $lastName = $request->request->get('last_name');

        $hashedpassword = $passwordHasher->hashPassword($user, $password);
        

        $userRepository = $entityManager->getRepository(User::class);
        $username_validate = $userRepository->findOneBy(['username' => $username]);
        if($username_validate){
            $this->addFlash('error', "Username already exists!");
            return $this->redirectToRoute('register');
        }

        $user->setUsername($username);
        $user->setEmail($email);
        $user->setPassword($hashedpassword);
        $user->setFirstName($firstName);
        $user->setLastName($lastName);
        $user->setCreatedAt(new \DateTimeImmutable());
        $user->setModifiedAt(new \DateTimeImmutable());
        $user->setActive(true);

        $roleRepository = $entityManager->getRepository(Roles::class);
        $role = $roleRepository->findOneBy(['role_name' => 'ROLE_USER']);


    if ($role) {
            $userRole = new UserRole();
            $userRole->setUserid($user);
            $userRole->setRole($role);
            dump($userRole);
            $entityManager->persist($userRole);
        }

        $entityManager->persist($user);
        $entityManager->flush();

        return new Response('Saved new user with id '.$user->getId());
    }

   



}
