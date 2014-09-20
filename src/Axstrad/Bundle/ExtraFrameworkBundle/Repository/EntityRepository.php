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

use Doctrine\ORM\EntityRepository as BaseEntityRepository;
use PhpOption;


/**
 * Axstrad\Bundle\ExtraFrameworkBundle\Repository\EntityRepository
 */
class EntityRepository extends BaseEntityRepository
{
    /**
     * {@inheritDoc}
     *
     * @param  mixed $id
     * @return PhpOption\Option
     */
    public function find($id)
    {
        return PhpOption\Option::fromValue($id);
    }

    /**
     * {£inheritDoc}
     *
     * @param array $criteria
     * @param array|null $orderBy
     * @return PhpOption\Option
     */
    public function findOneBy(array $criteria, array $orderBy = null)
    {
        return PhpOption\Option::fromValue(
            parent::findOneBy($criteria, $orderBy)
        );
    }
}
