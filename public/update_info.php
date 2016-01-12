<?php
    /**
     * update_info.php
     *
     * Crimson Compster
     * Manav Khandelwal
     * manavkhandelwal@college.harvard.edu
     * 
     *
     * Comper information update processing. Additional checks beyond JavaScript in view itself.
     * Handles query requests and renders appropriate views.
     */

    // configuration
    require("../includes/config.php");
    
    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // get information about current user
        $rows = CS50::query("SELECT * FROM users WHERE userid = ?", $_SESSION["id"]);
        
        // render form
        render("information_view.php", [
            "title" => "Update Information",
            "rows" => $rows
        ]);
    }
    
    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $name = $_POST["name"];
        $cell = $_POST["cell"];
        $email = $_POST["email"];
        
        // update information in database
        if(!empty($name))
        {
            CS50::query("UPDATE users SET name = ? WHERE userid = ?", $name, $_SESSION["id"]);
            if (!empty($cell))
            {
                CS50::query("UPDATE users SET cell_number = ? WHERE userid = ?", $cell, $_SESSION["id"]);
                if (!empty($email))
                {
                    CS50::query("UPDATE users SET email = ? WHERE userid = ?", $email, $_SESSION["id"]);
                }
            }
        }
        else if (!empty($cell))
        {
            CS50::query("UPDATE users SET cell_number = ? WHERE userid = ?", $cell, $_SESSION["id"]);
            if (!empty($email))
            {
                CS50::query("UPDATE users SET email = ? WHERE userid = ?", $email, $_SESSION["id"]);
            }
        }
        else if (!empty($email))
        {
            CS50::query("UPDATE users SET email = ? WHERE userid = ?", $email, $_SESSION["id"]);
        }
        else
        {
            apologize("Please choose one to submit.");
        }
        
        // redirect
        redirect("/update_info.php");
    }
?>