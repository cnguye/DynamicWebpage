<?php

require 'Controller/CapsController.php';
$capsController = new CapsController();

if(isset($_POST['types'])){
    // Fill page with employees of the selected type
    $capsTables = $capsController->CreateCapsTables($_POST['types']);
}
else{
    // Page is loaded for the first time, no type selected -> Fetch all types
    $capsTables = $capsController->CreateCapsTables('%');
}

// Output page data
$title = "About";

$content = $capsController->CreateCapsDropdownList().$capsTables . '<button name="btn_add_administrator" class="btn btn-outline-success my-2 my-sm-0" type="submit">Add Administrator</button>';

include "/Templates/Template.php";
?>



