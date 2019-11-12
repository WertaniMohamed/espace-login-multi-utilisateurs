<?php
// src/Form/RegistrationType.php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class, array(
                    'label' => false,
                    'translation_domain' => 'FOSUserBundle',
                    'attr' => array(
                        'placeholder' => 'form.email',
                        'class' => 'form-control-user'
                    ),
                )
            )
            ->add('username', null, array(
                    'label' => false,
                    'translation_domain' => 'FOSUserBundle',
                    'attr' => array(
                        'placeholder' => 'form.username',
                        'class' => 'form-control-user'
                    ),
                )
            )
            ->add('plainPassword', RepeatedType::class, array(
                'type' => PasswordType::class,
                'options' => array(
                    'translation_domain' => 'FOSUserBundle',
                    'attr' => array(
                        'autocomplete' => 'new-password',
                    ),
                ),
                'first_options' => array(
                    'label' => false,
                    'attr' => array(
                        'placeholder' => 'form.password',
                        'class' => 'form-control-user'
                    ),
                ),
                'second_options' => array(
                    'label' => false,
                    'attr' => array(
                        'placeholder' => 'form.password_confirmation',
                        'class' => 'form-control-user'
                    ),
                ),
                'invalid_message' => 'fos_user.password.mismatch',
            ));
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';

        // Or for Symfony < 2.8
        // return 'fos_user_registration';
    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }

    // For Symfony 2.x
    public function getName()
    {
        return $this->getBlockPrefix();
    }
}