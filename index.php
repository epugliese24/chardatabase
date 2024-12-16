<?php
include('layout.html');
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "database1";

// try {
//   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//   // set the PDO error mode to exception
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//   // sql to create table
//   $sql = "CREATE TABLE tblChars (
//   id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//   firstname VARCHAR(300) NOT NULL,
//   race VARCHAR(30) NOT NULL,
//   age INT(255)
//   )";

//   // use exec() because no results are returned
//   $conn->exec($sql);
//   echo "Table tblChars created successfully";
// } catch(PDOException $e) {
//   echo $sql . "<br>" . $e->getMessage();
// }

echo('<form method=POST action="results.php">');
echo('<header>header</header>');
echo('<div id="inputBox">');
echo('<input type=text name="firstname" placeholder="first name here"> <br>');
echo('<input type=text name="lastname" placeholder="last name here"><br>');
echo('<input type=text name="race" placeholder="race here"><br>');
echo('<input type=text name="age" placeholder="age here (must be an int)"><br>');
echo('</div>');
echo('<input type=submit id="submitButton"> ');
echo('</form>');
