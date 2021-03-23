<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users_db";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // prepare sql and bind parameters
  $stmt = $conn->prepare("INSERT INTO users (email, phone, country, state,city,password)
  VALUES (:email, :phone, :country,:state,:city,:password)");
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':phone', $phone);
  $stmt->bindParam(':country', $country);
  $stmt->bindParam(':state', $state);
  $stmt->bindParam(':city', $city);
  $stmt->bindParam(':password', $password);

  $country= implode(" ",$_POST['country']);
  $state= implode(" ",$_POST['state']);
  $city= implode(" ",$_POST['city']);
  
  $email=$_POST['email'];
  $phone=$_POST['phone'];
 
  $password=$_POST['password'];
  $stmt->execute();


  echo "Thanks For Registration"; 


      $subject = "Simple Email Test via PHP";
      $body = "Thanks For Registration";
      $sender_email = "From: adwar.kenway@gmail.com";

      if (mail($email, $subject, $body, $sender_email)) {
          echo "Email successfully sent to $email";
      } else {
         echo "Email sending failed...";
      }
  


} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
?>