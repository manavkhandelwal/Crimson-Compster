<!DOCTYPE html>

<html>

    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />

        <!-- http://getbootstrap.com/ -->
        <link href="/css/bootstrap.min.css" rel="stylesheet"/>

        <link href="/css/styles.css" rel="stylesheet"/>
        
        <link href="/css/external.css" rel="stylesheet"/>

        <?php if (isset($title)): ?>
            <title>Crimson Compster: <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>Crimson Compster</title>
        <?php endif ?>

        <!-- https://jquery.com/ -->
        <script src="/js/jquery-1.11.3.min.js"></script>

        <!-- http://getbootstrap.com/ -->
        <script src="/js/bootstrap.min.js"></script>

        <script src="/js/scripts.js"></script>
        
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="57x57" href="/img/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/img/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/img/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/img/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/img/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/img/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/img/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/img/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/img/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/img/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/img/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon-16x16.png">
        <link rel="manifest" href="/img/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/img/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

    </head>

    <body>

        <div class="container">

            <div id="top">
                <div>
                    <a href="/"><img alt="Crimson Compster" src="/img/compster.png"/></a>
                </div>
                <!-- tells user who they are signed in as -->
                    <?php
                        // prints name
                        if (!empty($_SESSION["id"]))
                        {
                            print("<div style='font-style: italic;'>");
                            $signed = "You are signed in as ";
                            
                            $users = CS50::query("SELECT name FROM users WHERE userid = ?", $_SESSION["id"]); 
                            
                            $name = $users[0]["name"];
                        
                            $signed .= $name;
                            $signed .= ".";
                            echo $signed;
                            print("</div>");
                        }
                    ?>
                <!-- shows different menu depending on type of user -->
                <?php 
                    if (!empty($_SESSION["id"]))
                    {
                        $people = CS50::query("SELECT role FROM users WHERE userid = ?", $_SESSION["id"]); 
                        if ($people[0]["role"] == "COMPER")
                        {
                            print("<ul class='nav nav-tabs nav-justified'>");
                            print("<li><a href='index.php'>MyArticles</a></li>");
                            print("<li><a href='claim_pitch.php'>Pitches</a></li>");
                            print("<li><a href='current_articles.php'>Due</a></li>");
                            print("<li><a href='submitted.php'>Submitted</a></li>");
                            print("<li><a href='schedule.php'>Schedule</a></li>");
                            print("<li><a href='update_info.php'>Personal Information</a></li>");
                            print("<li><a href='logout.php' style='font-weight: bold;'>Log Out</a></li>");
                            print("</ul>");
                        }
                        else
                        {
                            print("<ul class='nav nav-tabs nav-justified'>");
                            print("<li><a href='add_pitch.php'>Add Pitches</a></li>");
                            print("<li><a href='add_article.php'>Add Article</a></li>");
                            print("<li><a href='submitted.php'>Current Submissions</a></li>");
                            print("<li><a href='compers.php'>Compers</a></li>");
                            print("<li><a href='logout.php' style='font-weight: bold;'>Log Out</a></li>");
                            print("</ul>");
                        }
                    }
                ?>
            </div>

            <div id="middle">