<?php



include("includes/db.php");
include("functions/functions.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CSE CLUB</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../styles/style.css">
</head>

<body>

    <div id="top">
        <div class="container">
            <div class="col-md-6 offer">
                <h2> CSE Club Management system</h2>
            </div>
        </div>
    </div>

    <div id="navbar" class="navbar navbar-default">
        <div class="container">
            <div class="navbar-collapse collapse" id="navigation">
                <div class="padding-nav">
                    <ul class="nav navbar-nav left">
                        <li class="<?php if ($active == 'Home') echo "active"; ?>">
                            <a href="../index.php?home">Home</a>
                        </li>
                        <li class="<?php if ($active == 'Account') echo "active"; ?>">
                            <?php
                            if (!isset($_SESSION['member_email'])) {

                                echo "<a href='member_login.php'>login</a>";
                            } else {
                                echo "<a href='logout.php'>logout</a>";
                            }
                            ?>
                        </li>
                        <li class="<?php if ($active == 'Contact') echo "active"; ?>">
                            <a href="contact.php">Contact Us</a>
                        </li>
                        <li class="<?php if ($active == 'my_account') echo "active"; ?>">
                            <a href="my_account.php">my account</a>
                        </li>
                        <li class="<?php if ($active == 'Anouncements') echo "active"; ?>">
                            <a href="#anouncement">Anouncements</a>
                        </li>
                        
                        <li class="<?php if ($active == 'event') echo "active"; ?>">
                            <a href="#hot">events</a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div><