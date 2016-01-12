<?php if (empty($positions)): ?>
    <h2>You have yet to have an article published.</h2>
<?php endif ?>

<!-- if articles have been written -->
<?php if (!empty($positions)): ?>
<div class="page">
    <h1 style="font-size:24px;color:maroon;margin:0 0 15px 0;padding: 0 0 15px 0;border-bottom:1px dotted #EEE">Your Published Articles</h1>
</div>
<!-- display published article in table -->
<table class="table table-striped left">
    
    <thead>
    <tr>
        <th></th>
        <th>Title</th>
        <th>Link</th>
        <th>Sport</th>
        <th>Type</th>
    </tr>
    </thead>
    
    <?php
        $counter = 1;
        foreach ($positions as $position)
        {
            print("<tr>");
            print("<td><strong>{$counter}</strong></td>");
            print("<td>{$position["title"]}</td>");
            print("<td><a target='_blank' href='{$position["link"]}'>{$position["link"]}</a></td>");
            print("<td>{$position["sport"]}</td>");
            print("<td>{$position["type"]}</td>");
            print("</tr>");
            $counter++;
        }
    
    ?>

</table>
<?php endif ?>
