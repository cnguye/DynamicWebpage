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
                    <form method="post">
                        First Name: <input type="text" name="fname" ><br>
                        Last Name: <input type="text" name="lname"><br>
                        E-mail: <input type="text" name="email"><br>

                        <button name="button_1" class="btn btn-outline-success my-2 my-sm-0" type="submit">submit here</button>
                        <button name="button_2" class="btn btn-outline-success my-2 my-sm-0" type="submit" formaction="test_get.php">submit</button>

                        <?php
                        if (filter_input(INPUT_POST, 'button_1') !== null) {
                            // collect value of input field
                            $name = filter_input(INPUT_POST, 'fname');
                            if (empty($name)) {
                                print "Please specify a name";
                            } else {
                                echo nl2br("\n $name");
                            }
                        }
                        ?>
                    </form>
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
