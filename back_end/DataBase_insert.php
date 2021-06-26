
<?php 
include 'DataBase_connection.php';
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
$user = $_POST['name'];
$sql = "INSERT INTO users (id, name) VALUES (3,'".$user."')";

if(mysqli_query($conn, $sql)){
    echo "Record inserted successfully.";
    header("Location: ../front_end/response.php?user=".$user);
} else{
    echo "ERROR: Not able to execute $sql. " . mysqli_error($conn);
}
$conn->close();
?>