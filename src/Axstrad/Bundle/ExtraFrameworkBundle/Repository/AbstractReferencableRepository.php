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
namespace Axstrad\Bundle\ExtraFrameworkBundle\Repository;

use Doctrine\DBAL\LockMode;
use Doctrine\ORM\Mapping\ClassMetadata as DoctrineClassMetadata;
use Axstrad\Doctrine\Orm\EntityRepository;
use Axstrad\Bundle\ExtraFrameworkBundle\Exception\RuntimeException;


/**
 * Axstrad\Bundle\ExtraFrameworkBundle\Repository\ReferencableRepository
 *
 * Base Entity Repository for Entities that implements the
 * Axstrad\Bundle\ExtraFrameworkBundle\Entity\Referencable interface.
 *
 * This class overloads find() so it can be used to find an entity by it's
 * reference as well as by it's ID.
 */
abstract class AbstractReferencableRepository extends EntityRepository
{
    /**
     * @var string The entity's unique reference column
     */
    protected $referenceColumn = 'reference';

    /**
     * @var string An interface that the target Entity for this reposiotory must
     *      implement
     */
    protected $expectedEntityInterface = null;


    /**
     * {@inheritDoc}
     * @throws RuntimeException If the Target entity for the EntityManager does
     *         not implement Axstrad\Bundle\ExtraFrameworkBundle\Model\Referencable.
     */
    public function __construct($em, DoctrineClassMetadata $class)
    {
        if ($this->expectedEntityInterface !== null
            && !in_array(
                $this->expectedEntityInterface,
                $class->getReflectionClass()->getInterfaceNames()
            )
        ) {
            throw new RuntimeException(sprintf(
                "%s can't be used if the target Entity does not implement %s",
                __CLASS__,
                $expectedInterface
            ));
        }

        parent::__construct($em, $class);
    }

    /**
     * Finds an entity by its primary key, identifier or reference
     *
     * @param string|integer|array $id The identifier.
     * @param null|integer $lockMode
     * @param null|integer $lockVersion
     * @return PhpOption\Option The option will contains the request
     *         Referencable object if it is found.
     */
    public function find($id, $lockMode = LockMode::NONE, $lockVersion = null)
    {
        if (is_numeric($id) || $this->referenceColumn === null) {
            return parent::find($id, $lockMode, $lockVersion);
        }
        else {
            return $this->findOneBy(array($this->referenceColumn=>$id));
        }
    }
}
