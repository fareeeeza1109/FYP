<?php
 
include_once 'database.php';

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
//Create
if (isset($_POST['create'])) {
 
  try {
 
      $stmt = $conn->prepare("INSERT INTO tbl_senaraikehadiran_fyp(tingkatan_pelajar, kelas_pelajar) VALUES( :tingkatanpelajar, :kelaspelajar)");

     
      $stmt->bindParam(':tingkatanpelajar', $tingkatanpelajar, PDO::PARAM_INT);
      $stmt->bindParam(':kelaspelajar', $kelaspelajar, PDO::PARAM_STR);
      
   
    $tingkatanpelajar = $_POST['tingkatanpelajar'];
    $kelaspelajar =  $_POST['kelaspelajar'];
    
     
    $stmt->execute();
    }
 
  catch(PDOException $e)
  {
      echo "Error: " . $e->getMessage();
  }
}

 $conn = null;
?>