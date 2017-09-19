<?php

namespace Anax\Comment;

use \Anax\Common\AppInjectableInterface;
use \Anax\Common\AppInjectableTrait;

/**
 * A controller for the REM Server.
 *
 * @SuppressWarnings(PHPMD.ExitExpression)
 */
class CommentController implements AppInjectableInterface
{
    use AppInjectableTrait;


    /**
     * View all posts
     *
     * @return void
     */
    public function viewAll()
    {
        $this->app->comment->viewAll();
    }

    /**
     * New post
     *
     * @return void
     */
    public function newPost()
    {
        $this->app->comment->newPost();
    }

    /**
     * New post page
     *
     * @return void
     */
    public function newPostAction()
    {
        $this->app->comment->newPostAction();
    }

    /**
     * Show one post
     *
     * @return void
     */
    public function showOnePost($id)
    {
        $this->app->comment->showOnePost($id);
    }

    /**
     * Edit post
     *
     * @return void
     */
    public function editPost($id)
    {
        $this->app->comment->editPost($id);
    }

    /**
     * Edit post action
     *
     * @return void
     */
    public function editPostAction()
    {
        $this->app->comment->editPostAction();
    }

    /**
     * Remove post
     *
     * @return void
     */
    public function removePost($id)
    {
        $this->app->comment->removePost($id);
    }
}
