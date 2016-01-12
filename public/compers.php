<?php
    /**
     * compers.php
     *
     * Crimson Compster
     * Manav Khandelwal
     * manavkhandelwal@college.harvard.edu
     * 
     *
     * Lists compers for directors. Only processes GET requests.
     */
    
    // Configuration
    require("../includes/config.php");
    
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // Get info about compers
        $compers = CS50::query("SELECT name, huid, email, cell_number FROM users WHERE role = 'COMPER'");
        
        // Render view
        render("compers_view.php", [
            "title" => "Comper Information",
            "compers" => $compers
        ]);
    }    
?>