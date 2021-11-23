<?php

declare(strict_types=1);

namespace App\Entity\Product;

use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Core\Model\ProductTranslation as BaseProductTranslation;

/**
 * @ORM\Entity
 * @ORM\Table(name="sylius_product_translation")
 */
class ProductTranslation extends BaseProductTranslation
{
    /** @ORM\Column(type="string", nullable=true) */
    private $color;


    public function getColor()
    {
        return $this->color;
    }


    public function setColor($color): void
    {
        $this->color = $color;
    }
}
