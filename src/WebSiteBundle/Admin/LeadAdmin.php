<?php
namespace WebSiteBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;

class LeadAdmin extends AbstractAdmin
{
  protected function configureFormFields(FormMapper $formMapper)
  {
      $formMapper
      ->add('name', 'text')
      ->add('email', 'email')
      ->add('phone', 'text')
      ->add('location', 'text')
      ->add('typo', 'text')
      ->add('message', 'textarea')
      ;
  }

  protected function configureDatagridFilters(DatagridMapper $datagridMapper)
  {
      $datagridMapper->add('name')->add('typo');
  }

  protected function configureListFields(ListMapper $listMapper)
  {
      $listMapper->addIdentifier('name')->addIdentifier('typo');
  }
}
