<?php
$GLOBALS["dbServer"] = "localhost";
$GLOBALS["dbusername"] = "root";
$GLOBALS["dbpassword"] = "";
$GLOBALS["dbname"] = "hotel";






function insertUser($firstName,$lastName,$email,$password){
       try{
       $dbServer = $GLOBALS['dbServer'];
       $dbusername = $GLOBALS["dbusername"];
       $dbpassword = $GLOBALS["dbpassword"];
       $dbname = $GLOBALS["dbname"];

      $conn = new PDO("mysql:host=$dbServer;dbname=$dbname", $dbusername, $dbpassword);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql = "INSERT INTO users (first_name, last_name, email,password)
          VALUES ('$firstName', '$lastName', '$email','$password')";
          // use exec() because no results are returned
          $conn->exec($sql);
          echo "New record created successfully";
          }
      catch(PDOException $e)
          {
          echo $sql . "<br>" . $e->getMessage();
          }

      $conn = null;
}



function book($room_type,$check_in_date,$check_out_date,$room_number,$description){
  try{
  $dbServer = $GLOBALS['dbServer'];
  $dbusername = $GLOBALS["dbusername"];
  $dbpassword = $GLOBALS["dbpassword"];
  $dbname = $GLOBALS["dbname"];

 $conn = new PDO("mysql:host=$dbServer;dbname=$dbname", $dbusername, $dbpassword);
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "INSERT INTO rooms (room_type, check_in_date, check_out_date,room_number,description)
     VALUES ('$room_type', '$check_in_date', '$check_out_date','$room_number','$description')";
     // use exec() because no results are returned
     $conn->exec($sql);
     echo "New record created successfully";
     }
 catch(PDOException $e)
     {
     echo $sql . "<br>" . $e->getMessage();
     }

 $conn = null;
}

//Login



?>