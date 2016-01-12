<?php
    /**
     * add_article.php
     *
     * Crimson Compster
     * Manav Khandelwal
     * manavkhandelwal@college.harvard.edu
     * 
     *
     * Processes publishing of article by director.
     * Can process GET or POST requests.
     */
    
    // configuration
    require("../includes/config.php");
    
    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        $submitteds = CS50::query("SELECT title FROM portfolio WHERE status = 3");
        
        render("addarticle_view.php", [
            "title" => "Add A Published Article",
            "submitteds" => $submitteds
        ]);
    }
    
    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (!isset($_POST["title"]))
        {
            apologize("You must choose a title.");
        }
        else if (empty($_POST["link"]))
        {
            apologize("You must provide a link to the article on thecrimson.com");
        }
            
        // Update database with link and status (from submitted to published)
        CS50::query("UPDATE portfolio SET status = 2 WHERE title = ?", $_POST["title"]);
        CS50::query("UPDATE portfolio SET link = ? WHERE title = ?", $_POST["link"], $_POST["title"]);
    
        redirect("/");
    }
?>