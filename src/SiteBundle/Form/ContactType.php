<?php
/**
 * Created by PhpStorm.
 * User: arthur
 * Date: 06/03/16
 * Time: 21:53
 */

namespace SiteBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('Nom',TextType::class, [

                'constraints'=>[
                    new Length(['min' => 3])
                ]
            ])
            ->add('Prenom',TextType::class, [
                'constraints'=>[
                    new Length(['min' => 3])
                ]
            ])
            ->add('Email', EmailType::class, [
                'constraints' => [
                    new NotBlank()
                ]
            ])
            ->add('Message', TextareaType::class, [
                'constraints' => [
                    new NotBlank()
                ]
            ])
            ->add('Envoyer', SubmitType::class)
        ;
    }
}
