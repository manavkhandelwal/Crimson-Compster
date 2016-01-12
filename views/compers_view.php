<h1 style="font-size:28px;color:maroon;margin:0 0 10px 0;padding: 0 0 10px 0;border-bottom:1px dotted #EEE;">COMPERS</h1>
<table class="table table-striped left">
    
    <thead>
    <tr>
        <th></th>
        <th>Name</th>
        <th>Cell #</th>
        <th>Email</th>
        <th>HUID</th>
    </tr>
    </thead>
    
    <?php
        // counter variable
        $counter = 1;
        
        // go through each comper and list them in table
        foreach ($compers as $comper)
        {
            print("<tr>");
            print("<td><strong>{$counter}</strong></td>");
            print("<td style='font-family:courier; font-size: 15px;'>{$comper["name"]}</td>");
            print("<td>{$comper["cell_number"]}</td>");
            print("<td>{$comper["email"]}</td>");
            print("<td>{$comper["huid"]}</td>");
            print("</tr>");
            $counter++;
        }
    
    ?>

</table>