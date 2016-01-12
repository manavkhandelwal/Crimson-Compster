<!-- if no pitches -->
<?php if (empty($rows)): ?>
    <h2 style="font-size:24px;color:green;margin:0 0 15px 0;padding: 0 0 15px 0;border-bottom:1px dotted #EEE;">No pitches available.</h2>
<?php endif ?>

<!-- if pitches available -->
<?php if (!empty($rows)): ?>
<div class="page" style="color: green;">
    <h1 style="font-size:24px;color:maroon;margin:0 0 15px 0;padding: 0 0 15px 0;border-bottom:1px dotted #EEE;">PITCHES</h1>
</div>
<form action="claim_pitch.php" method="post">
    <table class="table table-hover">
    <tr style="background-color: blue;">
        <th></th>
        <th style="text-align: center; color: white;">Title</th>
        <th style="text-align: center; color: white;">Sport</th>
        <th style="text-align: center; color: white;">Type</th>
        <th style="text-align: center; color: white;">Due Date</th>
    </tr>
<?php foreach ($rows as $row) : ?>
        <!-- each row has radio button to claim and other info about article -->
        <tr>
            <td><input type="radio" name="article" value="<?php echo $row["id"]; ?>"></td>
            <td style="text-align: center; font-weight: bold;"><?php echo $row["title"]; ?></td>
            <td class="form_row"><?php echo $row["sport"]; ?></td>
            <td class="form_row"><?php echo $row["type"]; ?></td>
            <td class="form_row"><?php echo $row["duedate"]; ?></td>
        </tr>
<?php endforeach; ?>
    </table>
    <div class="form-group">
        <button class="btn btn-info" type="submit">
            <span aria-hidden="true" class="glyphicon glyphicon-pencil"></span>
            Claim
        </button>
    </div>
</form>
<?php endif ?>