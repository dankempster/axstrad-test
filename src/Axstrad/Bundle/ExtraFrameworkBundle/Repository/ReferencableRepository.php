<?php
namespace Axstrad\Bundle\ExtraFrameworkBundle\Repository;

/**
 * Dependancies
 */
use Axstrad\Bundle\ExtraFrameworkBundle\Manager\ReferencableManager;

/**
 * Axstrad\Bundle\ExtraFrameworkBundle\Repository\ReferencableRepository
 *
 * Base Entity Repository for Entities that implements the Axstrad\Bundle\ExtraFrameworkBundle\Entity\Referencable interface.
 *
 * The Doctrin\ORM\EntityRepository::find method has also been overloaded so it can be used to find an entity by it's
 * ID or reference.
 */
class ReferencableRepository extends AbstractReferencableRepository
    implements ReferencableManager
{
    /**
     * {@inheritDoc}
     */
    protected $referenceColumn = 'reference';

    /**
     * {@inheritDoc}
     */
    protected $expectedEntityInterface = 'Axstrad\\FrameworkBundle\\Model\\Referencable';

    /**
     * {@inheritDoc}
     */
    public function findByReference($reference)
    {
        return $this->findOneBy(array($this->referenceColumn=>$reference));
    }
}
