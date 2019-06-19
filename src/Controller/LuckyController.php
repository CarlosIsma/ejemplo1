<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Annotation\Route;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LuckyController extends AbstractController
{
    /**
     * @Route("/lucky/number/{max}", name="app_lucky_number")
     */


    public function number($max)
    {
        $number = random_int(0,$max);
	$name = "Carlos Lucero";

        return $this->render('lucky/number.html.twig', [
            'number' => $number,
	    'name' => $name,
	   'variable' => '26 -  October', 
       ]);
    }
}

