<?php
    /**
     * send_form_email.php
     *
     * Crimson Compster
     * Manav Khandelwal
     * manavkhandelwal@college.harvard.edu
     * 
     *
     * Sends email with contents of submit form to desired email.
     * Handles only POST requests from submit form.
     */
    
    // Configuration
    require("../includes/config.php");
    
    // Configure postmark email server
    require_once('./vendor/autoload.php');
    use Postmark\PostmarkClient;
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // Validate submission
        if(!isset($_POST['articles'])) 
        {
            apologize("You tried to submit empty text. Please try again.");
        }
        
        // Store id of article in variable
        $article = $_POST["article_id"];
        
        // update mySQL
        CS50::query("UPDATE portfolio SET status = 3 WHERE id = ?", $article);
        
        // set submission destination and subject
        $email_to = "phillyfan362@gmail.com";
        $email_subject = "Crimson Article Submission";

        // Actual article text variable
        $articles = $_POST['articles'];
        
        // Start of email message
        $email_message = "Form details below.\n\n";
        
        // Get title of article
        $pieces = CS50::query("SELECT title FROM portfolio WHERE id = ?", $article);
        $piece = $pieces[0]["title"];
        
        // Get name of comper
        $compers = CS50::query("SELECT name, email FROM users WHERE userid = ?", $_SESSION["id"]);
        $name = $compers[0]["name"];
        $email = $compers[0]["email"];
 
        // Craft e-mail message body
        $email_message .= "Comper: ".$name."\r\n";
 
        $email_message .= "Article Title: ".$piece."\r\n";
 
        $email_message .= "Comments: ".$articles."\r\n";
 
        $client = new PostmarkClient("211bda55-ecef-447c-ba35-7b2ca54e802f");

        // Send email
        $sendResult = $client->sendEmail(
            "manavkhandelwal@college.harvard.edu",
            "phillyfan362@gmail.com",
            "Comper Article Submissions",
            "$email_message"
        );
        
        // Redirect
        redirect("/");
    }
    else if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        redirect("/");
    }
?>