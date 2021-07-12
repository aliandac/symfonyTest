<?php

namespace App\Controller;

use App\Entity\Works;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WorksController extends AbstractController
{
    /**
     * @Route("/works", name="works")
     */
    public function index(): Response
    {
        return $this->render('works/index.html.twig', [
            'controller_name' => 'WorksController',
        ]);
    }

    /**
     * @return Response
     */
    public function createWorks($estimated,$dev,$job,$level): Response
    {


                $workManager = $this->getDoctrine()->getManager();

                $works = new Works();
                $works->setEstimatedDuration($estimated);
                $works->setDevId($dev);
                $works->setJob($job);
                $works->setLevel($level);

        $workManager->persist($works);

        $workManager->flush();

    }
}
