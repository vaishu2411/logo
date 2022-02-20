<?php
include("connect/connect.php");
 
$msg='';
if(isset($_POST['submit']))
{
    $full_name=$_POST['full_name'];
    $age=$_POST['age'];
    $batch=$_POST['batch'];
    $timing=$_POST['timing'];
    $phonenumber=$_POST['phonenumber'];
    
  $submit=$_POST['submit'];



     


    
$insertquery="INSERT INTO register 
(full_name,age,batch,timing,phonenumber)
VALUES('$full_name','$age','$batch','$timing','$phonenumber')";

$res=mysqli_query($con,$insertquery);

if($res)
{
    ?>
    <script>alert("Welcome to the ISHITA's ZUMBA Wokshop! Happy fitness!!")</script>
    <?php
}


else
{
    ?>
    <script>alert("data not inserted bitch")</script>
    <?php
}
}
?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Document</title>
</head>
<body>
    

    
<div class="container">
    <div class="brand-logo">
        <img source src="image/logo.png" width="130%" height=120%>
    </div>
     
    <div class="inputs">
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
      <label>Name</label>
      <input type="text" name="full_name" placeholder="Your Name" />
      <label>Age</label>
      <input type="number" name="age" placeholder="Your age" />
      <label>Choose a Session mode</label>
  <select name="batch" id="batch">
    <option value="offline">offline</option>
    <option value="online">online</option>
</select>
    <br>
    <label>Choose a time</label>
  <select name="timing" id="timing">
    <option value="morning">Morning</option>
    <option value="evening">Evening</option>
</select>
    <br>

      <label>Phonenumber</label>
      <input type="tel" name="phonenumber" placeholder="Your phone number" pattern="[0-9]{10}"/>
      <br>
      <input type="submit" name="submit" placeholder="Submit">
    </div>
    
  </div>


</body>
</html>