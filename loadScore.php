<?php
	
    require ('connectToDatabase.php');
	
	//This query grabs the top 10 scores, sorting by score and timestamp.
	$query = "SELECT * FROM `userdata` ORDER by `score` ASC LIMIT 10";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
		}
		} else {
		echo "<div>No records found.</div>";
	}
	$conn->close();
?>



