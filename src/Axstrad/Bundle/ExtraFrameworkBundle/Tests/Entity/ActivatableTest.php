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
namespace Axstrad\FrameworkBundle\Tests\Entity;

use Axstrad\Bundle\ExtraFrameworkBundle\Entity\Activatable;


/**
 * Axstrad\FrameworkBundle\Tests\Entity\ActivatableTest
 */
class ActivatableTest extends \PHPUnit_Framework_TestCase
{
    protected $fixture;

    public function setUp()
    {
        $this->fixture = new Activatable();
    }

    /**
     * @test
     */
    public function isActivatable()
    {
        $this->assertInstanceOf(
            'Axstrad\DoctrineExtensions\Activatable\Activatable',
            $this->fixture
        );
    }

    /**
     * @test
     */
    public function isActiveByDefault()
    {
        $this->assertTrue($this->fixture->isActive());
    }
}
