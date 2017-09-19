<?php
/**
 * Routes for the comment function.
 */

/** View all posts. */
$app->router->get("comment/", [$app->commentController, "viewAll"]);

/** New post. */
$app->router->get("comment/new", [$app->commentController, "newPost"]);
$app->router->post("comment/new_comment_action", [$app->commentController, "newPostAction"]);

/** Show one post. */
$app->router->get("comment/post/{id:digit}", [$app->commentController, "showOnePost"]);

/** Edit post. */
$app->router->get("comment/edit/{id:digit}", [$app->commentController, "editPost"]);
$app->router->post("comment/edit/update_comment_action", [$app->commentController, "editPostAction"]);

/** Delete one post. */
$app->router->get("comment/delete/{id:digit}", [$app->commentController, "removePost"]);
