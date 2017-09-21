<form action="new_comment_action" method="POST">
    <div class="form-group">
        <label>Email address</label>
        <input name="email" type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email" required>
    </div>
    <div class="form-group">
        <label>Comment</label>
        <textarea name="comment_area" class="form-control" rows="3" required></textarea>
    </div>
    <a class="btn btn-outline-primary" href="<?=$this->di->get("url")->create("comment")?>">Go back</a>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
