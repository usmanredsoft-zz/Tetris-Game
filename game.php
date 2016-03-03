<?php
ini_set("display_errors", "1");
//database connection
$servername = "localhost";
$username = "root";
$password = "";
$db = "gamed";
// Create connection
$conn =  mysqli_connect($servername, $username, $password,$db);

if($_POST['action'] == 'getBestPlayers'){
	$sql="
		SELECT id, name, score
		FROM userdata 
		ORDER BY score DESC LIMIT 10";
		if($result = mysqli_query($conn, $sql)){
		    while ($row = mysqli_fetch_assoc($result)) {
		    	$data[]=$row;
		    }
		}
		$r['results']=$data;
		echo json_encode($r); 
}
else if($_POST['action']=='checkScore'){
	$score = $_POST['score'];
	$data = array();
	//get top 10 scores
	$sql="
		SELECT id, name, score
		FROM userdata 
		ORDER BY score DESC";
	$c=0;	
	if($result = mysqli_query($conn, $sql)){
	    while ($row = mysqli_fetch_assoc($result)) {
	    	if($score <= $row['score']){
	    		//keep checking
	    		$c++;
	    	}else{
	    		//ops found his equal or smaller
	    		$rank=$c;
	    	}
	    }
	}
	
	$sql="
		SELECT id, name, score
		FROM userdata 
		ORDER BY score DESC LIMIT 10";
		
	if($result = mysqli_query($conn, $sql)){
		    while ($row = mysqli_fetch_assoc($result)) {
		    	$data = $row;
				if($score < $row['score']){
					$top_ten = false;
				}else{
					$top_ten = true;
				}
		}
	}
	$r['top10']=$top_ten;
	$r['rank']=$rank;
	echo json_encode($r);
}
?>