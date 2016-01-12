<?php

    // configuration
    require("../includes/config.php"); 
    
    // determine role
    $roles = CS50::query("SELECT role FROM users WHERE userid = ?", $_SESSION["id"]);
    $role = $roles[0]["role"];
    
    // if comper, go to portfolio
    if ($role == "COMPER")
    {
        // get information to send to portfolio
        $positions = CS50::query("SELECT title, sport, link, type FROM portfolio WHERE userid = ? AND status = 2", $_SESSION["id"]);
    
        // render portfolio
        render("portfolio.php", [
            "title" => "Portfolio",
            "positions" => $positions
            ]);
    }
    // if director, go to add pitches page
    else if ($role == "DIRECTOR")
    {
        // get sports information
        $sports = CS50::query("SELECT name FROM sports");
        
        // render addpitch_view
        render("addpitch_view.php", [
            "title" => "Add A Pitch",
            "sports" => $sports
        ]);
    }
?>
