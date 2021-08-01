<?php
include "database.php";
include "blogin.php";
echo "<script>alert('thank you we will contact you soon via your email')</script>";
$name=$_POST['names'];
echo "<br>";
$email=$_POST['email'];
echo "<br>";
$address=$_POST['adrs'];
echo "<br>";
$phone=$_POST['phne'];
echo "<br>";
$Occupation=$_POST['occupy'];
echo "<br>";
$message=$_POST['message'];

	
$sql="insert into rform (names,email,address,phone,occupation,message)values('$name','$email','$address','$phone','$Occupation','$message')";

$sql1="insert into store (names,email,address,phone,occupation,message)values('$name','$email','$address','$phone','$Occupation','$message')";

if ($conn->query($sql1) === TRUE){



	echo "new Record created successfully";

}

else{

	echo "error: " .$sql . "<br>" . $conn->error;
	echo "<script>alert('username or password incorrect!')</script>";
}



if ($conn->query($sql) === TRUE){



	echo "new Record created successfully";

}

else{

	echo "error: " .$sql . "<br>" . $conn->error;
}

$conn->close();


?>