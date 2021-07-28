
# Test Project



#### Explain the Back_end code


constants to hold the connection parameters
```http
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = 'web_app_DB';
```
Establishing the connection
If success, the '$conn' variable will be an object that represent the connection to MySQL servername

```http
$conn = mysqli_connect($servername,
$username, $password, $database)
```
Including the connection parameters and object



```http
include 'DataBase_connection.php';
```


Checking whether the connection has succeeded or not.
 If there is an error, print it to the console. If not, continue.

 ```http

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
```

Reading the input from the frontend that is saved in the super global variable $_POST and save it into '$user' variable.
```http
$user = $_POST['name'];
```

An SQL query to be performed on the database
```http
$sql = "INSERT INTO users (id, name) VALUES (3,'".$user."')";
```

Perform the query on the database and checks if there is any errors or not.
```http
if(mysqli_query($conn, $sql)){
```

If the insertion has been done successfully, redirects the browser to the response page and print the variable '$user' there.

```http
echo "Record inserted successfully.";
    header("Location: ../front_end/response.php?user=".$user);
 
} else{
```
If not, print an error message
```http

    echo "ERROR: Not able to execute $sql. " . mysqli_error($conn);
}
```

Terminates the MySQL connection
```http
$conn->close();
?>
```


