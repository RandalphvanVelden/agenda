<?php
$servername = "localhost";
$username = "Randalph";
$password = "MijnDatabase";
$dbname = "Agenda";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


// $username = $_POST['username'];
// $wachtwoord = $_POST['wachtwoord'];

// try{ $conn = new PDO("mysql:host=localhost; dbname=webshopdb", 'root', '');
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     $stmt = $conn->prepare("SELECT wachtwoord, id FROM users WHERE username=:fusername");

//     $stmt->execute([
//         'fusername' => $username
//     ]);

//     While($row=$stmt->fetch()){
//         $dbwachtwoord = $row['wachtwoord'];
//         $dbid = $row['id'];
//      }
    
// if ($wachtwoord== $dbwachtwoord){
//     session_start();
//     $_SESSION['id'] = $dbid;
//     $_SESSION['name'] = $username;
// }
// else{
//    echo "wachtwoord klopt niet met opgegeven gebruikersnaam";
// }
// }



// catch(PDOException $e) {
//     echo "Connection failed: " . $e->getMessage();
// }
// $conn = NULL;

// $host = '127.0.0.1';
// $db   = 'test';
// $user = 'root';
// $pass = '';
// $port = "3306";
// $charset = 'utf8mb4';

// $options = [
//     \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
//     \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
//     \PDO::ATTR_EMULATE_PREPARES   => false,
// ];
// $dsn = "mysql:host=$host;dbname=$db;charset=$charset;port=$port";
// try {
//      $pdo = new \PDO($dsn, $user, $pass, $options);
// } catch (\PDOException $e) {
//      throw new \PDOException($e->getMessage(), (int)$e->getCode());
// }

?>
