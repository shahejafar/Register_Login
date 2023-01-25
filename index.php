

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <!-- Bootstrap link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
                    <!-- CSS link  -->
    <link rel="stylesheet" href="./style.css">
                        <!-- Icon link  -->
    <script src="https://kit.fontawesome.com/71a610c099.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Register </title>

</head>
<body class="indexbody">
<div class=" head" >


<?php
if(isset($_POST['ok'])){
  
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  $cpass = $_POST['passw'];
  $fname = $_POST['fname'];
  $lname =  $_POST['lname'];
  $gender = $_POST['gender'];
  $selectcountry = $_POST['country'];
  $agree = $_POST['condition'];
  $news = $_POST['newsletter'];
  $errors = array();

  require_once "database.php";
   
  // $sql = "select * from registerlogin where email = '$email'";
  // $result = mysqli_query($con, $sql);
  // $rowCount = mysqli_num_rows($result);
  // if ($rowCount>0) {
  //  $mailerror ="Email already exists!";
  //  echo $mailerror;
  // }
   
   if($pass != $cpass){
    
      echo "<div class='alert alert-danger'>password does not match</div>";
     }
     else{
    $insert = "insert into registerlogin(email, passwordd, repasswordd, firstname, lastname, gender, country, agree, newsletter)
     values('$email','$pass','$cpass','$fname','$lname','$gender','$selectcountry','$agree','$news')";
    mysqli_query($con, $insert);
    header('location:login.php');
    }
}

?>

      <h2>Responsive Registration Form </h2>

     <form action="./index.php" method="post" >
        <div class="row"> 
                <div class="col-lg-12 col-md-12 bor">
                  <i class="fa fa-envelope bord " ></i> 
                  <input class="Allinput" type="email" name="email" placeholder="Email" required>
                </div>   
         </div>
         <br><br>
         <div class="row">
            <div class="col-lg-12 bor">
              <i class="fa fa-lock bord"></i>  
              <input class="Allinput" type="password" name="pass" placeholder="Password" required >
            </div> 
         </div><br> <br>

         <div class="row"> 
            <div class="col-lg-12 bor">
               <i class="fa fa-lock bord"></i>  
               <input class="Allinput" type="password" name="passw" placeholder="Re-type Password" required >
             </div> 
         </div> <br> <br>
          <div  class="row" > 
              <div class="col-md-6  bor  "style="width:45%;margin-right: 10px; "  >
                <i class="fa fa-user bord "></i>  
                <input class="Allinput" style="width: 50%; " type="text" name="fname" placeholder="First Name" required>
              </div>
        
             <div class="col-md-6 bor " style="width:45%;margin-left: 35px; "  > 
                <i class="fa fa-user bord"></i>  
                <input class="Allinput" style="width: 50%; "   type="text" name="lname" placeholder="Last Name" required>
              </div>
         </div> <br> 
         
            <input class=" " type="radio" name="gender" id="malegender" value="male"> <label for="malegender">  Male </label> 
            
             <input class="radio-button " type="radio" name="gender" id="femalegender" value="female" required> <label for="femalegender"> Female </label>  
             <br><br>
         <div class="row"> 
            
           <select  style="padding: 5px; " required name="country">
            <option  value="">Select a Country </option>
            <option value="India">India</option>
            <option value="USA">USA</option>
            <option value="japan">Japan</option>
            <option value="China">China</option>
            <option value="London">London</option>
          </select>
   
          </div>
          <br>
          
            <input  type="checkbox" name ="condition" value="Agree"  id="agree" required> <label for="agree"> I agree with terms and conditions</label>  <br><br>
            <input  type="checkbox" name ="newsletter" value="Checked" id="newsletter" required> <label for="newsletter"> I want to receive the newsletter</label>  <br><br>
          
          <div class="row">
            <input class="register-btn" type="submit" value="Register" name="ok">
           </div>
        </div>
    </form>
</div>
</body>
</html>

