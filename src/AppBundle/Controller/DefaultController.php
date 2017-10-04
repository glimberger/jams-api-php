<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request): Response
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig',
            [
                'base_dir' => realpath($this->getParameter('kernel.project_dir')) . DIRECTORY_SEPARATOR,
            ]);
    }

    /**
     * @Route("/api/dummy/{slug}", name="api_dummy")
     *
     * @param Request $request
     * @param string  $slug
     * @return JsonResponse
     */
    public function apiDummyAction(Request $request, string $slug): JsonResponse
    {
        return new JsonResponse(['data' => $slug]);
    }
}
