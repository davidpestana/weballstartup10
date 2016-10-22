<?php

namespace WebSiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

use Symfony\Component\Form\Extension\Core\Type\EmailType;

class LeadRecruiterType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('name', TextType::class, array('label' => 'Nombre'))
        ->add('email', EmailType::class, array('label' => 'Correo Electrónico'))
        ->add('phone', TextType::class, array('label' => 'Teléfono'))
        ->add('company', TextType::class, array('label' => 'compañía'))
        ->add('cargo', TextType::class, array('label' => 'Tu cargo en la compañia'))

        ->add('typo',ChoiceType::class, ['choices'  => ['Necesito mejorar mis procesos de contratación' => 'a',
                                                        'Me gustaria capacitar a los candidatos antes de contratarlos' => 'b'],
                                          'expanded' => true,
                                          'label' => '¿Por que te interesa formar parte de la comunidad Empleate?'
                                        ]
             )
        ->add('message', TextareaType::class, array('label' => 'Consúltanos lo que quieras:'))        ;
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'WebSiteBundle\Entity\LeadRecruiter'
        ));
    }
}
