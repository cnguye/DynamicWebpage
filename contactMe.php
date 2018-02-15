<?php

$title = "Home";
$content = '<img src="Images/coffee1.png" class="imgLeft" />

<h3> Contact Me </h3>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">First Name</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="fname">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Last Name</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="lname">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="email">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Website</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="website">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Comments</span>
                        </div>
                        <textarea class="form-control" aria-label="With textarea" name="comment"></textarea>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Gender</span>
                        </div>
                        &nbsp;
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" id="radioGender" value="male" name="gender"> Male                            
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" id="radioGender" value="female" name="gender"> Female
                        </div>

                    </div>
                    <div class="float-md-right ">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="btn_contactMe">Submit</button>
                    </div>
                </form>


';

include "Template.php";
include "test_input.php";
?>

