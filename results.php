<?php
include('layout.html');
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "database1";
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo("success");
$name=$_POST['firstname'];
$lastname=$_POST['lastname'];
$race=$_POST['race'];
$age=$_POST['age'];
  $sql = $conn->prepare("INSERT INTO tblChars (firstname, lastname, race, age)
  VALUES (:firstname, :lastname, :race, :age)");
  $sql->bindValue(":firstname", $name);
  $sql->bindValue(":lastname", $lastname);
  $sql->bindValue(":race", $race);
  $sql->bindValue(":age", $age);
//   $stmt = $conn->prepare("SELECT firstname FROM tblChars"); 
//   // use exec() because no results are returned
//   $stmt->execute();
//   $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
//   echo("<table> <tr> <th></th><th>name</th></tr>");
//   foreach($rows as $row){
//     echo("<tr>");
//     echo("<th>");
//     echo($row[''] . ": " );
//     echo("</th>");
//     echo("<td>");
//     echo($row['firstname']);
//     echo("</td>");
//     echo("</tr>");
//   }
$result=$sql->execute();

// echo("<br>" . $sql);
} catch(PDOException $e) {
    echo "<br>" . $e->getMessage();
  
  }