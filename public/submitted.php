<?php
    /**
     * submitted.php
     *
     * Crimson Compster
     * Manav Khandelwal
     * manavkhandelwal@college.harvard.edu
     * 
     *
     * Lists submitted articles (for specific comper if logged in, for all
     * compers if director logged in).
     */

    // Configuration
    require("../includes/config.php");
    
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // See whether comper or director
        $ids = CS50::query("SELECT role FROM users WHERE userid = ?", $_SESSION["id"]);
        $id = $ids[0]["role"];
        
        // if comper
        if ($id == "COMPER")
        {
            // select submitted articles from just current user
            $rows = CS50::query("SELECT id, title, sport, type, duedate FROM portfolio WHERE status = 3 AND userid = ?", $_SESSION["id"]);
        
            // render form
            render("submitted_view.php", [
                "title" => "Submitted Articles",
                "rows" => $rows
            ]);
        }
        // if director
        else
        {
            // get articles in queue from all compers
            $articles = CS50::query("SELECT id, title, sport, type, duedate, userid FROM portfolio WHERE status = 3");
            
            // go through each article and get writer's name
            foreach($articles as &$article)
            {
                $name = CS50::query("SELECT name FROM users WHERE userid = ?", $article["userid"]);
                $article["name"] = $name[0]["name"];
            }
        
            // render form
            render("submitted_view_director.php", [
                "title" => "Submitted Articles",
                "rows" => $articles
            ]);
        }
    }
?>