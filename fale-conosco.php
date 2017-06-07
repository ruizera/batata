<?php
/*
	echo 'hello world';
	
	echo 'POST <pre>';
	print_r($_POST);
	
	echo 'GET <pre>';
	print_r($_GET);
	
	echo 'REQUEST <pre>';
	print_r($_REQUEST);
*/	
	
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "thor";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";


$sql = "INSERT INTO usuario (nome,senha, email, endereco,cidade)
VALUES ('John', '12345678', 'john@example.com','geremias','belo horizonte')";

if ($conn->query($sql) === TRUE) {
  $msg = "New record created successfully";
} else {
  $msg = "Error: " . $sql . "<br>" . $conn->error;
}


$sql = "SELECT * FROM usuario";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //print_r($row);
		//echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    //echo "0 results";
}
$conn->close();

//sleep(2);
//header('Location: fale-conosco.html');


?>
<!DOCYTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
</head>
<body id="content">
<?=$msg?>
</body>
</html>