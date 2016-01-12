<h1 style="font-size:28px;color:maroon;margin:0 0 10px 0;padding: 0 0 10px 0;border-bottom:1px dotted #EEE;">Add Pitch</h1>
<form action="add_pitch.php" method="post">
    <fieldset>
        <div class="form-group">
            <input class="form-control" name="title" placeholder="Article Title" type="text" style="width: 400px"/>
        </div>
        <!-- choose sport -->
        <div class="form-group">
            <select class="form-control" name="sport">
                <option disabled selected value="">Sport</option>
                <?php
                    // have each sport as an option
                    foreach ($sports as $sport)
                    {
                        print("<option>{$sport["name"]}</option>");
                    }
                ?>
            </select>
        </div>
        <!-- choose type of article -->
        <div class="form-group">
            <select class="form-control" name="type">
                <option disabled selected value="">Type of Article</option>
                <option>Live Gamer</option>
                <option>Call In</option>
                <option>Preview</option>
                <option>Feature</option>
                <option>Blog Post</option>
            </select>
        </div>
        <div class ="form-group">
            <input type="date" name="duedate" placeholder="Due Date" min="2015-12-01"><br> <!-- date -->
        </div>
        <div class="form-group">
            <button class="btn btn-success" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span>
                Pitch
            </button>
        </div>
    </fieldset>
</form>