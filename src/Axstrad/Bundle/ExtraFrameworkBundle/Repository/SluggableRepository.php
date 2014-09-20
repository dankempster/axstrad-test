<?php
namespace Axstrad\Bundle\ExtraFrameworkBundle\Repository;

/**
 * Dependancies
 */
use Axstrad\Bundle\ExtraFrameworkBundle\Manager\SluggableManager;

/**
 * Axstrad\Bundle\ExtraFrameworkBundle\Repository\SluggableRepository
 *
 * Base Entity Repository for Entities that implements the Axstrad\Bundle\ExtraFrameworkBundle\Entity\Sluggable interface.
 *
 * The Doctrin\ORM\EntityRepository::find method has also been overloaded so it can be used to find an entity by it's
 * ID or slug.
 */
class SluggableRepository extends EntityRepository
    implements SluggableManager
{
    /**
     * {@inheritDoc}
     */
    protected $referenceColumn = 'slug';

    /**
     * {@inheritDoc}
     */
    protected $expectedEntityInterface = 'Axstrad\\FrameworkBundle\\Model\\Sluggable';

    /**
     * {@inheritDoc}
     */
    public function findBySlug($slug)
    {
        return $this->findOneBy(array($this->referenceColumn=>$slug));
    }
}
