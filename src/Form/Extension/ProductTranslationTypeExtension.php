<?php
declare(strict_types=1);

namespace App\Form\Extension;

use App\Form\Type\ColorType;
use Sylius\Bundle\ProductBundle\Form\Type\ProductTranslationType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormBuilderInterface;

final class ProductTranslationTypeExtension extends AbstractTypeExtension
{

    public static function getExtendedTypes(): iterable
    {
        return [ProductTranslationType::class];
    }


    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add('color', ColorType::class, [
            'label' => 'Wybierz kolor',
        ]);
    }

}
