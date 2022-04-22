<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CustomerController extends AbstractController
{
    /**
     * @Route("/customer", name="app_customer")
     */
    public function index(): Response
    {

        $customerName  = "John Doe";
        return $this->render('customer/index.html.twig', [
            'name' => $customerName,
        ]);
    }
}
