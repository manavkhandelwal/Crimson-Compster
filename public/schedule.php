<?php
    /**
     * schedule.php
     *
     * Crimson Compster
     * Manav Khandelwal
     * manavkhandelwal@college.harvard.edu
     * 
     *
     * Renders schedule view (iframe Google Calendar).
     */
     
    // Configuration
    require("../includes/config.php");
    
    // Render view
    render("schedule_view.php", ["title" => "Schedule",]);
?>