<html>
    <body>

        Welcome <?php
        $fname = filter_input(INPUT_POST, "fname");

        $lname = filter_input(INPUT_POST, "lname");
        print($fname . " " . $lname);
        ?>
        !
        <br>
        Your email address is: <?php echo filter_input(INPUT_POST, "email"); ?>

    </body>
</html> 


<!--<html>
    <body>

        //<?php
//        echo "Study " . $_GET['subject'] . " at " . $_GET['web'];
//        
?>

    </body>
</html> -->