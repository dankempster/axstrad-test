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
 * Axstrad\Bundle\ExtraFrameworkBundle\Model\Sluggable
 */
interface Sluggable
{
    /**
     * Get the model's slug
     *
     * @return string
     */
    public function getSlug();

    /**
     * Set the model's slug
     *
     * @param  string $slug   The new model's slug
     * @return Sluggable Returns self for fluent interface
     */
    public function setSlug($slug);
}
