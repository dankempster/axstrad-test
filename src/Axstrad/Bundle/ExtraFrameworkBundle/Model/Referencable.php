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
namespace Axstrad\Bundle\ExtraFrameworkBundle\Model;


/**
 * Axstrad\Bundle\ExtraFrameworkBundle\Model\Referencable
 */
interface Referencable
{
    /**
     * Get the model's unqiue reference
     *
     * @return String
     */
    public function getReference();

    /**
     * Set the model's unique reference
     *
     * @param String $reference
     * @return Referencable Returns self for fluent interface
     */
    public function setReference($reference);
}
