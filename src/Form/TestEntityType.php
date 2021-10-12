<?php

namespace App\Form;

use App\Entity\TestEntity;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TestEntityType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Dog', CKEditorType::class, [
                'label'=>'Dogy',
                'config'=>array('toolbar' => 'full'),
            ])
            ->add('Cat')
            ->add('Lizard')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => TestEntity::class,
        ]);
    }
}
