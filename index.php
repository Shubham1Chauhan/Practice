<?php

if(isset($_POST['name'])){
  $server = "localhost";
  $username = "root";
  $password="";
  $con = mysqli_connect($server, $username, $password);

  if(!$con){
      die("Connection to this database failed due to " .  mysqli_connect_error());
  }
  // echo "Success connecting to the db";
  $name = $_POST['name'];
  $age = $_POST['age'];
  $gender = $_POST['gender'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $other = $_POST['other'];
  $sql = "INSERT INTO `trip`.`trips` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$other', current_timestamp());";
  echo $sql;

  if($con->query($sql) === true){
     echo "Successfully inserted";
  } else {
    echo "Error: $sql <br> $con->error";
  }

  $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Jacquard+12&family=Mukta:wght@200;300;400;500;600;700;800&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>*{margin: 0 px;
    padding: 0 px;
    box-sizing: border-box;
    }
    .container {
        max-width: 80%;
        align-items: center;
        padding: 34px;
        margin: auto;
    }
    .container h1,p{
        text-align: center;
        font-family: "Mukta", sans-serif;
        

    }
    .btn{
        color: white;
        background: purple;
        padding: 8px 12px;
        font-size: 20px;
        border: 2px solid white;
        border-radius: 14px;
        cursor: pointer;
    }
    .bg{
        width: 0%;
        position: center;
        z-index: -1;
        opacity: 0.6;

    }
    .SubmitMsg{
        color: green;
    }
    p{
        font-size: 20px;
    }
    input, textarea{
        font-size: 15px;
        margin: 11px auto;
        width:80%;
        padding: 7px;
        border: 2px solid black;
        border-radius: 6px;
        outline: none;
       
    }
    form{
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }




       </style>
</head>
<body>
  
    <img class="bg" src="bg.jpeg" alt="IIT Kharagpur">
    <div class="container"> 
        <h1> Welcome to IIT Kharagpur US Trip Form</h1>
        <p>Enter your details to confirm the trip</p>
        <p class="SubmitMsg">Thanks for submitting your form. We are happy to see you joining.</p>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone number">
            <textarea name="other" id="other" cols="30" rows="10" placeholder="Enter any other details"></textarea>
            <button class="btn">Submit</button>
        </form>
        
         
        
    </div>
    <script src="index.js"></script>
</body>
</html>
