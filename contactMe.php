<?php

$title = "Home";
$content = '<img src="Images/coffee1.png" class="imgLeft" />

<h3> Contact Me </h3>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>
                    
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">First Name</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Last Name</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Website</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Comments</span>
                        </div>
                        <textarea class="form-control" aria-label="With textarea"></textarea>
                    </div>

                    <div class="input-group ">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Gender</span>
                        </div>
                        &nbsp;
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="radioGender" value="male"> Male                            
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="radioGender" value="female"> Female
                        </div>

                    </div>
                <div class="float-md-right ">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="btn_contactMe">Submit</button>
                </div>
                </form>

';

include "Template.php";
?>

