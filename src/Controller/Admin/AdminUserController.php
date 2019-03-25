<?php
/**
 * Created by PhpStorm.
 * User: trust2
 * Date: 22/02/19
 * Time: 16.03
 */

namespace App\Controller\Admin;


use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class AdminUserController extends AbstractController
{
    /**
     * @var UserRepository
     */
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @Route("/admin/user",name="admin_user")
     */
    public function index()
    {

        $data = $this->userRepository->findAllUser();

        dd('test');

        dd('lalalalaa');

        return new JsonResponse($data,JsonResponse::HTTP_OK);

    }

}