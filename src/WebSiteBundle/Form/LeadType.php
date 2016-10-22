<?php

namespace WebSiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

use Symfony\Component\Form\Extension\Core\Type\EmailType;

class LeadType extends AbstractType
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
            ->add('location', TextType::class, array('label' => 'Localidad'))
            ->add('typo',ChoiceType::class, ['choices'  => ['Quiero especializar mi formacion' => 'a',
                                                            'Me gustaria encontrar un trabajo temporal' => 'b',
                                          							    'Necesito trabajar cuanto antes' => 'c',
                                          							    'Me gustaria tener mas posibilidades de trabajar' => 'd']
                                                            ,
                                              'expanded' => true,
                                              'label' => '¿Por que te interesa Empleate?'
                                            ]
                 )
            ->add('message', TextareaType::class, array('label' => 'Consúltanos lo que quieras:'))        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'WebSiteBundle\Entity\Lead'
        ));
    }
}
