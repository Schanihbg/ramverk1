<?php
    $sql = "INSERT INTO ramverk1_comment (email, comment) VALUES (?, ?)";

    $this->di->get("database")->execute($sql, [$_POST["email"], $_POST["comment_area"]]);

    $this->di->get("response")->redirect($this->di->get("url")->create("comment"));
