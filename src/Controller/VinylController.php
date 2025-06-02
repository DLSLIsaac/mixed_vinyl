<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class VinylController extends AbstractController
{
  #[Route('/', name: 'app_homepage')]
  public function homepage(): Response
  {
    return new Response('Title: PB & James');
  }

  #[Route('/browse/{genre}')]
  public function browse(string $genre = null): Response
  {
    if($genre)
      $title = 'Genre: ' . u(str_replace('-', ' ', $genre))->title(true);
    else
      $title = 'All Genres';

    return new Response($title);
  }
}