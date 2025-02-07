<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdmissionSubscriberType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class, array(
            'label' => false,
            'attr' => [
                'placeholder' => 'E-post'
            ]
            ))
            ->add('infoMeeting', CheckboxType::class, array(
            'label' => 'Send meg også påminnelse om neste infomøte.',
            'required' => false,
            'attr' => [
                'checked' => true
            ]
            ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'AppBundle\Entity\AdmissionSubscriber'
        ]);
    }

    public function getBlockPrefix()
    {
        return 'app_bundle_admission_subscriber_type';
    }
}
