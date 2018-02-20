<?php

require("Model/CapsModel.php");
class CapsController {
    function CreateCapsDropdownList(){
        $capsModel = new CapsModel();
        $result = "<form action = '' method = 'post' width = '200px'>
                Please select a type:
                <select name = 'types'>
                    <option value = '%' > All </option>
                    ".$this->CreateOptionValues($capsModel->GetEmployeePositions()).
                    "</select>
                    <input type = 'submit' value = 'Search' />
                    </form>";
        
        return $result;
    }
    
    function CreateOptionValues(array $valueArray){
        $result = "";
        
        foreach($valueArray as $value){
            $result = $result . "<option value = '$value'>$value</option>";
        }
        
        return $result;
    }
    
    function CreateCapsTables($positions){
        $capsModel = new CapsModel();
        $positionArray = $capsModel->GetEmployeeByPosition($positions);
        $result = "";
        
        // Generate a capsTable for each capsEntity in array
        foreach($positionArray as $key => $caps){
            $result = $result .
                    "<table class = 'capsTable'>
                        <tr>
                            <th rowspan ='6' width = '150px'><img runat = 'server' src = '$caps->image' /></th>
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
                        <tr>
                            <th>Description: </th>
                            <td>$caps->description</td>
                        </tr>
                    </table>";
        }
        return $result;
    }
}
