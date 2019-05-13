<?php
include("../config.php"); //access to database

//if linkedId has been sent then we update the value

if(isset($_POST["imageUrl"])) {
	$query = $con->prepare("UPDATE images SET clicks = clicks + 1 WHERE imageUrl=:imageUrl");
	$query->bindParam(":imageUrl", $_POST["imageUrl"]);

	$query->execute();
}
else {
	echo "No imageUrl passed to page";
}
?>
