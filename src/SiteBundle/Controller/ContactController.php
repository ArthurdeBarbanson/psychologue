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

            $form->getData();

            $message = \Swift_Message::newInstance()
                ->setSubject('Nouveau client')
                ->setFrom($form->get('Email'))
                ->setTo('arthurdebarbanson@gmail.com')
                ->setBody(
                    $this->renderView(
                    // app/Resources/views/Emails/registration.html.twig
                        'Emails/registration.html.twig',
                        array('message' => $form->get('Message'))
                    ),
                    'text/html'
                );
            $this->get('mailer')->send($message);

            $request->getSession()->getFlashBag()->add('notice', 'Votre email a bien été envoyé.');

        }else{
            $request->getSession()->getFlashBag()->add('error', 'Votre email n\'a pas été envoyé.');
        }

        return $this->render('SiteBundle:Site:contact.html.twig', [
            'form' => $form->createView()
        ]);
    }
}

