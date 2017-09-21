<?php
echo '<div class="card" style="width: 256px;">';
$picture = $this->di->get("comment")->getGravatar($content->email, 256);
echo sprintf('<img src="%s" alt="Gravatar picture">', $picture);
echo sprintf('<p class="text-center">%s</p>', $content->email);
echo '</div>';
echo '<br>';

echo $this->di->get("textfilter")->markdown($content->comment);

echo sprintf('<a class="btn btn-outline-primary" href="%s">Go back</a>', $this->di->get("url")->create("comment"));
echo sprintf('<a class="btn btn-outline-primary" href="%s">Edit</a>', $this->di->get("url")->create("comment/edit/".$content->id));
echo sprintf('<a class="btn btn-outline-danger" href="%s">Delete</a>', $this->di->get("url")->create("comment/delete/".$content->id));
