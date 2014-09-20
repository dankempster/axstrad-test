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

use Axstrad\Bundle\ExtraFrameworkBundle\Model\Referencable as ReferencableInterface;
use Doctrine\ORM\Mapping as ORM;


/**
 * Axstrad\Bundle\ExtraFrameworkBundle\Entity\Referencable
 *
 * Provides the following fields
 *  - id        : integer  - as primary key
 *  - active    : boolean  - Whether the entity is "active" or not !requires Axstrad\DoctrineExtensions
 *  - createdAt : datetime - when the entity was created !requires Gedmo\DoctrineExtensions
 *  - updatedAt : datetime - when the entity was last updated !requires Gedmo\DoctrineExtensions
 *  - reference : string   - as unique index
 *
 * @ORM\MappedSuperclass(repositoryClass="Axstrad\Bundle\ExtraFrameworkBundle\Repository\ReferencableRepository")
 * @todo For PHP5.4 make this class a trait
 */
abstract class Referencable extends Activatable implements ReferencableInterface
{
    /**
     * @var string A unique reference for the content
     * @ORM\Column(type="string", length=255, unique=true)
     */
    protected $reference;

    /**
     * {@inheritDoc}
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * {@inheritDoc}
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }
}
