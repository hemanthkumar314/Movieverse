<?php

$showAlert=false;
$showError=false;
$userError=false;
$phoneError=false;

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    include '_dbconnect.php';
    $name=$_POST['logname'];
    $email=$_POST['logemail'];
    $pass=$_POST['logpass'];
    $cpass=$_POST['logpass1'];
    $phn=$_POST['logphone'];

    if($stmt = $conn->prepare('SELECT user_id FROM user_details WHERE name = ?'))
    {
        $stmt->bind_param('s',$_POST['logname']);
        $stmt->execute();
        $stmt->store_result();
        
        if($stmt->num_rows>0)
        {
            // echo 'Username already exists';
            $userError=true;
        }
        else
        {
            if($pass==$cpass)
            {
                $pass = password_hash($_POST['logpass'], PASSWORD_DEFAULT);
                $sql="INSERT INTO `user_details` ( `name`, `email`, `password`, `phone`) 
                VALUES ('$name', '$email', '$pass', '$phn')";
        
                $result=mysqli_query($conn,$sql);
                
                if($result)
                {
                    $showAlert=true;
                }
            }
        
            else{
                $showError=true;
            }

        }
        $stmt->close();
    }
    else{
        echo 'Connection failed';
    }
    $conn->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://kit.fontawesome.com/0c077e7e73.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <title>MovieVerse</title>
</head>
<body>
    
    <div class="row">

        <div class="col-md-6 left-box" style="background-color: black;">
            <img src="images/logo5.png" alt="" class="title-pic">
            <img src="images/logo2.png" alt="" class="title-pic-2">
            <img src="images/logo3.png" alt="" class="title-pic">
        </div>

        <div class="col-md-6 right-box" >
                 <?php
                    if($showAlert==true)
                    {
                        echo '<div  class="alert alert-success alert-dismissible fade show" role="alert" >
                        <strong>Congratulations!! </strong>Your Account is created Successfully 
                        <button type="button" class="btn-close btn-primary" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
                    }

                    if($showError==true)
                    {
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Account creation Failed</strong>.... Make sure that You have entered the same password in both the feilds 
                        <button type="button" class="btn-close btn-primary" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
                    }

                    if($userError==true)
                    {
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Username Already Exists</strong>....Do try another username
                        <button type="button" class="btn-close btn-primary" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
                    }

                ?> 

                <div class="section">
                    <div class="container">
                        <div class="row full-height justify-content-center">
                            <div class="col-12 text-center align-self-center py-5">
                                <div class="section pb-5 pt-5 pt-sm-2 text-center">
                                    <h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
                                    <input class="checkbox" type="checkbox" id="reg-log" name="reg-log">
                                    <label for="reg-log"></label>
                                    <div class="card-3d-wrap mx-auto">
                                        <div class="card-3d-wrapper">
                                            <div class="card-front">
                                                <div class="center-wrap">
                                                    <div class="section text-center">
                                                        <h2 class="mb-4 pb-3">Log In</h2>
                                                        <form action="login.php" method="POST">
                                                                <div class="form-group">
                                                                    <input type="text" name="loguser" class="form-style" placeholder="Your Username" id="loguser" autocomplete="off" required>
                                                                    <i class="input-icon fa-solid fa-user"></i>
                                                                </div>	
                                                                <div class="form-group mt-2">
                                                                    <input type="text" name="logpass" class="form-style" placeholder="Your Password" id="logpass" autocomplete="off" required>
                                                                    <i class="input-icon fa-solid fa-lock"></i>
                                                                </div>
                                                                <div class="form-group mt-2">
                                                                    <label for="select-val"></label>
                                                                    <select name="logtype" id="select-val" class="form-style" style="position: relative; bottom: 25px;" required>
                                                                    <option value="" class="form-style">None</option>
                                                                    <option value="User" class="form-style">User</option>
                                                                    <option value="Admin" class="form-style">Admin</option>
                                                                    </select>
                                                                </div>
                                                                <input type="submit" class="btn mt-4" value="submit">
                                                        </form>
                                                        <p class="mb-0 mt-4 text-center"><a href="forget.php" class="link">Forgot your password?</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-back">
                                                <div class="center-wrap">
                                                    <div class="section text-center">
                                                        <h2 class="mb-4 pb-3" style="position: relative; top: 10px;">Sign Up</h2>
                                                        <form action="index.php" method="POST">
                                                                <div class="form-group">
                                                                    <input type="text" name="logname" class="form-style" placeholder="Your Name" id="logname" autocomplete="off" required>
                                                                    <i class="input-icon fa-solid fa-user"></i>
                                                                </div>	
                                                                <div class="form-group mt-2">
                                                                    <input  type="email" name="logemail" class="form-style" placeholder="Your Email" id="logemail" autocomplete="off" required>
                                                                    <i class="input-icon fa-sharp fa-solid fa-at"></i>
                                                                </div>	
                                                                <div class="form-group mt-2">
                                                                    <input type="text" name="logpass" class="form-style" placeholder="Your Password" id="logpass" autocomplete="off" required>
                                                                    <i class="input-icon fa-solid fa-lock"></i>
                                                                </div>
                                                                <div class="form-group mt-2">
                                                                    <input type="text" name="logpass1" class="form-style" placeholder="Confirm your Password" id="logpass" autocomplete="off" required>
                                                                    <i class="input-icon fa-solid fa-lock"></i>
                                                                </div>

                                                                <div class="form-group mt-2">
                                                                    <input type="tel" name="logphone" class="form-style" placeholder=" Phone Number(Format: 10 digit number)" id="logphone" pattern="[0-9]{10}" autocomplete="off" required>
                                                                    <i class="input-icon fa-solid fa-phone"></i>
                                                                    <!-- <small style="text-align: left; color:#c4c3ca">Format: 10 digit number</small> -->
                                                                </div>
                                                                
                                                                <input type="submit" class="btn mt-4" style="margin-top: 2%; position: relative; bottom: 12px;" value="submit">
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    
    
</body>
</html>

