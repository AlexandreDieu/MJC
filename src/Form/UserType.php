<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', TextType::class, [
                'attr' =>[
                    'placeholder' => "Adresse Email",
                    'class' => 'form-control'
                ]
            ])
            // ->add('roles')
            // ->add('password')
            ->add('isVerified')
            ->add('nom', TextType::class, [
                'attr' =>[
                    'placeholder' => "Nom",
                    'class' => 'form-control'
                ]
            ])
            ->add('prenom', TextType::class, [
                'attr' =>[
                    'placeholder' => "Prenom",
                    'class' => 'form-control'
                ]
            ])
            ->add('telephone')
            ->add('newsletter')
            ->add('securiteSociale')
            // ->add('activites')
            // ->add('evenements')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
