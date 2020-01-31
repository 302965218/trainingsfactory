<?php

namespace App\Controller;

use App\Repository\LessonRepository;
use App\Repository\RegistrationRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;

class LedenController extends AbstractController
{
    /**
     * @Route("/leden", name="leden")
     */
    public function index(UserRepository $userRepository, RegistrationRepository $registrationRepository, LessonRepository $lessonRepository)
    {
        $user = $userRepository->find($this->getUser());

        $gegevens = $registrationRepository->findBy(['User' => $user->getId()]);


        return $this->render('leden/index.html.twig', [
            'lesson' => $gegevens,
            'registration' => $registrationRepository,
        ]);
    }
}
