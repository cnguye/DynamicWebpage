<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title; ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css" />
    </head>
    <body>
        <div id="announcements">
            <p>Dynamic Announcements</p>
        </div>
        <div id="wrapper">

            <div id="banner">

            </div>

            <nav id="navigation">
                <ul id="nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="contactMe.php">Contact Me</a></li>
                    <li><a href="register.php">Register</a></li>
                    <li><a href="about.php">About</a></li>
                </ul>
            </nav>

            <div id="content_area">
                <?php echo $content; ?>
            </div>

            <div id="sidebar">
                <div id="insidebar">
                    <form class="form-inline my-2 my-lg-0" id="form">
                        <input class="form-control mr-sm-2" type="attach" placeholder="attach file" aria-label="attach">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Attach</button>
                        &nbsp;
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Send</button>
                    </form>
                </div>

                <div>

                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        First Name: <input type="text" name="fname">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">submit</button>
                    </form>

                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        // collect value of input field
                        $name = htmlspecialchars($_REQUEST['fname']);
                        if (empty($name)) {
                            print "Name is empty";
                        } else {
                            echo $name;
                        }
                    }
                    ?>

                </div>
            </div>

            <footer>
                <p>All rights reserved CSULA 2018</p>
            </footer>
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
