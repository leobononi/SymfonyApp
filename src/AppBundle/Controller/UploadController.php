<?php

namespace AppBundle\Controller;

use AppBundle\Form\PostType;
use AppBundle\Entity\Post;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class UploadController extends Controller
{
    /**
     * @Route("/upload/", name="homepage")
     */
    public function indexAction(Request $request)
    {

        $post = new Post();

        $form = $this->createForm(get_class(new PostType), $post, array(
            'action' => $this->generateUrl('upload_file'),
            'method' => 'POST',
        ));

         return $this->render('upload/index.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/upload/save", name="upload_file")
     */
    public function saveAction(Request $request)
    {
        dump("here");die();
        // perform save operation
    }
}
