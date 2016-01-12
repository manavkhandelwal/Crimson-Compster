    <div class="page" style="color: #7f00ff;">
        <h1 style="font-size:24px;color:purple;margin:0 0 15px 0;padding: 0 0 15px 0;border-bottom:1px dotted #EEE">SUBMIT ARTICLE</h1>
    </div>
    
    <!-- article title -->
    <div style="font-weight: bold;">Title: <?php echo $rows[0]["title"]; ?></div>

<!-- form to submit -->
<div style="text-align:center;">
    <form name="contactform" method="post" action="send_form_email.php">
        <textarea id="submission_form" name="articles"></textarea>
        <input type="hidden" name="article_id" value="<?php echo $rows[0]["id"]; ?>">
        <div><button class="btn btn-danger" type="submit">
            <span aria-hidden="true" class="glyphicon glyphicon-envelope"></span>
        Submit
        </button></div>
    </form>
</div>