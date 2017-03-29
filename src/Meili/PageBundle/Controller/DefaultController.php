<?php

namespace Meili\PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{

    public function indexAction(Request $request)
    {

        // replace this example code with whatever you need
        return $this->render('default/page.html.twig');
    }
}
