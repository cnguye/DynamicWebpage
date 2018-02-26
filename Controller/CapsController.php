<?php

require("./Model/CapsModel.php");

class CapsController {

    function CreateCapsDropdownList() {
        $capsModel = new CapsModel();
        $result = "<form action = '' method = 'post' width = '200px'>
                Filter by Position:
                <select name = 'positions'>
                    <option value = '%' > All </option>
                    " . $this->CreateOptionValues($capsModel->GetStaffPositions()) .
                "</select>
                    <input type = 'submit' value = 'Search' />
                    </form>";

        return $result;
    }

    function CreateOptionValues(array $valueArray) {
        $result = "";

        foreach ($valueArray as $value) {
            $result = $result . "<option value = '$value'>$value</option>";
        }

        return $result;
    }

    function CreateCapsTables($positions) {
        $capsModel = new CapsModel();
        $positionArray = $capsModel->GetStaffByPositions($positions);
        $result = "";

        // Generate a capsTable for each capsEntity in array
        foreach ($positionArray as $key => $caps) {
            $result = $result .
                    "<table class = 'capsTable'>
                        <tr>
                            <th rowspan ='4' width = '150px'><img runat = 'server' src = '$caps->image' /></th>
                            <th width = '75px' >Name: </th>
                            <td>$caps->name</td>
                        </tr>
                        <tr>
                            <th>Position: </th>
                            <td>$caps->position</td>
                        </tr>
                        <tr>
                            <th>Contact: </th>
                            <td>$caps->number</td>
                        </tr>
                        <tr id='desc'>
                            <th>Description: </th>
                            <td>$caps->description</td>
                        </tr>
                    </table>";
        }
        return $result;
    }

    // <editor-fold desc="Get Methods">
    function GetStaffPositions() {
        $capsModel = new CapsMOdel();
        return $capsModel->GetStaffPositions();
    }

    function GetStaffByPosition($position) {
        $capsModel = new CapsMOdel();
        return $capsModel->GetStaffById($position);
    }

    function GetStaffById($id) {
        $capsModel = new CapsMOdel();
        return $capsModel->GetStaffById($id);
    }
    // </editor-fold>
    
    // Returns list of files in a folder.
    function GetImages(){
        // Select folder to scan
        $handle = opendir("Images/Employees");
        
        // Read all files and store names in array
        while($image = readdir($handle)){
                $images[] = $image;
        }
        closedir($handle);
        
        // Eclude all filenames where filename length < 3
        $imageArray = array();
        foreach($images as $image){
            if(strlen($image) > 2){
                array_push($imageArray, $image);
            }
        }
        
        // Create <select><option> Values and return result
        $result = $this->CreateOptionValues($imageArray);
        return $result;
    }
    
    // <editor-fold desc="Set methods">
    function InsertEmployee() {
        $name = filter_input(INPUT_POST, "txtName");
        $position = filter_input(INPUT_POST, "ddlPosition");
        $number = filter_input(INPUT_POST, "txtContact");
        $description = filter_input(INPUT_POST, "txtDescription");
        $image = filter_input(INPUT_POST, "ddlImage");
        
        $caps = new CapsEntity(-1, $name, $position, $number, $description, $image);
        $capsModel = new CapsModel();
        $capsModel->InsertEmployee($caps);
    }

    function UpdateEmployee($id) {
        
    }

    function DeleteEmployee($id) {
        
    }
    // </editor-fold>
}
