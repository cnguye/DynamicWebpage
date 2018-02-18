<?php

$fname = $lname = $email = $gender = $comment = $website = "";
$fnameErr = $lnameErr = $emailErr = $genderErr = $websiteErr = "";

$print = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $print = true;
    if (!filter_input(INPUT_POST, "fname")) {
        $fnameErr = "First name required";
    } else {
        $fname = test_input(filter_input(INPUT_POST, "fname"));
    }
    if (!filter_input(INPUT_POST, "lname")) {
        $lnameErr = "Last name required";
    } else {
        $lname = test_input(filter_input(INPUT_POST, "lname"));
    }
    if (!filter_input(INPUT_POST, "email")) {
        $emailErr = "Email required";
    } else {
        $email = test_input(filter_input(INPUT_POST, "email"));
    }

    if (filter_input(INPUT_POST, "website") == NULL) {
        $website = "";
    } else {
        $website = test_input(filter_input(INPUT_POST, "website"));
    }

    if (filter_input(INPUT_POST, "comment") == NULL) {
        $comment = "";
    } else {
        $comment = test_input(filter_input(INPUT_POST, "comment"));
    }

    if (!filter_input(INPUT_POST, "gender")) {
        $genderErr = "Gender required";
    } else {
        $gender = test_input(filter_input(INPUT_POST, "gender"));
    }
}

function test_input($data) {
    $trimData = trim($data);
    $stripData = stripslashes($trimData);
    $resultData = htmlspecialchars($stripData);
    return $resultData;
}
?>

<?php

if($print){
    echo "<h3>Your Input:</h3>";
    echo $fname . " " . $lname;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
}
