<?php

// src/Controller/CruiseListController.php
namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Pagerfanta\Pagerfanta;
use Pagerfanta\Adapter\ArrayAdapter;

class EditUserController extends AbstractController
{
    #[Route('/RoleEdit', name: 'RoleEdit' )]
    public function UserEditList(UserRepository $UserRepository, Request $request): Response
    {

    //     if($request->query->get('action') === 'filter_submit'){
    //     pobierz dane  z formularza i zapakuj je do sql'a aby przefiltrować dane
    // }
    //else{ to co poniżej

    
        
        $users = $UserRepository->FindUsers();

        $adapter = new ArrayAdapter($users);
        $pagerUsers = new PagerFanta($adapter);

        $pagerUsers->setMaxPerPage(50);
        $pagerUsers->setCurrentPage($request->query->getInt('page', 1));
        // dump($pagerUsers);
        return $this->render('RoleEdit.html.twig', [
            'UserPager' => $pagerUsers,
            
        ]);

    }


    #[Route('/user/delete/{id}', name: 'delete_user', methods: ['POST','GET'])]
public function deleteUser(int $id, UserRepository $userRepository): Response
{
    // Znajdź użytkownika po ID
    $user = $userRepository->find($id);

    if (!$user) {
        throw $this->createNotFoundException('Użytkownik nie został znaleziony.');
    }

    // Usuń użytkownika
    $userRepository->remove($user, true);

    // Dodaj komunikat o sukcesie
    $this->addFlash('success', 'Użytkownik został pomyślnie usunięty.');

    // Przekieruj na stronę z listą użytkowników
    return $this->redirectToRoute('RoleEdit');
}


}
