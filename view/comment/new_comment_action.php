<?php
    $sql = "INSERT INTO ramverk1_comment (email, comment) VALUES (?, ?)";

    $this->app->database->execute($sql, [$_POST["email"], $_POST["comment_area"]]);

    $this->app->redirect("comment");
