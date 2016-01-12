<h1 style="font-size:28px;color:maroon;margin:0 0 10px 0;padding: 0 0 10px 0;border-bottom:1px dotted #EEE;">Add Published Article</h1>
<form action="add_article.php" method="post">
    <fieldset>
        <div class="form-group">
            <select class="form-control" name="title">
                <option disabled selected value="">Published Article</option>
                <?php
                    // print each submitted article as a form option
                    foreach ($submitteds as $submitted)
                    {
                        print("<option>{$submitted["title"]}</option>");
                    }
                ?>
            </select>
        </div>
        <div class ="form-group">
            <input class="form-control" name="link" placeholder="Link" style="width: 500px"/>
        </div>
        <div class="form-group">
            <button class="btn btn-success" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span>
                Publish
            </button>
        </div>
    </fieldset>
</form>
<div>
    or <a href="register.php">register</a> for an account
</div>