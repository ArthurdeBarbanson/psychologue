<?php

namespace SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SiteController extends Controller
{

    public function PresentationAction()
    {
        return $this->render('SiteBundle:Site:presentation.html.twig');
    }

    public function approche_psychanalytique_groupaleAction()
    {
        return $this->render('SiteBundle:Site:approche.psychanalytique.groupale.html.twig', array(
            // ...
        ));
    }

    public function Approche_psychanalytiqueAction()
    {
        return $this->render('SiteBundle:Site:approche.psychanalytique.html.twig', array(
            // ...
        ));
    }

    public function Approche_systemiqueAction()
    {
        return $this->render('SiteBundle:Site:approche.systemique.html.twig', array(
            // ...
        ));
    }

    public function CrisedanslecoupleAction()
    {
        return $this->render('SiteBundle:Site:crisedanslecouple.html.twig', array(
            // ...
        ));
    }

    public function ParentaliteAction()
    {
        return $this->render('SiteBundle:Site:parentalite.html.twig', array(
            // ...
        ));
    }

    public function PourquoiConsulterAction()
    {
        return $this->render('SiteBundle:Site:pourquoi_consulter.html.twig', array(
            // ...
        ));
    }

    public function PrendreRDVAction()
    {
        return $this->render('SiteBundle:Site:prendre_rdv.html.twig', array(
            // ...
        ));
    }

    public function QuandconsulterAction()
    {
        return $this->render('SiteBundle:Site:quandconsulter.html.twig', array(
            // ...
        ));
    }

    public function therapiequestcequeAction()
    {
        return $this->render('SiteBundle:Site:therapiequestceque.html.twig', array(
            // ...
        ));
    }

    public function traversercriseAction()
    {
        return $this->render('SiteBundle:Site:traversercrise.html.twig', array(
            // ...
        ));
    }

}
