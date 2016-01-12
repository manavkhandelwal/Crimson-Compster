    <div class="page">
        <h1 style="font-size:28px;color:maroon;margin:0 0 10px 0;padding: 0 0 10px 0;border-bottom:1px dotted #EEE;">SUBMITTED</h1>
    </div>
    
    <div id="row"></div>
        <?php foreach ($rows as $row) : ?>
            <div class="input-set">
                <div class="title"><?php echo $row["title"]; ?></div>
                <div class="name"><?php echo $row["name"]; ?></div>
                <div class="sport"><?php echo $row["sport"]; ?></div>
                <div class="type"><?php echo $row["type"]; ?></div>
            </div>
        <?php endforeach; ?>
    </div>