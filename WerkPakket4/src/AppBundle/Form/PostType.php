<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\Form;

use AppBundle\Entity\Post;
use AppBundle\Form\Type\DateTimePickerType;
use AppBundle\Form\Type\TagsInputType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Defines the form used to create and manipulate blog posts.
 *
 */
class PostType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('naam', null, [
                'attr' => ['autofocus' => true],
                'label' => 'label.name',
            ])
            ->add('klant_id', null, [
                'label' => 'label.customer_id',
            ])
            ->add('adress_id', null, [
                'label' => 'label.address_id',
            ])
            ->add('type', TextareaType::class, [
                'label' => 'label.type',
            ])
            ->add('omschrijving', null, [
                'attr' => ['rows' => 20],
                'label' => 'label.Description',
            ])
            ->add('personeel_id', null, [
                'label' => 'label.staff_id',
            ])
            ->add('start_datum', DateTimePickerType::class, [
                'label' => 'label.begin_date',
            ])
            ->add('eind_datum', DateTimePickerType::class, [
                'label' => 'label.end_date',
            ])
            ->add('verwacht_aantal_Gasten', null, [
                'label' => 'label.expected_guests',
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Post::class,
        ]);
    }
}
