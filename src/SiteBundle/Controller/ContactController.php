<?php

namespace SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use SiteBundle\Form\ContactType;
use Symfony\Component\HttpFoundation\Request;

class ContactController extends Controller
{
    public function contactAction(Request $request)
    {
        $form= $this->createForm(ContactType::class);
        $form->handleRequest($request);

        if($form->isValid()){

            $request->getSession()->getFlashBag()->add('notice', 'Votre annonce a bien été envoyé.');

        }else{
            $request->getSession()->getFlashBag()->add('error', 'Votre annonce n\'a pas été envoyé.');
        }



        return $this->render('SiteBundle:Contact:contact.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
