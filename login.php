<?php
     session_start();
?>

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

        <title>Document</title>
    </head>
    <body style="background-color:#ff4d4d ;">

<!-- php code  -->
<?php
if(isset($_POST['lsub'])){
    $lemail =$_POST['email'];
    $lpass = $_POST['pass'];
  
require_once "database.php";
$sql= "select * from registerlogin where email= '$lemail'";
$result = mysqli_query($con, $sql);
 $rowCount = mysqli_num_rows($result);
 
  $sqlp= "select * from registerlogin where passwordd = '$lpass'";
  $results = mysqli_query($con, $sqlp);
  $rowCounts = mysqli_num_rows($results);
  if ($rowCount>0) {
    if($rowCounts>0){
      header("location:successful.php");
    }
    else{
      echo "<div class='alert alert-danger'>password does not match</div>";
    }
   }
  else{
    echo "<div class='alert alert-danger'>Email does not match</div>";
  }
}
?>
         
    <div class="" style="width:500px; margin:200px auto; background-color:white; border-radius:3px;">
        <h3 style="text-align:left; margin-bottom:30px;padding:25px 40px; font-weight:500px; font-size:2rem; ">Login</h3>
       <form  action="login.php" method="post" >

            <div class="row">
                <div class="col-md-12 " style="padding:3px 50px;">
                   <input  class="input-style" type="email" name="email" placeholder="EMAIL" required> <br><br>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 " style="padding:3px 50px;">
                  <input  class="input-style"  type="password" name="pass" placeholder="PASSWORD" required>
                </div>
             </div><br>

            <a style="padding:5px  150px; text-decoration:none; color:black; border:none; text-align: center; text-style:none; color:#82817e; " href="#">FORGOT YOUR PASSWORD?</a> <br><br>

            <div class="row pad">
                  <div class="col-md-6 col-sm-6" style="padding:0 0 0 0;" >
                     <a style="border:none; " href="./index.php"><input style="width:100%; background:gray; color:white; border:none; padding:10px 0; font-weight:bold; font-size:20px;" type="button"  value="REGISTER"></a>
                  </div>

                  <div class="col-md-6 col-sm-6"  >
                     <input style="width:100%; background:#1e2130; color:white; border:none; padding:10px 0; font-weight:bold; font-size:20px;" type="submit" name="lsub"  value="SIGN IN">
                  </div>
            </div>
       </form>
    </div>


    </body>
    </html>





