<?php
    /**
     * registerd.php
     *
     * Crimson Compster
     * Manav Khandelwal
     * manavkhandelwal@college.harvard.edu
     * 
     *
     * Director registration processing. Additional checks beyond JavaScript in view itself.
     * Handles query requests and renders appropriate views.
     */

    // configuration
    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // render director registration form
        render("register_form_director.php", ["title" => "Register As A Director"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (empty($_POST["username"]))
        {
            apologize("You must provide your username.");
        }
        else if (empty($_POST["password"]))
        {
            apologize("You must provide your password.");
        }
        else if (empty($_POST["name"]))
        {
            apologize("You must provide your name.");
        }
        else if (empty($_POST["huid"]))
        {
            apologize("You must provide your HUID.");
        }
        else if (empty($_POST["email"]))
        {
            apologize("You must provide your email address.");
        }
        else if (empty($_POST["cell"]))
        {
            apologize("You must provide your cell phone number.");
        }
        
        // check confirmation
        if ($_POST["password"] != $_POST["confirmation"])
        {
            apologize("Your passwords don't match.");
        }
        
        // Store code in variable
        $code = strtoupper($_POST["code"]);
        
        // Check to see if it matches registration code
        if ($code != "KINGDAVIDANDQUEENSAM")
        {
            apologize("You did enter the correct registration code. Please refresh the page and try registering again.");
        }
        
        // add user to database
        if (!CS50::query(
            "INSERT IGNORE INTO users (username, hash, name, huid, email, cell_number, role) VALUES(?, ?, ?, ?, ?, ?, 'DIRECTOR')", 
            $_POST["username"], password_hash($_POST["password"], PASSWORD_DEFAULT), $_POST["name"], $_POST["huid"], $_POST["email"], $_POST["cell"]))
        {
            apologize("Username already exists.");
        }
        
        // retrieve ID and then store in session
        $rows = CS50::query("SELECT LAST_INSERT_ID() AS id");
        $id = $rows[0]["id"];
    
        // set session ID
        $_SESSION["id"] = $id;
        
        // redirect to index.php
        redirect("/");
    }

?>