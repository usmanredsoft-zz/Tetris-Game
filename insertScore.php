<?php

include('connectToDatabase.php');  
  
$name  = $_POST['name'];  
$score = $_POST['score'];  
echo "name: $name \n score:$score";
$query = "INSERT INTO userdata (name, score) VALUES ('" . $name . "', '" . $score . "')";  
  
if ($conn->query($query) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
	

?>


