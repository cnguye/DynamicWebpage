<?php

$title = "Contact Me";
$content = '

<h3> Contact Me </h3>
<?php include "test_input.php";?>
               <form class="needs-validation" novalidate>
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom01">First name</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="First name" required>
                            <div class="invalid-feedback">
                                Please provide a first name.
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom02">Last name</label>
                            <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" required>
                            <div class="invalid-feedback">
                                Please provide a valid last name.
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class=" mb-3">
                            <label for="validationCustomUsername">Email</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="validationCustomUsername" placeholder="Email" aria-describedby="inputGroupPrepend" required>
                                <div class="invalid-feedback">
                                    Please provide a valid Email.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom03">Comment</label>
                            <input type="text" class="form-control" id="validationCustom03" placeholder="Comment" required>
                            <div class="invalid-feedback">
                                Please leave a comment regarding your concern.
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">
                                Agree to terms and conditions
                            </label>
                            <div class="invalid-feedback">
                                You must agree before submitting.
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </form>

                <script>
                    // Example starter JavaScript for disabling form submissions if there are invalid fields
                    (function () {
                        "use strict";
                        window.addEventListener("load", function () {
                            // Fetch all the forms we want to apply custom Bootstrap validation styles to
                            var forms = document.getElementsByClassName("needs-validation");
                            // Loop over them and prevent submission
                            var validation = Array.prototype.filter.call(forms, function (form) {
                                form.addEventListener("submit", function (event) {
                                    if (form.checkValidity() === false) {
                                        event.preventDefault();
                                        event.stopPropagation();
                                    }
                                    form.classList.add("was-validated");
                                }, false);
                            });
                        }, false);
                    })();
                </script>

';


include "Template.php";
//include "test_input.php";
?>

