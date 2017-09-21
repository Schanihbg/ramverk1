<?php

namespace Anax\Comment;

use \Anax\DI\InjectionAwareInterface;
use \Anax\DI\InjectionAwareTrait;
use \Anax\Configure\ConfigureInterface;
use \Anax\Configure\ConfigureTrait;

/**
 * REM Server.
 */
class CommentModel implements ConfigureInterface, InjectionAwareInterface
{
    use ConfigureTrait;
    use InjectionAwareTrait;


    /**
     * @var array $session inject a reference to the session.
     */
    private $session;



    /**
     * @var string $key to use when storing in session.
     */
    const KEY = "comment";



    /**
     * Inject dependency to $session..
     *
     * @param array $session object representing session.
     *
     * @return self
     */
    public function injectSession($session)
    {
        $this->session = $session;
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

        $data = $this->di->get("database")->executeFetchAll($sql);
        $this->di->get("view")->add("comment/main", ["content" => $data]);
        $this->di->get("pageRender")->renderPage(["title" => "All comments"]);
    }

    /**
     * New post
     *
     * @return void
     */
    public function newPost()
    {
        $this->di->get("view")->add("comment/new_comment");
        $this->di->get("pageRender")->renderPage(["title" => "New comment"]);
    }

    /**
     * New post action
     *
     * @return void
     */
    public function newPostAction()
    {
        $this->di->get("view")->add("comment/new_comment_action");
        $this->di->get("pageRender")->renderPage(["title" => "New comment action"]);
    }

    /**
     * Show one post
     *
     * @return void
     */
    public function showOnePost($id)
    {
        $sql = "SELECT * FROM ramverk1_comment where id = ?";

        $data = $this->di->get("database")->executeFetch($sql, [$id]);
        $this->di->get("view")->add("comment/post", ["content" => $data]);
        $this->di->get("pageRender")->renderPage(["title" => "Post id ".$id]);
    }

    /**
     * Edit post
     *
     * @return void
     */
    public function editPost($id)
    {
        $sql = "SELECT * FROM ramverk1_comment where id = ?";

        $data = $this->di->get("database")->executeFetch($sql, [$id]);

        $this->di->get("view")->add("comment/update_comment", ["content" => $data]);
        $this->di->get("pageRender")->renderPage(["title" => "Update comment"]);
    }

    /**
     * Edit post action
     *
     * @return void
     */
    public function editPostAction()
    {
        $this->di->get("view")->add("comment/update_comment_action");
        $this->di->get("pageRender")->renderPage(["title" => "Update comment action"]);
    }

    /**
     * Delete post
     *
     * @return void
     */
    public function removePost($id)
    {
        $sql = "DELETE FROM ramverk1_comment WHERE id = ?";
        $this->di->get("database")->execute($sql, [$id]);
        $this->di->get("response")->redirect($this->di->get("url")->create("comment"));
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
