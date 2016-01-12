<?php if (empty($rows)): ?>
    <h2 style="font-size:24px;color:green;margin:0 0 15px 0;padding: 0 0 15px 0;border-bottom:1px dotted #EEE">You have no unpublished submissions.</h2>
<?php endif ?>

<!-- if articles have been submitted -->
<?php if (!empty($rows)): ?>
    <div class="page">
        <h1 style="font-size:24px;color:maroon;margin:0 0 15px 0;padding: 0 0 15px 0;border-bottom:1px dotted #EEE">SUBMITTED</h1>
    </div>
<table class="table table-hover">
    <thead>
    <tr style="background-color: green;">
        <th></th>
        <th style="text-align: center; color: white;">Title</th>
        <th style="text-align: center; color: white;">Sport</th>
        <th style="text-align: center; color: white;">Type</th>
    </tr>
    </thead>
    
    <?php
        $counter = 1;
        foreach ($rows as $row)
        {
            print("<tr>");
            print("<td><strong>{$counter}</strong></td>");
            print("<td>{$row["title"]}</td>");
            print("<td>{$row["sport"]}</td>");
            print("<td>{$row["type"]}</td>");
            print("</tr>");
            $counter++;
        }
    
    ?>
</table>
<?php endif ?>