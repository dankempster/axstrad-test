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
use Axstrad\Bundle\ExtraFrameworkBundle\Model\Sluggable as SluggableInterface;


/**
 * Axstrad\Bundle\ExtraFrameworkBundle\Entity\Sluggable
 *
 * Provides the following fields
 *  - id        : integer  - as primary key
 *  - active    : boolean  - Whether the entity is "active" or not !requires Axstrad\DoctrineExtensions
 *  - createdAt : datetime - when the entity was created !requires Gedmo\DoctrineExtensions
 *  - updatedAt : datetime - when the entity was last updated !requires Gedmo\DoctrineExtensions
 *  - slug      : string   - unique index !requires Gedo/DoctrineExtensions mapping
 *
 * @ORM\MappedSuperclass(repositoryClass="Axstrad\Bundle\ExtraFrameworkBundle\Repository\SluggableRepository")
 * @todo For PHP5.4 make this class a trait
 */
class Sluggable extends Activatable implements SluggableInterface
{
    /**
     * @ORM\Column(type="string", length=255, unique=true)
     * @var string The entity's slug
     */
    protected $slug;

    /**
     * {@inheritDoc}
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * {@inheritDoc}
     */
    public function setSlug($slug)
    {
        $this->slug = (string) $slug;
        return $this;
    }
}
