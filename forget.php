<?php

$showError=false;
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    include '_dbconnect.php';
    $name=$_POST['loguser'];

    $sql="SELECT * from user_details where name='$name'";
    $result=mysqli_query($conn,$sql);

    if($result->num_rows==1)
    {
        session_start();
        $_SESSION['name']=$name;
        $_SESSION['value']=true;
        header("location:update.php");
    }

    else{
        $showError=true;
    }
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
    <link rel="stylesheet" href="css/forget_styles.css">
    <script src="https://kit.fontawesome.com/0c077e7e73.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    
    <div class="row">

        <div class="col-md-6 left-box" style="background-color: black;">
            <img src="images/logo5.png" alt="" class="title-pic">
            <img src="images/logo2.png" alt="" class="title-pic-2">
            <!-- <div class="description">
                <p class="des">Discover the world of cinema like never before with our premier movie database
                    Explore your favorite titles, actors, and directors with ease, and stay up-to-date
                    on the latest news and reviews. Immerse yourself in the magic of film with our
                    sleek and sophisticated platform, where knowledge and entertainment collide.</p>            </div> -->
                    <img src="images/logo3.png" alt="" class="title-pic">
        </div>
        <div class="col-md-6 right-box" >
            <?php
                if($showError==true)
                {
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Invalid Username</strong>....Seems like You dont have an account with this username,try with another username.
                    or If you dont have an Account,Please do create One.
                    <button type="button" class="btn-close btn-primary" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                }
            ?>
            <button class="btn btn-light home" style="background-image: linear-gradient(to right, #CC00CC , #660066);"><i class="fa-solid fa-house icon "></i><a href="index.php">Home</a></button>
            <div class="container box">
                 <h2>Recover Your Account</h2>
                 <form action="forget.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="loguser" class="form-style" placeholder="Enter Your Registered Username" id="loguser" autocomplete="off" required>
                        <i class="input-icon fa-solid fa-user"></i>
                    </div>
                    <input type="submit" class="btn mt-4" value="Verify">
                    
                 </form>   
                   
            </div>
                
        </div>
    </div>
    
    
</body>
</html>

