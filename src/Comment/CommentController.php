<?php

namespace Anax\Comment;

use \Anax\DI\InjectionAwareInterface;
use \Anax\DI\InjectionAwareTrait;

/**
 * A controller for the REM Server.
 *
 * @SuppressWarnings(PHPMD.ExitExpression)
 */
class CommentController implements InjectionAwareInterface
{
    use InjectionAwareTrait;


    /**
     * View all posts
     *
     * @return void
     */
    public function viewAll()
    {
        $this->di->get("comment")->viewAll();
    }

    /**
     * New post
     *
     * @return void
     */
    public function newPost()
    {
        $this->di->get("comment")->newPost();
    }

    /**
     * New post page
     *
     * @return void
     */
    public function newPostAction()
    {
        $this->di->get("comment")->newPostAction();
    }

    /**
     * Show one post
     *
     * @return void
     */
    public function showOnePost($id)
    {
        $this->di->get("comment")->showOnePost($id);
    }

    /**
     * Edit post
     *
     * @return void
     */
    public function editPost($id)
    {
        $this->di->get("comment")->editPost($id);
    }

    /**
     * Edit post action
     *
     * @return void
     */
    public function editPostAction()
    {
        $this->di->get("comment")->editPostAction();
    }

    /**
     * Remove post
     *
     * @return void
     */
    public function removePost($id)
    {
        $this->di->get("comment")->removePost($id);
    }
}
