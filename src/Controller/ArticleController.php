<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/" , name="home")
     */
    public function homepage()
    {
        return $this->render('Home/Home.html.twig');
    }
    /**
     * @Route("/" , name="adminHome")
     */
        public function adminHome()
        {
            return $this->render('Home.html.twig');
        }

}