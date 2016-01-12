<?php
    /**
     * claim_pitch.php
     *
     * Crimson Compster
     * Manav Khandelwal
     * manavkhandelwal@college.harvard.edu
     * 
     *
     * Allows compers to claim articles and add them to their 'due' section, instantly updating database.
     */

    // Configuration
    require("../includes/config.php");

    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // select pitches
        $rows = CS50::query("SELECT id, title, sport, type, duedate FROM portfolio WHERE status = 0");
        
        // render view
        render("pitches_view.php", [
            "title" => "Pitches",
            "rows" => $rows
        ]);
    }
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if (!isset($_POST['article']))
        {
            apologize("You must select an article. Please return to the pitches page.");
        }
        
        // Store article id in variable
        $article = $_POST['article'];
        
        // Update portfolio
        CS50::query("UPDATE portfolio SET status = 1 WHERE id = ?", $article);
        CS50::query("UPDATE portfolio SET userid = ? WHERE id = ?", $_SESSION["id"], $article);
        
        // Redirect
        redirect("/current_articles.php");
    }
?>