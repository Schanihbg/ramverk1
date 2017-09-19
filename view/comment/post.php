<?php
echo '<div class="card" style="width: 256px;">';
$picture = $this->app->comment->getGravatar($content->email, 256);
echo sprintf('<img src="%s" alt="Gravatar picture">', $picture);
echo sprintf('<p class="text-center">%s</p>', $content->email);
echo '</div>';
echo '<br>';

echo $this->app->textfilter->markdown($content->comment);

echo sprintf('<a class="btn btn-outline-primary" href="%s">Go back</a>', $this->app->url->create("comment"));
echo sprintf('<a class="btn btn-outline-primary" href="%s">Edit</a>', $this->app->url->create("comment/edit/".$content->id));
echo sprintf('<a class="btn btn-outline-danger" href="%s">Delete</a>', $this->app->url->create("comment/delete/".$content->id));
