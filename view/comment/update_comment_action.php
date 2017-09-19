<?php
    $sql = "UPDATE ramverk1_comment SET comment = ? WHERE id = ?";

    $this->app->database->execute($sql, [$_POST["comment_area"], $_POST["id"]]);
    $this->app->redirect("comment");
