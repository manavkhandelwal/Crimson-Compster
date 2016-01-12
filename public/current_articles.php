<?php
    /**
     * current_articles.php
     *
     * Crimson Compster
     * Manav Khandelwal
     * manavkhandelwal@college.harvard.edu
     * 
     *
     * Processes articles that are due and lists them with submit button for compers.
     * Only takes GET requests... POST requests from view go to submit.php.
     */
    
    // Configuration
    require("../includes/config.php");
    
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // get user's articles
        $rows = CS50::query("SELECT id, title, sport, type, duedate FROM portfolio WHERE status = 1 AND userid = ?", $_SESSION["id"]);
        
        // render view
        render("articles_due.php", [
            "title" => "Due Articles",
            "rows" => $rows
        ]);
    }
?>