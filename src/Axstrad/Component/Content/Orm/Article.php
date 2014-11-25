<?php
namespace Axstrad\Component\Content\Entity;

use Axstrad\Component\Content\Article as ArticleInterface;
use Axstrad\Component\Content\Traits\Article as ArticleTrait;


/**
 * Axstrad\Component\Content\Entity\Article
 */
abstract class Article extends BaseEntity implements
    ArticleInterface
{
    use ArticleTrait;
}
