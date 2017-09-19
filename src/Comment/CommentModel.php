<?php

namespace Anax\Comment;

use \Anax\Common\AppInjectableInterface;
use \Anax\Common\AppInjectableTrait;
use \Anax\Configure\ConfigureInterface;
use \Anax\Configure\ConfigureTrait;

/**
 * REM Server.
 */
class CommentModel implements ConfigureInterface, AppInjectableInterface
{
    use ConfigureTrait;
    use AppInjectableTrait;


    /**
     * @var array $session inject a reference to the session.
     */
    private $session;



    /**
     * @var string $key to use when storing in session.
     */
    const KEY = "comment";



    /**
     * Inject dependencies.
     *
     * @param array $dependency key/value array with dependencies.
     *
     * @return self
     */
    public function inject($dependency)
    {
        $this->session = $dependency["session"];
        return $this;
    }


    /**
     * View all posts
     *
     * @return void
     */
    public function viewAll()
    {
        $sql = "SELECT * FROM `ramverk1_comment`";

        $data = $this->app->database->executeFetchAll($sql);
        $this->app->view->add("comment/main", ["content" => $data]);
        $this->app->renderPage(["title" => "All comments"]);
    }

    /**
     * New post
     *
     * @return void
     */
    public function newPost()
    {
        $this->app->view->add("comment/new_comment");
        $this->app->renderPage(["title" => "New comment"]);
    }

    /**
     * New post action
     *
     * @return void
     */
    public function newPostAction()
    {
        $this->app->view->add("comment/new_comment_action");
        $this->app->renderPage(["title" => "New comment action"]);
    }

    /**
     * Show one post
     *
     * @return void
     */
    public function showOnePost($id)
    {
        $sql = "SELECT * FROM ramverk1_comment where id = ?";

        $data = $this->app->database->executeFetch($sql, [$id]);
        $this->app->view->add("comment/post", ["content" => $data]);
        $this->app->renderPage(["title" => "Post id ".$id]);
    }

    /**
     * Edit post
     *
     * @return void
     */
    public function editPost($id)
    {
        $sql = "SELECT * FROM ramverk1_comment where id = ?";

        $data = $this->app->database->executeFetch($sql, [$id]);

        $this->app->view->add("comment/update_comment", ["content" => $data]);
        $this->app->renderPage(["title" => "Update comment"]);
    }

    /**
     * Edit post action
     *
     * @return void
     */
    public function editPostAction()
    {
        // $sql = "DELETE FROM ramverk1_comment WHERE id = ?";
        // $this->app->database->execute($sql, [$id]);

        $this->app->view->add("comment/update_comment_action");
        $this->app->renderPage(["title" => "New comment action"]);
    }

    /**
     * Delete post
     *
     * @return void
     */
    public function removePost($id)
    {
        $sql = "DELETE FROM ramverk1_comment WHERE id = ?";
        $this->app->database->execute($sql, [$id]);
        $this->app->redirect("comment");
    }

    /**
     * Get either a Gravatar URL or complete image tag for a specified email address.
     *
     * @param string $email The email address
     * @param string $size Size in pixels, defaults to 80px [ 1 - 2048 ]
     * @param string $d Default imageset to use [ 404 | mm | identicon | monsterid | wavatar ]
     * @param string $rating Maximum rating (inclusive) [ g | pg | r | x ]
     * @param boole $img True to return a complete IMG tag False for just the URL
     * @param array $atts Optional, additional key/value attributes to include in the IMG tag
     * @return String containing either just a URL or a complete image tag
     * @source https://gravatar.com/site/implement/images/php/
     */
    public function getGravatar($email, $size = 80, $dImageset = 'mm', $rating = 'g', $img = false, $atts = array())
    {
        $url = 'https://www.gravatar.com/avatar/';
        $url .= md5(strtolower(trim($email)));
        $url .= "?s=$size&d=$dImageset&r=$rating";
        if ($img) {
            $url = '<img src="' . $url . '"';
            foreach ($atts as $key => $val) {
                $url .= ' ' . $key . '="' . $val . '"';
            }
            $url .= ' />';
        }
        return $url;
    }
}
