<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 11/1/16
 * Time: 10:34 PM
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpFoundation\Request;

class GenusController extends Controller
{
    /**
     * @Route("/genus")
     */
    public function showAction(){
        return new Response('Working');

    }
}