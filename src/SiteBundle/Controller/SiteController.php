<?php

namespace SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SiteController extends Controller
{

    public function PresentationAction()
    {
        return $this->render('SiteBundle:Presentation:presentation.html.twig');
    }

    public function approche_psychanalytique_groupaleAction()
    {
        return $this->render('SiteBundle:Approche_psychanalytique_groupale:approche.psychanalytique.groupale.html.twig', array(
            // ...
        ));
    }

    public function Approche_psychanalytiqueAction()
    {
        return $this->render('SiteBundle:Approche_psychanalytique:approche.psychanalytique.html.twig', array(
            // ...
        ));
    }

    public function Approche_systemiqueAction()
    {
        return $this->render('SiteBundle:Approche_systemique:approche.systemique.html.twig', array(
            // ...
        ));
    }

    public function CrisedanslecoupleAction()
    {
        return $this->render('SiteBundle:Crise_dans_couple:crisedanslecouple.html.twig', array(
            // ...
        ));
    }

    public function ParentaliteAction()
    {
        return $this->render('SiteBundle:Parentalite:parentalite.html.twig', array(
            // ...
        ));
    }

    public function PourquoiConsulterAction()
    {
        return $this->render('SiteBundle:Pourquoiconsulter:pourquoi_consulter.html.twig', array(
            // ...
        ));
    }

    public function PrendreRDVAction()
    {
        return $this->render('SiteBundle:PrendreRDV:prendre_rdv.html.twig', array(
            // ...
        ));
    }

    public function QuandconsulterAction()
    {
        return $this->render('SiteBundle:Quandconsulter:quandconsulter.html.twig', array(
            // ...
        ));
    }

    public function therapiequestcequeAction()
    {
        return $this->render('SiteBundle:Therapie_Qu_est_ce_que_c_est:therapiequestceque.html.twig', array(
            // ...
        ));
    }

    public function traversercriseAction()
    {
        return $this->render('SiteBundle:Traverser_une_crise:traversercrise.html.twig', array(
            // ...
        ));
    }

}
