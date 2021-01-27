<?php

namespace App\Form;

use App\Entity\Form;
use App\Entity\Category;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
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
                    'contact' => 'contact',
                    'reclamation' => 'reclamation',
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
