<?php

namespace App\Form;

use App\Entity\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('mail')
            ->add('ville')
            ->add('societe')
            ->add('objet', ChoiceType::class, [
                'choices' => [
                    'Réclamation' => 'Réclamation',
                    'Contact' => 'Contact',
                    'Formation' => 'Formation',
                    'Recrutement' => 'Recrutement',
                    'Conseil' => 'Conseil',
                    'Coaching' => 'Coaching',
                    'Orientation professionnelle' => 'Orientation professionnelle',
                    'Conférences' => 'Conférences',
                ],
            ])
            ->add('contenu')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Form::class,
        ]);
    }
}
