<?php
    /**
     * submit.php
     *
     * Crimson Compster
     * Manav Khandelwal
     * manavkhandelwal@college.harvard.edu
     * 
     *
     * Processes which article comper wants to submit, and renders that info
     * to submission view.
     */
    
    // configuration
    require("../includes/config.php");
    
    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // Get articles in queue
        $rows = CS50::query("SELECT id, title, sport, type, duedate FROM portfolio WHERE status = 1 AND userid = ?", $_SESSION["id"]);
        
        // render form
        render("articles_due.php", [
            "title" => "Due Articles",
            "rows" => $rows
        ]);
    }
    
    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // Validate submission
        if (!isset($_POST['article']))
        {
            apologize("You must select an article to submit. Please return to the articles due page.");
        }  
        
        // ID of article
        $article = $_POST['article'];
        
        // Gets info about article
        $rows = CS50::query("SELECT title, id FROM portfolio WHERE id = ?", $article);
        
        // Render submit_view
        render("submit_view.php", [
            "title" => "Submit Article",
            "rows" => $rows
        ]);
    }
?>