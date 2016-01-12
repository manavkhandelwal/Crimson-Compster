<div class="page" style="color: green;">
    <h1 style="font-size:24px;color:maroon;margin:0 0 15px 0;padding: 0 0 15px 0;border-bottom:1px dotted #EEE">UPDATE INFORMATION</h1>
</div>
<form action="update_info.php" method="post" id="information">
    <div id="row" class="input-set">
        <div class="name">Name: <?php echo $rows[0]["name"]; ?></div>
        <div class="form_text"><input class="form-control" name="name" placeholder="Update name" type="text"/></div>
    </div>
    <div id="row" class="input-set">
        <div class="name">Cell #: <?php echo $rows[0]["cell_number"]; ?></div>
        <div class="form_text"><input class="form-control" maxlength="10" name="cell" placeholder="Update cell (only #s)" placeholder="Update cell #" type="text"/></div>
    </div>
    <div id="row" class="input-set">
        <div class="name">Email Address: <?php echo $rows[0]["email"]; ?></div>
        <div class="form_text"><input class="form-control" name="email" placeholder="Update email address" type="text"/></div>
    </div>
    <div id="email"></div>
    <div id="row" class ="input-set">
        <div class="name"></div>
        <div class="submit_change"><button class="btn btn-success" type="submit" name="submit_name" value="name">
            <span aria-hidden="true" class="glyphicon glyphicon-thumbs-up"></span>
            Change</button></div>
    </div>
</form>
<script>
    var form = document.getElementById('information');
    
    // when form submitted
    form.onsubmit = function() {
            if (form.email.value != "")
            {
                // split input based on location of '@'
                var domain = form.email.value.split('@');
                var length = domain.length;
                
                // if not valid email, tell user
                if (domain[length-1] != "college.harvard.edu")
                {
                    document.getElementById("email").innerHTML = 'Please enter a Harvard email address.';
                    return false;
                }
            }
        };
</script>