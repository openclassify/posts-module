<?php namespace Anomaly\PostsModule\Category\Command;

use Anomaly\PostsModule\Category\Contract\CategoryInterface;

/**
 * Class PurgeCategoryCache
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 */
class PurgeCategoryCache
{
    /**
     * The category instance.
     *
     * @var CategoryInterface
     */
    protected $category;

    /**
     * Return the path for a post.
     *
     * @param CategoryInterface $category
     */
    public function __construct(CategoryInterface $category)
    {
        $this->category = $category;
    }

    /**
     * Handle the command.
     */
    public function handle()
    {
    }

}
