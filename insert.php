<?php

$conn = mysqli_connect("localhost", "root", "Janyga0440", "bullshit");
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$first_name = mysqli_real_escape_string($conn, $_POST['firstname']);
$last_name = mysqli_real_escape_string($conn, $_POST['lastname']);
$email_address = mysqli_real_escape_string($conn, $_POST['email']);
$comment = mysqli_real_escape_string($conn, $_POST['comment']);
$formCountries = mysqli_real_escape_string($conn, $_POST['formCountries']);
 
// attempt insert query execution
$sql = "INSERT INTO formsumbit (first_name, last_name, email, comments, formCountries) VALUES ('$first_name', '$last_name', '$email_address' , '$comment' , '$formCountries')";
if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// close connection
mysqli_close($conn);

header('Location: index.php');

?>