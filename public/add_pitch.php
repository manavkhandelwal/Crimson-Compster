<?php
    /**
     * add_pitch.php
     *
     * Crimson Compster
     * Manav Khandelwal
     * manavkhandelwal@college.harvard.edu
     * 
     *
     * Allows director to add a pitch and processes the resulting database changes.
     */

    // configuration
    require("../includes/config.php");
    
    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // get sport list from database for rendering purposes
        $sports = CS50::query("SELECT name FROM sports");
        
        // render view
        render("addpitch_view.php", [
            "title" => "Add A Pitch",
            "sports" => $sports
            ]);
    }
    
    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (empty($_POST["title"]))
        {
            apologize("You must provide a title.");
        }
        else if (empty($_POST["sport"]))
        {
            apologize("You must choose a sport.");
        }
        else if (empty($_POST["duedate"]))
        {
            apologize("You must provide a due date.");
        }
        else if (empty($_POST["type"]))
        {
            apologize("You must provide an article type.");
        }
        
        // add to database
        CS50::query(
            "INSERT INTO portfolio (userid, title, sport, type, duedate) VALUES(0, ?, ?, ?, ?)",
            $_POST["title"], $_POST["sport"],$_POST["type"], $_POST["duedate"]);
        
        // get sports from database for rendering purposes
        $sports = CS50::query("SELECT name FROM sports");
        
        // render view
        render("addpitch_view.php", [
            "title" => "Add A Pitch",
            "sports" => $sports
        ]);
    }
?>