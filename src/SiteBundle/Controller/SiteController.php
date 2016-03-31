<?php

namespace SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SiteController extends Controller
{

    public function PresentationAction()
    {
        return $this->render('SiteBundle:presentation.html.twig');
    }

    public function approche_psychanalytique_groupaleAction()
    {
        return $this->render('SiteBundle:approche.psychanalytique.groupale.html.twig', array(
            // ...
        ));
    }

    public function Approche_psychanalytiqueAction()
    {
        return $this->render('SiteBundle:approche.psychanalytique.html.twig', array(
            // ...
        ));
    }

    public function Approche_systemiqueAction()
    {
        return $this->render('SiteBundle:approche.systemique.html.twig', array(
            // ...
        ));
    }

    public function CrisedanslecoupleAction()
    {
        return $this->render('SiteBundle:crisedanslecouple.html.twig', array(
            // ...
        ));
    }

    public function ParentaliteAction()
    {
        return $this->render('SiteBundle:parentalite.html.twig', array(
            // ...
        ));
    }

    public function PourquoiConsulterAction()
    {
        return $this->render('SiteBundle:pourquoi_consulter.html.twig', array(
            // ...
        ));
    }

    public function PrendreRDVAction()
    {
        return $this->render('SiteBundle:prendre_rdv.html.twig', array(
            // ...
        ));
    }

    public function QuandconsulterAction()
    {
        return $this->render('SiteBundle:quandconsulter.html.twig', array(
            // ...
        ));
    }

    public function therapiequestcequeAction()
    {
        return $this->render('SiteBundle:therapiequestceque.html.twig', array(
            // ...
        ));
    }

    public function traversercriseAction()
    {
        return $this->render('SiteBundle:traversercrise.html.twig', array(
            // ...
        ));
    }

}
