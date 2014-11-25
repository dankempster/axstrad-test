<?php
namespace Axstrad\Component\Content\Entity;

use Axstrad\Component\Content\Copy as CopyInterface;
use Axstrad\Component\Content\Traits\Copy as CopyTrait;


/**
 * Axstrad\Component\Content\Entity\Copy
 */
abstract class Copy extends BaseEntity implements
    CopyInterface
{
    use CopyTrait;
}
