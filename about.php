<?php  

$servername = "localhost";
$username = "root";
$password = "";
$database = "imagesbazaar";

$con = mysqli_connect('localhost','root','');

if ($con) {
    echo "connection successful";
}
else{
    echo "connection failed";
    exit(); 
}


// to select the specific connect database 

mysqli_select_db($con, 'imagesbazaar');

$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];

// now we have to run the query in order to insert the values in database 

$query = "INSERT INTO users (name , email, number) VALUES ('$name', '$email', '$number')";

// now to check the query is perfectly executed or not 

mysqli_query($con, $query);

// here we're giving header location because once user submit the form it should be again come on website 

header('location:index.php');


















?>