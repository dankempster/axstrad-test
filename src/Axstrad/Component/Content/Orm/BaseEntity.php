<?php
namespace Axstrad\Component\Content\Model;


/**
 * Axstrad\Component\Content\Model\BaseEntity
 */
abstract class BaseEntity
{
    /**
     * @var string
     */
    protected $id;


    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
