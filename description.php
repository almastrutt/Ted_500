<?php
include 'connect.php';
$output = ""; // Default variable


if($_SERVER["REQUEST_METHOD"]==="POST"){
    
    if(isset($_POST["stock-description"])){
        
        $searchQ = $_POST["stock-description"];
        
        $sql = "SELECT * FROM stock WHERE description LIKE '%$searchQ%'";
        $result = $conn->query($sql);
        //counting the number of rows
        $count = $result->num_rows;
        if($count == 0){
            $output="There was no search result";
        }
        else {
            
            while($row = $result->fetch_assoc()){
                  $name = $row['name'];
                  $description = $row['description'];
                  $output .="<div> '.$name.' '.$description.'</div>";
            }
        }
    
        
    }
}

echo $output;

?>