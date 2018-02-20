<?php

require("Entities/CapsEntity.php");

// Contains database related code for the Caps page.
class CapsModel {

    // Get all positions from the database and return them in an array.
    function GetEmployeePositions() {
        require 'Credentials.php';
        // Open connection and Select database.
        $connection = mysqli_connect($host, $user, $password, $database) or die(mysql_error());
        $result = mysqli_query($connection , "SELECT DISTINCT position FROM caps") or die(myswl_error());
        $positions = array();

        // Get data from database.
        while ($row = mysqli_fetch_array($result)) {
            array_push($positions, $row[0]);
        }
        // Close connection and return result.
        mysqli_close($connection);
        return $positions;
    }

    // Get capsEntity objects from the database and return them in an array.
    function GetEmployeeByPosition($position) {
        require 'Credentials.php';

        // Open connection and Select database
        $connection = mysqli_connect($host, $user, $password, $database) or die(mysql_error());
        $query = "SELECT * FROM caps WHERE position LIKE '$position'";
        $result = mysqli_query($connection , $query) or die(mysql_error());
        $employeeArray = array();
        
        // Get data from database.
        while ($row = mysqli_fetch_array($result)) {
            $name = $row[1];
            $position = $row[2];
            $number = $row[3];
            $description = $row[4];
            $image = $row[5];

            // Create position objects and store them in an array.
            $employee = new CapsEntity(-1, $name, $position, $number, $description, $image);
            array_push($employeeArray, $employee);
        }
        // Close connection and return result
        mysqli_close($connection);
        return $employeeArray;
    }

}
