<?php

$fname = $lname = $email = $gender = $comment = $website = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {
  $fname = test_input(filter_input(INPUT_POST, "fname"));
  $lname = test_input(filter_input(INPUT_POST, "lname"));
  $email = test_input(filter_input(INPUT_POST, "email"));
  $website = test_input(filter_input(INPUT_POST, "website"));
  $comment = test_input(filter_input(INPUT_POST, "comment"));
  $gender = test_input(filter_input(INPUT_POST, "gender"));
}

function test_input($data) {
  $trimData = trim($data);
  $stripData = stripslashes($trimData);
  $resultData = htmlspecialchars($stripData);
  return $resultData;
}
?>

<?php
echo "<h3>Your Input:</h3>";
echo $fname ." ". $lname;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;



