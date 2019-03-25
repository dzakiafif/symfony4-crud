<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AdminHomeController extends AbstractController
{

    /**
     * @Route("/admin/home", name="admin_home")
     */
    public function index(Request $request)
    {
        return $this->render('admin_home/index.html.twig', [
            'controller_name' => 'AdminHomeController'
        ]);
    }
}
