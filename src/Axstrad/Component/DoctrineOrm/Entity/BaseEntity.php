<?php
namespace Axstrad\Component\DoctrineOrm\Entity;

use Axstrad\Component\DoctrineOrm\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Axstrad\Component\DoctrineOrm\Entity\BaseEntity
 *
 * @ORM\MappedSuperclass()
 */
class BaseEntity implements
    Entity
{
    use IntegerIdTrait;
}
