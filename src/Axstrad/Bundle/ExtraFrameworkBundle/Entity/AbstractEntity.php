<?php
/**
 * This file is part of the Axstrad library.
 *
 * (c) Dan Kempster <dev@dankempster.co.uk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Dan Kempster <dev@dankempster.co.uk>
 * @package Axstrad\Bundle\ExtraFrameworkBundle
 */
namespace Axstrad\Bundle\ExtraFrameworkBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Axstrad\Bundle\ExtraFrameworkBundle\Entity\AbstractEntity
 *
 * @ORM\MappedSuperclass(repositoryClass="Axstrad\Bundle\ExtraFrameworkBundle\Repository\EntityRepository")
 */
class AbstractEntity implements Entity
{
    /**
     * Get the entity's unique identifier.
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
