<?php
// src/Form/CruiseType.php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;

class CruiseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ship', EntityType::class, [
                'class' => 'App\Entity\Ship',
                'choice_label' => 'name', // Nazwa pola wyświetlana w selektorze
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('s')
                        ->orderBy('s.name', 'ASC');
                },
                'placeholder' => 'Wybierz statek',
            ])
            ->add('start_date', DateType::class, [
                'widget' => 'single_text',
            ])
            ->add('end_date', DateType::class, [
                'widget' => 'single_text',
            ])
            ->add('destination', EntityType::class,[
                'class' => 'App\Entity\Countries',
                'choice_label' => 'name',
                'query_builder' => function (EntityRepository $countries){
                    return $countries->createQueryBuilder('c')
                    ->orderBy('c.name', 'ASC');
                },
                'placeholder' => 'Wybierz kierunek',
            ])
            ->add('start_point', EntityType::class,[
                'class' => 'App\Entity\Countries',
                'choice_label' => 'name',
                'query_builder' => function (EntityRepository $countries){
                    return $countries->createQueryBuilder('c')
                    ->orderBy('c.name', 'ASC');
                },
                'placeholder' => 'Wybierz kierunek',
            ])
            
            ->add('price', IntegerType::class)
            ->add('submit', SubmitType::class, [
                'label' => 'Dodaj',
            ]);
    }
}
