<?php

namespace Acme\RecommendBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class UserAdmin extends Admin
{
/*
    protected function configureShowField(ShowMapper $showMapper)
    {
        $showMapper
            ->add('enabled')
            ->add('title')
            ->add('abstract')
            ->add('content')
            ->add('tags')
        ;
    }*/
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('id')
            ->add('fbProfId')
            ->add('name')
            ->add('lname')
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('fbProfId', null, array('label' => 'Language'))
            ->add('name')
            ->add('lname')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            ->addIdentifier('fbProfId', null, array('label' => 'Id FB profil'))
            ->addIdentifier('name', null, array('label' => 'Imię'))
            ->addIdentifier('lname', null, array('label' => 'Nazwisko'))
        ;
    }
}

?>