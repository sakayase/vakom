<?php

namespace App\Form;

use App\Entity\Formulaire;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FormulaireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('mail')
            ->add('ville')
            ->add('societe');         
            if ($options['objet'] != '') {
                $builder->add('objet', ChoiceType::class, [
                    'choices' => [
                        $options['objet'] => $options['objet']
                    ],
                ]);
            } else {
                $builder->add('objet', ChoiceType::class, [
                    'choices' => [
                        'Contact' => 'Contact',
                        'Réclamation' => 'Réclamation',
                        'Formation' => 'Formation',
                        'Recrutement' => 'Recrutement',
                        'Conseil' => 'Conseil',
                        'Coaching' => 'Coaching',
                        'Orientation professionnelle' => 'Orientation professionnelle',
                        'Conférences' => 'Conférences',
                    ],
                ]);
            }
            $builder->add('contenu')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Formulaire::class,
            'objet' => '',
        ]);
    }
}


